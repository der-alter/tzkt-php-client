<?php
/**
 * SrCommitment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides free REST API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks of depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:   - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io)) - Mumbainet: `https://api.mumbainet.tzkt.io/` ([view docs](https://api.mumbainet.tzkt.io)) - Nairobinet: `https://api.nairobinet.tzkt.io/` ([view docs](https://api.nairobinet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io))  Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Discord: https://discord.gg/aG8XKuwsQd - Telegram: https://t.me/baking_bad_chat - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L - Twitter: https://twitter.com/TezosBakingBad - Email: hello@bakingbad.dev  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you must mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** or **\"Built with TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: 1.12.1
 * Contact: hello@bakingbad.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Model;

use \ArrayAccess;
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * SrCommitment Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SrCommitment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SrCommitment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'rollup' => '\Bzzhh\Tzkt\Model\SrCommitmentRollup',
        'initiator' => '\Bzzhh\Tzkt\Model\SrCommitmentInfoInitiator',
        'inbox_level' => 'int',
        'state' => 'string',
        'hash' => 'string',
        'ticks' => 'int',
        'first_level' => 'int',
        'first_time' => '\DateTime',
        'last_level' => 'int',
        'last_time' => '\DateTime',
        'stakers' => 'int',
        'active_stakers' => 'int',
        'successors' => 'int',
        'status' => 'string',
        'predecessor' => '\Bzzhh\Tzkt\Model\SrCommitmentPredecessor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'rollup' => null,
        'initiator' => null,
        'inbox_level' => 'int32',
        'state' => null,
        'hash' => null,
        'ticks' => 'int64',
        'first_level' => 'int32',
        'first_time' => 'date-time',
        'last_level' => 'int32',
        'last_time' => 'date-time',
        'stakers' => 'int32',
        'active_stakers' => 'int32',
        'successors' => 'int32',
        'status' => null,
        'predecessor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'rollup' => true,
		'initiator' => true,
		'inbox_level' => false,
		'state' => true,
		'hash' => true,
		'ticks' => false,
		'first_level' => false,
		'first_time' => false,
		'last_level' => false,
		'last_time' => false,
		'stakers' => false,
		'active_stakers' => false,
		'successors' => false,
		'status' => true,
		'predecessor' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'rollup' => 'rollup',
        'initiator' => 'initiator',
        'inbox_level' => 'inboxLevel',
        'state' => 'state',
        'hash' => 'hash',
        'ticks' => 'ticks',
        'first_level' => 'firstLevel',
        'first_time' => 'firstTime',
        'last_level' => 'lastLevel',
        'last_time' => 'lastTime',
        'stakers' => 'stakers',
        'active_stakers' => 'activeStakers',
        'successors' => 'successors',
        'status' => 'status',
        'predecessor' => 'predecessor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rollup' => 'setRollup',
        'initiator' => 'setInitiator',
        'inbox_level' => 'setInboxLevel',
        'state' => 'setState',
        'hash' => 'setHash',
        'ticks' => 'setTicks',
        'first_level' => 'setFirstLevel',
        'first_time' => 'setFirstTime',
        'last_level' => 'setLastLevel',
        'last_time' => 'setLastTime',
        'stakers' => 'setStakers',
        'active_stakers' => 'setActiveStakers',
        'successors' => 'setSuccessors',
        'status' => 'setStatus',
        'predecessor' => 'setPredecessor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rollup' => 'getRollup',
        'initiator' => 'getInitiator',
        'inbox_level' => 'getInboxLevel',
        'state' => 'getState',
        'hash' => 'getHash',
        'ticks' => 'getTicks',
        'first_level' => 'getFirstLevel',
        'first_time' => 'getFirstTime',
        'last_level' => 'getLastLevel',
        'last_time' => 'getLastTime',
        'stakers' => 'getStakers',
        'active_stakers' => 'getActiveStakers',
        'successors' => 'getSuccessors',
        'status' => 'getStatus',
        'predecessor' => 'getPredecessor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('rollup', $data ?? [], null);
        $this->setIfExists('initiator', $data ?? [], null);
        $this->setIfExists('inbox_level', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('ticks', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('first_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('last_time', $data ?? [], null);
        $this->setIfExists('stakers', $data ?? [], null);
        $this->setIfExists('active_stakers', $data ?? [], null);
        $this->setIfExists('successors', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('predecessor', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Internal TzKT id.   **[sortable]**
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rollup
     *
     * @return \Bzzhh\Tzkt\Model\SrCommitmentRollup|null
     */
    public function getRollup()
    {
        return $this->container['rollup'];
    }

    /**
     * Sets rollup
     *
     * @param \Bzzhh\Tzkt\Model\SrCommitmentRollup|null $rollup rollup
     *
     * @return self
     */
    public function setRollup($rollup)
    {

        if (is_null($rollup)) {
            array_push($this->openAPINullablesSetToNull, 'rollup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['rollup'] = $rollup;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \Bzzhh\Tzkt\Model\SrCommitmentInfoInitiator|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Bzzhh\Tzkt\Model\SrCommitmentInfoInitiator|null $initiator initiator
     *
     * @return self
     */
    public function setInitiator($initiator)
    {

        if (is_null($initiator)) {
            array_push($this->openAPINullablesSetToNull, 'initiator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initiator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets inbox_level
     *
     * @return int|null
     */
    public function getInboxLevel()
    {
        return $this->container['inbox_level'];
    }

    /**
     * Sets inbox_level
     *
     * @param int|null $inbox_level Inbox level.   **[sortable]**
     *
     * @return self
     */
    public function setInboxLevel($inbox_level)
    {

        if (is_null($inbox_level)) {
            throw new \InvalidArgumentException('non-nullable inbox_level cannot be null');
        }

        $this->container['inbox_level'] = $inbox_level;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State hash.
     *
     * @return self
     */
    public function setState($state)
    {

        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Commitment hash.
     *
     * @return self
     */
    public function setHash($hash)
    {

        if (is_null($hash)) {
            array_push($this->openAPINullablesSetToNull, 'hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets ticks
     *
     * @return int|null
     */
    public function getTicks()
    {
        return $this->container['ticks'];
    }

    /**
     * Sets ticks
     *
     * @param int|null $ticks Number of ticks.
     *
     * @return self
     */
    public function setTicks($ticks)
    {

        if (is_null($ticks)) {
            throw new \InvalidArgumentException('non-nullable ticks cannot be null');
        }

        $this->container['ticks'] = $ticks;

        return $this;
    }

    /**
     * Gets first_level
     *
     * @return int|null
     */
    public function getFirstLevel()
    {
        return $this->container['first_level'];
    }

    /**
     * Sets first_level
     *
     * @param int|null $first_level Level of the block where the commitment was first published.   **[sortable]**
     *
     * @return self
     */
    public function setFirstLevel($first_level)
    {

        if (is_null($first_level)) {
            throw new \InvalidArgumentException('non-nullable first_level cannot be null');
        }

        $this->container['first_level'] = $first_level;

        return $this;
    }

    /**
     * Gets first_time
     *
     * @return \DateTime|null
     */
    public function getFirstTime()
    {
        return $this->container['first_time'];
    }

    /**
     * Sets first_time
     *
     * @param \DateTime|null $first_time Timestamp of the block where the commitment was first published.
     *
     * @return self
     */
    public function setFirstTime($first_time)
    {

        if (is_null($first_time)) {
            throw new \InvalidArgumentException('non-nullable first_time cannot be null');
        }

        $this->container['first_time'] = $first_time;

        return $this;
    }

    /**
     * Gets last_level
     *
     * @return int|null
     */
    public function getLastLevel()
    {
        return $this->container['last_level'];
    }

    /**
     * Sets last_level
     *
     * @param int|null $last_level Level of the block where the commitment was last updated.   **[sortable]**
     *
     * @return self
     */
    public function setLastLevel($last_level)
    {

        if (is_null($last_level)) {
            throw new \InvalidArgumentException('non-nullable last_level cannot be null');
        }

        $this->container['last_level'] = $last_level;

        return $this;
    }

    /**
     * Gets last_time
     *
     * @return \DateTime|null
     */
    public function getLastTime()
    {
        return $this->container['last_time'];
    }

    /**
     * Sets last_time
     *
     * @param \DateTime|null $last_time Timestamp of the block where the commitment was last updated.
     *
     * @return self
     */
    public function setLastTime($last_time)
    {

        if (is_null($last_time)) {
            throw new \InvalidArgumentException('non-nullable last_time cannot be null');
        }

        $this->container['last_time'] = $last_time;

        return $this;
    }

    /**
     * Gets stakers
     *
     * @return int|null
     */
    public function getStakers()
    {
        return $this->container['stakers'];
    }

    /**
     * Sets stakers
     *
     * @param int|null $stakers Number of stakers, published this commitment.   **[sortable]**
     *
     * @return self
     */
    public function setStakers($stakers)
    {

        if (is_null($stakers)) {
            throw new \InvalidArgumentException('non-nullable stakers cannot be null');
        }

        $this->container['stakers'] = $stakers;

        return $this;
    }

    /**
     * Gets active_stakers
     *
     * @return int|null
     */
    public function getActiveStakers()
    {
        return $this->container['active_stakers'];
    }

    /**
     * Sets active_stakers
     *
     * @param int|null $active_stakers Number of active (not refuted) stakers.   **[sortable]**
     *
     * @return self
     */
    public function setActiveStakers($active_stakers)
    {

        if (is_null($active_stakers)) {
            throw new \InvalidArgumentException('non-nullable active_stakers cannot be null');
        }

        $this->container['active_stakers'] = $active_stakers;

        return $this;
    }

    /**
     * Gets successors
     *
     * @return int|null
     */
    public function getSuccessors()
    {
        return $this->container['successors'];
    }

    /**
     * Sets successors
     *
     * @param int|null $successors Number of successor commitments.   **[sortable]**
     *
     * @return self
     */
    public function setSuccessors($successors)
    {

        if (is_null($successors)) {
            throw new \InvalidArgumentException('non-nullable successors cannot be null');
        }

        $this->container['successors'] = $successors;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Commitment status (`pending`, `cemented`, `executed`, `refuted`, or `orphan`).
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets predecessor
     *
     * @return \Bzzhh\Tzkt\Model\SrCommitmentPredecessor|null
     */
    public function getPredecessor()
    {
        return $this->container['predecessor'];
    }

    /**
     * Sets predecessor
     *
     * @param \Bzzhh\Tzkt\Model\SrCommitmentPredecessor|null $predecessor predecessor
     *
     * @return self
     */
    public function setPredecessor($predecessor)
    {

        if (is_null($predecessor)) {
            array_push($this->openAPINullablesSetToNull, 'predecessor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('predecessor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['predecessor'] = $predecessor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


