<?php
/**
 * DoubleBakingOperation
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction  TzKT Explorer provides a free REST-like API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos. TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks depending on third-party services.  TzKT API is available for the following Tezos networks with the following base URLs:  - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io)) - Edo2net: `https://api.edo2net.tzkt.io/` ([view docs](https://api.edo2net.tzkt.io)) - Florencenet: `https://api.florencenet.tzkt.io/` ([view docs](https://api.florencenet.tzkt.io))  We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:  - Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io)) - Edo2net staging: `https://staging.api.edo2net.tzkt.io/` ([view docs](https://staging.api.edo2net.tzkt.io))      Feel free to contact us if you have any questions or feature requests. Your feedback really helps us make TzKT better!  - Email: hello@baking-bad.org - Twitter: https://twitter.com/TezosBakingBad - Telegram: [tg://resolve?domain=baking_bad_chat](tg://resolve?domain=baking_bad_chat) - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)  # Terms of Use  TzKT API is free for everyone and for both commercial and non-commercial usage.  If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend, you should mention that fact on your website or application by placing the label **\"Powered by TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).   # Rate Limits  There will be no rate limits as long as our servers can handle the load without additional infrastructure costs. However, any apparent abuse will be prevented by setting targeted rate limits.  Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/) and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).  ---
 *
 * The version of the OpenAPI document: v1.5
 * Contact: hello@baking-bad.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bzzhh\Tzkt\Model;
use \Bzzhh\Tzkt\ObjectSerializer;

/**
 * DoubleBakingOperation Class Doc Comment
 *
 * @category Class
 * @package  Bzzhh\Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DoubleBakingOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DoubleBakingOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'block' => 'string',
        'hash' => 'string',
        'accused_level' => 'int',
        'accuser' => 'OneOfAlias',
        'accuser_rewards' => 'int',
        'offender' => 'OneOfAlias',
        'offender_lost_deposits' => 'int',
        'offender_lost_rewards' => 'int',
        'offender_lost_fees' => 'int',
        'quote' => 'OneOfQuoteShort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => 'int32',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'block' => null,
        'hash' => null,
        'accused_level' => 'int32',
        'accuser' => null,
        'accuser_rewards' => 'int64',
        'offender' => null,
        'offender_lost_deposits' => 'int64',
        'offender_lost_rewards' => 'int64',
        'offender_lost_fees' => 'int64',
        'quote' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'id' => 'id',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'block' => 'block',
        'hash' => 'hash',
        'accused_level' => 'accusedLevel',
        'accuser' => 'accuser',
        'accuser_rewards' => 'accuserRewards',
        'offender' => 'offender',
        'offender_lost_deposits' => 'offenderLostDeposits',
        'offender_lost_rewards' => 'offenderLostRewards',
        'offender_lost_fees' => 'offenderLostFees',
        'quote' => 'quote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'block' => 'setBlock',
        'hash' => 'setHash',
        'accused_level' => 'setAccusedLevel',
        'accuser' => 'setAccuser',
        'accuser_rewards' => 'setAccuserRewards',
        'offender' => 'setOffender',
        'offender_lost_deposits' => 'setOffenderLostDeposits',
        'offender_lost_rewards' => 'setOffenderLostRewards',
        'offender_lost_fees' => 'setOffenderLostFees',
        'quote' => 'setQuote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'block' => 'getBlock',
        'hash' => 'getHash',
        'accused_level' => 'getAccusedLevel',
        'accuser' => 'getAccuser',
        'accuser_rewards' => 'getAccuserRewards',
        'offender' => 'getOffender',
        'offender_lost_deposits' => 'getOffenderLostDeposits',
        'offender_lost_rewards' => 'getOffenderLostRewards',
        'offender_lost_fees' => 'getOffenderLostFees',
        'quote' => 'getQuote'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['block'] = $data['block'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['accused_level'] = $data['accused_level'] ?? null;
        $this->container['accuser'] = $data['accuser'] ?? null;
        $this->container['accuser_rewards'] = $data['accuser_rewards'] ?? null;
        $this->container['offender'] = $data['offender'] ?? null;
        $this->container['offender_lost_deposits'] = $data['offender_lost_deposits'] ?? null;
        $this->container['offender_lost_rewards'] = $data['offender_lost_rewards'] ?? null;
        $this->container['offender_lost_fees'] = $data['offender_lost_fees'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the operation, `double_baking` - is used by bakers to provide evidence of double baking (baking two different blocks at the same height) by a baker
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
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
     * @param int|null $id Unique ID of the operation, stored in the TzKT indexer database
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level The height of the block from the genesis block, in which the operation was included
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Datetime of the block, in which the operation was included (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Hash of the block, in which the operation was included
     *
     * @return self
     */
    public function setBlock($block)
    {
        $this->container['block'] = $block;

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
     * @param string|null $hash Hash of the operation
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets accused_level
     *
     * @return int|null
     */
    public function getAccusedLevel()
    {
        return $this->container['accused_level'];
    }

    /**
     * Sets accused_level
     *
     * @param int|null $accused_level The height of the block from the genesis block, which was double baked
     *
     * @return self
     */
    public function setAccusedLevel($accused_level)
    {
        $this->container['accused_level'] = $accused_level;

        return $this;
    }

    /**
     * Gets accuser
     *
     * @return OneOfAlias|null
     */
    public function getAccuser()
    {
        return $this->container['accuser'];
    }

    /**
     * Sets accuser
     *
     * @param OneOfAlias|null $accuser Information about the baker (delegate), produced the block, in which the operation was included
     *
     * @return self
     */
    public function setAccuser($accuser)
    {
        $this->container['accuser'] = $accuser;

        return $this;
    }

    /**
     * Gets accuser_rewards
     *
     * @return int|null
     */
    public function getAccuserRewards()
    {
        return $this->container['accuser_rewards'];
    }

    /**
     * Sets accuser_rewards
     *
     * @param int|null $accuser_rewards Reward of the baker (delegate), produced the block, in which the operation was included
     *
     * @return self
     */
    public function setAccuserRewards($accuser_rewards)
    {
        $this->container['accuser_rewards'] = $accuser_rewards;

        return $this;
    }

    /**
     * Gets offender
     *
     * @return OneOfAlias|null
     */
    public function getOffender()
    {
        return $this->container['offender'];
    }

    /**
     * Sets offender
     *
     * @param OneOfAlias|null $offender Information about the baker (delegate), accused for producing two different blocks at the same height
     *
     * @return self
     */
    public function setOffender($offender)
    {
        $this->container['offender'] = $offender;

        return $this;
    }

    /**
     * Gets offender_lost_deposits
     *
     * @return int|null
     */
    public function getOffenderLostDeposits()
    {
        return $this->container['offender_lost_deposits'];
    }

    /**
     * Sets offender_lost_deposits
     *
     * @param int|null $offender_lost_deposits Amount of frozen security deposit, lost by accused baker (delegate)
     *
     * @return self
     */
    public function setOffenderLostDeposits($offender_lost_deposits)
    {
        $this->container['offender_lost_deposits'] = $offender_lost_deposits;

        return $this;
    }

    /**
     * Gets offender_lost_rewards
     *
     * @return int|null
     */
    public function getOffenderLostRewards()
    {
        return $this->container['offender_lost_rewards'];
    }

    /**
     * Sets offender_lost_rewards
     *
     * @param int|null $offender_lost_rewards Amount of frozen rewards, lost by accused baker (delegate)
     *
     * @return self
     */
    public function setOffenderLostRewards($offender_lost_rewards)
    {
        $this->container['offender_lost_rewards'] = $offender_lost_rewards;

        return $this;
    }

    /**
     * Gets offender_lost_fees
     *
     * @return int|null
     */
    public function getOffenderLostFees()
    {
        return $this->container['offender_lost_fees'];
    }

    /**
     * Sets offender_lost_fees
     *
     * @param int|null $offender_lost_fees Amount of frozen fees, lost by accused baker (delegate)
     *
     * @return self
     */
    public function setOffenderLostFees($offender_lost_fees)
    {
        $this->container['offender_lost_fees'] = $offender_lost_fees;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return OneOfQuoteShort|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param OneOfQuoteShort|null $quote Injected historical quote at the time of operation
     *
     * @return self
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


