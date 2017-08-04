<?php
/**
 * CreateContact1
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
 * CreateContact1 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateContact1 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createContact_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'attributes' => 'object',
        'email_blacklisted' => 'bool',
        'sms_blacklisted' => 'bool',
        'list_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => 'email',
        'attributes' => null,
        'email_blacklisted' => null,
        'sms_blacklisted' => null,
        'list_ids' => 'int32'
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
        'email' => 'email',
        'attributes' => 'attributes',
        'email_blacklisted' => 'emailBlacklisted',
        'sms_blacklisted' => 'smsBlacklisted',
        'list_ids' => 'listIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'attributes' => 'setAttributes',
        'email_blacklisted' => 'setEmailBlacklisted',
        'sms_blacklisted' => 'setSmsBlacklisted',
        'list_ids' => 'setListIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'attributes' => 'getAttributes',
        'email_blacklisted' => 'getEmailBlacklisted',
        'sms_blacklisted' => 'getSmsBlacklisted',
        'list_ids' => 'getListIds'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['email_blacklisted'] = isset($data['email_blacklisted']) ? $data['email_blacklisted'] : null;
        $this->container['sms_blacklisted'] = isset($data['sms_blacklisted']) ? $data['sms_blacklisted'] : null;
        $this->container['list_ids'] = isset($data['list_ids']) ? $data['list_ids'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address of the user. Mandatory if `attributes.sms` is not passed
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets attributes
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param object $attributes Values of the attributes to fill. The attributes must exist in you contact database
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets email_blacklisted
     * @return bool
     */
    public function getEmailBlacklisted()
    {
        return $this->container['email_blacklisted'];
    }

    /**
     * Sets email_blacklisted
     * @param bool $email_blacklisted Blacklist the contact for emails (emailBlacklisted = true)
     * @return $this
     */
    public function setEmailBlacklisted($email_blacklisted)
    {
        $this->container['email_blacklisted'] = $email_blacklisted;

        return $this;
    }

    /**
     * Gets sms_blacklisted
     * @return bool
     */
    public function getSmsBlacklisted()
    {
        return $this->container['sms_blacklisted'];
    }

    /**
     * Sets sms_blacklisted
     * @param bool $sms_blacklisted Blacklist the contact for SMS (smsBlacklisted = true)
     * @return $this
     */
    public function setSmsBlacklisted($sms_blacklisted)
    {
        $this->container['sms_blacklisted'] = $sms_blacklisted;

        return $this;
    }

    /**
     * Gets list_ids
     * @return int[]
     */
    public function getListIds()
    {
        return $this->container['list_ids'];
    }

    /**
     * Sets list_ids
     * @param int[] $list_ids Ids of the lists to add the contact to
     * @return $this
     */
    public function setListIds($list_ids)
    {
        $this->container['list_ids'] = $list_ids;

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


