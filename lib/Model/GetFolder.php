<?php
/**
 * GetFolder
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetFolder Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFolder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getFolder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'total_blacklisted' => 'int',
        'total_subscribers' => 'int',
        'unique_subscribers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'total_blacklisted' => 'int32',
        'total_subscribers' => 'int32',
        'unique_subscribers' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'total_blacklisted' => 'totalBlacklisted',
        'total_subscribers' => 'totalSubscribers',
        'unique_subscribers' => 'uniqueSubscribers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'total_blacklisted' => 'setTotalBlacklisted',
        'total_subscribers' => 'setTotalSubscribers',
        'unique_subscribers' => 'setUniqueSubscribers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'total_blacklisted' => 'getTotalBlacklisted',
        'total_subscribers' => 'getTotalSubscribers',
        'unique_subscribers' => 'getUniqueSubscribers'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['total_blacklisted'] = isset($data['total_blacklisted']) ? $data['total_blacklisted'] : null;
        $this->container['total_subscribers'] = isset($data['total_subscribers']) ? $data['total_subscribers'] : null;
        $this->container['unique_subscribers'] = isset($data['unique_subscribers']) ? $data['unique_subscribers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['total_blacklisted'] === null) {
            $invalid_properties[] = "'total_blacklisted' can't be null";
        }
        if ($this->container['total_subscribers'] === null) {
            $invalid_properties[] = "'total_subscribers' can't be null";
        }
        if ($this->container['unique_subscribers'] === null) {
            $invalid_properties[] = "'unique_subscribers' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['total_blacklisted'] === null) {
            return false;
        }
        if ($this->container['total_subscribers'] === null) {
            return false;
        }
        if ($this->container['unique_subscribers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the folder
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the folder
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets total_blacklisted
     * @return int
     */
    public function getTotalBlacklisted()
    {
        return $this->container['total_blacklisted'];
    }

    /**
     * Sets total_blacklisted
     * @param int $total_blacklisted Number of blacklisted contacts in the folder
     * @return $this
     */
    public function setTotalBlacklisted($total_blacklisted)
    {
        $this->container['total_blacklisted'] = $total_blacklisted;

        return $this;
    }

    /**
     * Gets total_subscribers
     * @return int
     */
    public function getTotalSubscribers()
    {
        return $this->container['total_subscribers'];
    }

    /**
     * Sets total_subscribers
     * @param int $total_subscribers Number of contacts in the folder
     * @return $this
     */
    public function setTotalSubscribers($total_subscribers)
    {
        $this->container['total_subscribers'] = $total_subscribers;

        return $this;
    }

    /**
     * Gets unique_subscribers
     * @return int
     */
    public function getUniqueSubscribers()
    {
        return $this->container['unique_subscribers'];
    }

    /**
     * Sets unique_subscribers
     * @param int $unique_subscribers Number of unique contacts in the folder
     * @return $this
     */
    public function setUniqueSubscribers($unique_subscribers)
    {
        $this->container['unique_subscribers'] = $unique_subscribers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


