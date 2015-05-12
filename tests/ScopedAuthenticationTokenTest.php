<?php

require_once 'Twilio/ScopedAuthenticationToken.php';

class ScopedAuthenticationTokenTest extends PHPUnit_Framework_TestCase
{
    const SIGNING_KEY_SID = 'SK123';

    const ACCOUNT_SID = 'AC123';

    protected function validateClaims($payload)
    {
        $this->assertEquals(self::SIGNING_KEY_SID, $payload->iss);
        $this->assertEquals(self::ACCOUNT_SID, $payload->sub);
        $this->assertNotNull($payload->nbf);
        $this->assertNotNull($payload->exp);
        $this->assertEquals($payload->nbf + 3600, $payload->exp);
        $this->assertNotNull($payload->jti);
        $this->assertEquals($payload->iss . '-' . $payload->nbf, $payload->jti);
        $this->assertNotNull($payload->grants);
    }

    function testEmptyGrants()
    {
        $scat = new ScopedAuthenticationToken(self::SIGNING_KEY_SID, self::ACCOUNT_SID);
        $token = $scat->encode('secret');
        $this->assertNotNull($token);
        $payload = JWT::decode($token, 'secret');
        $this->validateClaims($payload);
        $this->assertEquals(0, count($payload->grants));
    }

    function testAddGrant()
    {
        $scat = new ScopedAuthenticationToken(self::SIGNING_KEY_SID, self::ACCOUNT_SID);
        $scat->addGrant('https://api.twilio.com/**');
        $token = $scat->encode('secret');
        $this->assertNotNull($token);
        $payload = JWT::decode($token, 'secret');
        $this->validateClaims($payload);
        $this->assertEquals(1, count($payload->grants));
        $grant = $payload->grants[0];
        $this->assertEquals('https://api.twilio.com/**', $grant->res);
        $this->assertEquals(array('*'), $grant->act);
    }



    function testEndpointGrant()
    {
        $scat = new ScopedAuthenticationToken(self::SIGNING_KEY_SID, self::ACCOUNT_SID);
        $scat->addEndpointGrant('bob');
        $token = $scat->encode('secret');

        $this->assertNotNull($token);

        $payload = JWT::decode($token, 'secret');

        $this->validateClaims($payload);
        $this->assertEquals(1, count($payload->grants));
        $grant = $payload->grants[0];
        $this->assertEquals('sip:bob@AC123.endpoint.twilio.com', $grant->res);
        $this->assertEquals(array('listen', 'invite'), $grant->act);
    }

}
