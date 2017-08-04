<?php
/**
 * GetAggregatedReport
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
 * GetAggregatedReport Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetAggregatedReport implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getAggregatedReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'range' => 'string',
        'requests' => 'int',
        'delivered' => 'int',
        'hard_bounces' => 'int',
        'soft_bounces' => 'int',
        'clicks' => 'int',
        'unique_clicks' => 'int',
        'opens' => 'int',
        'unique_opens' => 'int',
        'spam_reports' => 'int',
        'blocked' => 'int',
        'invalid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'range' => null,
        'requests' => 'int32',
        'delivered' => 'int32',
        'hard_bounces' => 'int32',
        'soft_bounces' => 'int32',
        'clicks' => 'int32',
        'unique_clicks' => 'int32',
        'opens' => 'int32',
        'unique_opens' => 'int32',
        'spam_reports' => 'int32',
        'blocked' => 'int32',
        'invalid' => 'int32'
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
        'range' => 'range',
        'requests' => 'requests',
        'delivered' => 'delivered',
        'hard_bounces' => 'hardBounces',
        'soft_bounces' => 'softBounces',
        'clicks' => 'clicks',
        'unique_clicks' => 'uniqueClicks',
        'opens' => 'opens',
        'unique_opens' => 'uniqueOpens',
        'spam_reports' => 'spamReports',
        'blocked' => 'blocked',
        'invalid' => 'invalid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'range' => 'setRange',
        'requests' => 'setRequests',
        'delivered' => 'setDelivered',
        'hard_bounces' => 'setHardBounces',
        'soft_bounces' => 'setSoftBounces',
        'clicks' => 'setClicks',
        'unique_clicks' => 'setUniqueClicks',
        'opens' => 'setOpens',
        'unique_opens' => 'setUniqueOpens',
        'spam_reports' => 'setSpamReports',
        'blocked' => 'setBlocked',
        'invalid' => 'setInvalid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'range' => 'getRange',
        'requests' => 'getRequests',
        'delivered' => 'getDelivered',
        'hard_bounces' => 'getHardBounces',
        'soft_bounces' => 'getSoftBounces',
        'clicks' => 'getClicks',
        'unique_clicks' => 'getUniqueClicks',
        'opens' => 'getOpens',
        'unique_opens' => 'getUniqueOpens',
        'spam_reports' => 'getSpamReports',
        'blocked' => 'getBlocked',
        'invalid' => 'getInvalid'
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
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['hard_bounces'] = isset($data['hard_bounces']) ? $data['hard_bounces'] : null;
        $this->container['soft_bounces'] = isset($data['soft_bounces']) ? $data['soft_bounces'] : null;
        $this->container['clicks'] = isset($data['clicks']) ? $data['clicks'] : null;
        $this->container['unique_clicks'] = isset($data['unique_clicks']) ? $data['unique_clicks'] : null;
        $this->container['opens'] = isset($data['opens']) ? $data['opens'] : null;
        $this->container['unique_opens'] = isset($data['unique_opens']) ? $data['unique_opens'] : null;
        $this->container['spam_reports'] = isset($data['spam_reports']) ? $data['spam_reports'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['invalid'] = isset($data['invalid']) ? $data['invalid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['range'] === null) {
            $invalid_properties[] = "'range' can't be null";
        }
        if ($this->container['requests'] === null) {
            $invalid_properties[] = "'requests' can't be null";
        }
        if ($this->container['delivered'] === null) {
            $invalid_properties[] = "'delivered' can't be null";
        }
        if ($this->container['hard_bounces'] === null) {
            $invalid_properties[] = "'hard_bounces' can't be null";
        }
        if ($this->container['soft_bounces'] === null) {
            $invalid_properties[] = "'soft_bounces' can't be null";
        }
        if ($this->container['clicks'] === null) {
            $invalid_properties[] = "'clicks' can't be null";
        }
        if ($this->container['unique_clicks'] === null) {
            $invalid_properties[] = "'unique_clicks' can't be null";
        }
        if ($this->container['opens'] === null) {
            $invalid_properties[] = "'opens' can't be null";
        }
        if ($this->container['unique_opens'] === null) {
            $invalid_properties[] = "'unique_opens' can't be null";
        }
        if ($this->container['spam_reports'] === null) {
            $invalid_properties[] = "'spam_reports' can't be null";
        }
        if ($this->container['blocked'] === null) {
            $invalid_properties[] = "'blocked' can't be null";
        }
        if ($this->container['invalid'] === null) {
            $invalid_properties[] = "'invalid' can't be null";
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

        if ($this->container['range'] === null) {
            return false;
        }
        if ($this->container['requests'] === null) {
            return false;
        }
        if ($this->container['delivered'] === null) {
            return false;
        }
        if ($this->container['hard_bounces'] === null) {
            return false;
        }
        if ($this->container['soft_bounces'] === null) {
            return false;
        }
        if ($this->container['clicks'] === null) {
            return false;
        }
        if ($this->container['unique_clicks'] === null) {
            return false;
        }
        if ($this->container['opens'] === null) {
            return false;
        }
        if ($this->container['unique_opens'] === null) {
            return false;
        }
        if ($this->container['spam_reports'] === null) {
            return false;
        }
        if ($this->container['blocked'] === null) {
            return false;
        }
        if ($this->container['invalid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets range
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     * @param string $range Time frame of the report
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets requests
     * @return int
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     * @param int $requests Number of requests for the timeframe
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets delivered
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     * @param int $delivered Number of delivered emails for the timeframe
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets hard_bounces
     * @return int
     */
    public function getHardBounces()
    {
        return $this->container['hard_bounces'];
    }

    /**
     * Sets hard_bounces
     * @param int $hard_bounces Number of hardbounces for the timeframe
     * @return $this
     */
    public function setHardBounces($hard_bounces)
    {
        $this->container['hard_bounces'] = $hard_bounces;

        return $this;
    }

    /**
     * Gets soft_bounces
     * @return int
     */
    public function getSoftBounces()
    {
        return $this->container['soft_bounces'];
    }

    /**
     * Sets soft_bounces
     * @param int $soft_bounces Number of softbounces for the timeframe
     * @return $this
     */
    public function setSoftBounces($soft_bounces)
    {
        $this->container['soft_bounces'] = $soft_bounces;

        return $this;
    }

    /**
     * Gets clicks
     * @return int
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     * @param int $clicks Number of clicks for the timeframe
     * @return $this
     */
    public function setClicks($clicks)
    {
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets unique_clicks
     * @return int
     */
    public function getUniqueClicks()
    {
        return $this->container['unique_clicks'];
    }

    /**
     * Sets unique_clicks
     * @param int $unique_clicks Number of unique clicks for the timeframe
     * @return $this
     */
    public function setUniqueClicks($unique_clicks)
    {
        $this->container['unique_clicks'] = $unique_clicks;

        return $this;
    }

    /**
     * Gets opens
     * @return int
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     * @param int $opens Number of openings for the timeframe
     * @return $this
     */
    public function setOpens($opens)
    {
        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets unique_opens
     * @return int
     */
    public function getUniqueOpens()
    {
        return $this->container['unique_opens'];
    }

    /**
     * Sets unique_opens
     * @param int $unique_opens Number of unique openings for the timeframe
     * @return $this
     */
    public function setUniqueOpens($unique_opens)
    {
        $this->container['unique_opens'] = $unique_opens;

        return $this;
    }

    /**
     * Gets spam_reports
     * @return int
     */
    public function getSpamReports()
    {
        return $this->container['spam_reports'];
    }

    /**
     * Sets spam_reports
     * @param int $spam_reports Number of complaint (spam report) for the timeframe
     * @return $this
     */
    public function setSpamReports($spam_reports)
    {
        $this->container['spam_reports'] = $spam_reports;

        return $this;
    }

    /**
     * Gets blocked
     * @return int
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param int $blocked Number of blocked contact emails for the timeframe
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets invalid
     * @return int
     */
    public function getInvalid()
    {
        return $this->container['invalid'];
    }

    /**
     * Sets invalid
     * @param int $invalid Number of invalid emails for the timeframe
     * @return $this
     */
    public function setInvalid($invalid)
    {
        $this->container['invalid'] = $invalid;

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


