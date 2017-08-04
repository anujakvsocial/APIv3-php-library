<?php
/**
 * InlineResponse20015Unsubscriptions
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
 * InlineResponse20015Unsubscriptions Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20015Unsubscriptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_15_unsubscriptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_unsubscription' => '\Swagger\Client\Model\InlineResponse20015UnsubscriptionsUserUnsubscription[]',
        'admin_unsubscription' => '\Swagger\Client\Model\InlineResponse20015UnsubscriptionsAdminUnsubscription[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_unsubscription' => null,
        'admin_unsubscription' => null
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
        'user_unsubscription' => 'userUnsubscription',
        'admin_unsubscription' => 'adminUnsubscription'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_unsubscription' => 'setUserUnsubscription',
        'admin_unsubscription' => 'setAdminUnsubscription'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_unsubscription' => 'getUserUnsubscription',
        'admin_unsubscription' => 'getAdminUnsubscription'
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
        $this->container['user_unsubscription'] = isset($data['user_unsubscription']) ? $data['user_unsubscription'] : null;
        $this->container['admin_unsubscription'] = isset($data['admin_unsubscription']) ? $data['admin_unsubscription'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_unsubscription'] === null) {
            $invalid_properties[] = "'user_unsubscription' can't be null";
        }
        if ($this->container['admin_unsubscription'] === null) {
            $invalid_properties[] = "'admin_unsubscription' can't be null";
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

        if ($this->container['user_unsubscription'] === null) {
            return false;
        }
        if ($this->container['admin_unsubscription'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_unsubscription
     * @return \Swagger\Client\Model\InlineResponse20015UnsubscriptionsUserUnsubscription[]
     */
    public function getUserUnsubscription()
    {
        return $this->container['user_unsubscription'];
    }

    /**
     * Sets user_unsubscription
     * @param \Swagger\Client\Model\InlineResponse20015UnsubscriptionsUserUnsubscription[] $user_unsubscription Contact has unsubscribed via the unsubscription link in the email
     * @return $this
     */
    public function setUserUnsubscription($user_unsubscription)
    {
        $this->container['user_unsubscription'] = $user_unsubscription;

        return $this;
    }

    /**
     * Gets admin_unsubscription
     * @return \Swagger\Client\Model\InlineResponse20015UnsubscriptionsAdminUnsubscription[]
     */
    public function getAdminUnsubscription()
    {
        return $this->container['admin_unsubscription'];
    }

    /**
     * Sets admin_unsubscription
     * @param \Swagger\Client\Model\InlineResponse20015UnsubscriptionsAdminUnsubscription[] $admin_unsubscription Contact has been unsubscribed from the administrator
     * @return $this
     */
    public function setAdminUnsubscription($admin_unsubscription)
    {
        $this->container['admin_unsubscription'] = $admin_unsubscription;

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


