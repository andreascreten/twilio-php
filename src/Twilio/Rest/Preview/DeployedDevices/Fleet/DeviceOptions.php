<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\DeployedDevices\Fleet;

use Twilio\Options;
use Twilio\Values;

abstract class DeviceOptions {
    /**
     * @param string $uniqueName Provides a unique and addressable name to be assigned to this Device, to be used in addition to SID, up to 128 characters long. 
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long. 
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long. 
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with. 
     * @param bool $enabled  
     * @return CreateDeviceOptions Options builder
     */
    public static function create(string $uniqueName = Values::NONE, string $friendlyName = Values::NONE, string $identity = Values::NONE, string $deploymentSid = Values::NONE, bool $enabled = Values::NONE): CreateDeviceOptions {
        return new CreateDeviceOptions($uniqueName, $friendlyName, $identity, $deploymentSid, $enabled);
    }



    /**
     * @param string $deploymentSid Filters the resulting list of Devices by a unique string identifier of the Deployment they are associated with. 
     * @return ReadDeviceOptions Options builder
     */
    public static function read(string $deploymentSid = Values::NONE): ReadDeviceOptions {
        return new ReadDeviceOptions($deploymentSid);
    }

    /**
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long. 
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long. 
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with. 
     * @param bool $enabled  
     * @return UpdateDeviceOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $identity = Values::NONE, string $deploymentSid = Values::NONE, bool $enabled = Values::NONE): UpdateDeviceOptions {
        return new UpdateDeviceOptions($friendlyName, $identity, $deploymentSid, $enabled);
    }

}

class CreateDeviceOptions extends Options {
    /**
     * @param string $uniqueName Provides a unique and addressable name to be assigned to this Device, to be used in addition to SID, up to 128 characters long.
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     * @param bool $enabled 
     */
    public function __construct(string $uniqueName = Values::NONE, string $friendlyName = Values::NONE, string $identity = Values::NONE, string $deploymentSid = Values::NONE, bool $enabled = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['identity'] = $identity;
        $this->options['deploymentSid'] = $deploymentSid;
        $this->options['enabled'] = $enabled;
    }

    /**
     * Provides a unique and addressable name to be assigned to this Device, to be used in addition to SID, up to 128 characters long.
     *
     * @param string $uniqueName Provides a unique and addressable name to be assigned to this Device, to be used in addition to SID, up to 128 characters long.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     *
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setIdentity(string $identity): self {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     *
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     * @return $this Fluent Builder
     */
    public function setDeploymentSid(string $deploymentSid): self {
        $this->options['deploymentSid'] = $deploymentSid;
        return $this;
    }

    /**
     * 
     *
     * @param bool $enabled 
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled): self {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.DeployedDevices.CreateDeviceOptions ' . $options . ']';
    }
}



class ReadDeviceOptions extends Options {
    /**
     * @param string $deploymentSid Filters the resulting list of Devices by a unique string identifier of the Deployment they are associated with.
     */
    public function __construct(string $deploymentSid = Values::NONE) {
        $this->options['deploymentSid'] = $deploymentSid;
    }

    /**
     * Filters the resulting list of Devices by a unique string identifier of the Deployment they are associated with.
     *
     * @param string $deploymentSid Filters the resulting list of Devices by a unique string identifier of the Deployment they are associated with.
     * @return $this Fluent Builder
     */
    public function setDeploymentSid(string $deploymentSid): self {
        $this->options['deploymentSid'] = $deploymentSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.DeployedDevices.ReadDeviceOptions ' . $options . ']';
    }
}

class UpdateDeviceOptions extends Options {
    /**
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     * @param bool $enabled 
     */
    public function __construct(string $friendlyName = Values::NONE, string $identity = Values::NONE, string $deploymentSid = Values::NONE, bool $enabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['identity'] = $identity;
        $this->options['deploymentSid'] = $deploymentSid;
        $this->options['enabled'] = $enabled;
    }

    /**
     * Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text to be assigned to this Device, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     *
     * @param string $identity Provides an arbitrary string identifier representing a human user to be associated with this Device, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setIdentity(string $identity): self {
        $this->options['identity'] = $identity;
        return $this;
    }

    /**
     * Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     *
     * @param string $deploymentSid Specifies the unique string identifier of the Deployment group that this Device is going to be associated with.
     * @return $this Fluent Builder
     */
    public function setDeploymentSid(string $deploymentSid): self {
        $this->options['deploymentSid'] = $deploymentSid;
        return $this;
    }

    /**
     * 
     *
     * @param bool $enabled 
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled): self {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.DeployedDevices.UpdateDeviceOptions ' . $options . ']';
    }
}

