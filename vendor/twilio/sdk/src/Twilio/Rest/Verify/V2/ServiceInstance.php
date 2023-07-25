<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Verify\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Verify\V2\Service\EntityList;
use Twilio\Rest\Verify\V2\Service\VerificationCheckList;
use Twilio\Rest\Verify\V2\Service\VerificationList;
use Twilio\Rest\Verify\V2\Service\AccessTokenList;
use Twilio\Rest\Verify\V2\Service\RateLimitList;
use Twilio\Rest\Verify\V2\Service\WebhookList;
use Twilio\Rest\Verify\V2\Service\MessagingConfigurationList;


/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $friendlyName
 * @property int|null $codeLength
 * @property bool|null $lookupEnabled
 * @property bool|null $psd2Enabled
 * @property bool|null $skipSmsToLandlines
 * @property bool|null $dtmfInputRequired
 * @property string|null $ttsName
 * @property bool|null $doNotShareWarningEnabled
 * @property bool|null $customCodeEnabled
 * @property array|null $push
 * @property array|null $totp
 * @property string|null $defaultTemplateSid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 * @property array|null $links
 */
class ServiceInstance extends InstanceResource
{
    protected $_entities;
    protected $_verificationChecks;
    protected $_verifications;
    protected $_accessTokens;
    protected $_rateLimits;
    protected $_webhooks;
    protected $_messagingConfigurations;

    /**
     * Initialize the ServiceInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The Twilio-provided string that uniquely identifies the Verification Service resource to delete.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'codeLength' => Values::array_get($payload, 'code_length'),
            'lookupEnabled' => Values::array_get($payload, 'lookup_enabled'),
            'psd2Enabled' => Values::array_get($payload, 'psd2_enabled'),
            'skipSmsToLandlines' => Values::array_get($payload, 'skip_sms_to_landlines'),
            'dtmfInputRequired' => Values::array_get($payload, 'dtmf_input_required'),
            'ttsName' => Values::array_get($payload, 'tts_name'),
            'doNotShareWarningEnabled' => Values::array_get($payload, 'do_not_share_warning_enabled'),
            'customCodeEnabled' => Values::array_get($payload, 'custom_code_enabled'),
            'push' => Values::array_get($payload, 'push'),
            'totp' => Values::array_get($payload, 'totp'),
            'defaultTemplateSid' => Values::array_get($payload, 'default_template_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ServiceContext Context for this ServiceInstance
     */
    protected function proxy(): ServiceContext
    {
        if (!$this->context) {
            $this->context = new ServiceContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ServiceInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ServiceInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the entities
     */
    protected function getEntities(): EntityList
    {
        return $this->proxy()->entities;
    }

    /**
     * Access the verificationChecks
     */
    protected function getVerificationChecks(): VerificationCheckList
    {
        return $this->proxy()->verificationChecks;
    }

    /**
     * Access the verifications
     */
    protected function getVerifications(): VerificationList
    {
        return $this->proxy()->verifications;
    }

    /**
     * Access the accessTokens
     */
    protected function getAccessTokens(): AccessTokenList
    {
        return $this->proxy()->accessTokens;
    }

    /**
     * Access the rateLimits
     */
    protected function getRateLimits(): RateLimitList
    {
        return $this->proxy()->rateLimits;
    }

    /**
     * Access the webhooks
     */
    protected function getWebhooks(): WebhookList
    {
        return $this->proxy()->webhooks;
    }

    /**
     * Access the messagingConfigurations
     */
    protected function getMessagingConfigurations(): MessagingConfigurationList
    {
        return $this->proxy()->messagingConfigurations;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Verify.V2.ServiceInstance ' . \implode(' ', $context) . ']';
    }
}

