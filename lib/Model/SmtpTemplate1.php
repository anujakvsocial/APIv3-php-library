<?php
/**
 * SmtpTemplate1
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
 * SmtpTemplate1 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmtpTemplate1 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'smtpTemplate_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'sender' => '\Swagger\Client\Model\SmtptemplatestemplateIdSender',
        'template_name' => 'string',
        'html_content' => 'string',
        'html_url' => 'string',
        'subject' => 'string',
        'reply_to' => 'string',
        'to_field' => 'string',
        'attachment_url' => 'string',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'sender' => null,
        'template_name' => null,
        'html_content' => null,
        'html_url' => 'url',
        'subject' => null,
        'reply_to' => 'email',
        'to_field' => null,
        'attachment_url' => 'url',
        'is_active' => null
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
        'tag' => 'tag',
        'sender' => 'sender',
        'template_name' => 'templateName',
        'html_content' => 'htmlContent',
        'html_url' => 'htmlUrl',
        'subject' => 'subject',
        'reply_to' => 'replyTo',
        'to_field' => 'toField',
        'attachment_url' => 'attachmentUrl',
        'is_active' => 'isActive'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'sender' => 'setSender',
        'template_name' => 'setTemplateName',
        'html_content' => 'setHtmlContent',
        'html_url' => 'setHtmlUrl',
        'subject' => 'setSubject',
        'reply_to' => 'setReplyTo',
        'to_field' => 'setToField',
        'attachment_url' => 'setAttachmentUrl',
        'is_active' => 'setIsActive'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'sender' => 'getSender',
        'template_name' => 'getTemplateName',
        'html_content' => 'getHtmlContent',
        'html_url' => 'getHtmlUrl',
        'subject' => 'getSubject',
        'reply_to' => 'getReplyTo',
        'to_field' => 'getToField',
        'attachment_url' => 'getAttachmentUrl',
        'is_active' => 'getIsActive'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['html_content'] = isset($data['html_content']) ? $data['html_content'] : null;
        $this->container['html_url'] = isset($data['html_url']) ? $data['html_url'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['reply_to'] = isset($data['reply_to']) ? $data['reply_to'] : null;
        $this->container['to_field'] = isset($data['to_field']) ? $data['to_field'] : null;
        $this->container['attachment_url'] = isset($data['attachment_url']) ? $data['attachment_url'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
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
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag Tag of the template
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets sender
     * @return \Swagger\Client\Model\SmtptemplatestemplateIdSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \Swagger\Client\Model\SmtptemplatestemplateIdSender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets template_name
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     * @param string $template_name Name of the template
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets html_content
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['html_content'];
    }

    /**
     * Sets html_content
     * @param string $html_content Required if htmlUrl is empty. Body of the message (HTML must have more than 10 characters)
     * @return $this
     */
    public function setHtmlContent($html_content)
    {
        $this->container['html_content'] = $html_content;

        return $this;
    }

    /**
     * Gets html_url
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['html_url'];
    }

    /**
     * Sets html_url
     * @param string $html_url Required if htmlContent is empty. URL to the body of the email (HTML)
     * @return $this
     */
    public function setHtmlUrl($html_url)
    {
        $this->container['html_url'] = $html_url;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject of the email
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets reply_to
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     * @param string $reply_to Email on which campaign recipients will be able to reply to
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets to_field
     * @return string
     */
    public function getToField()
    {
        return $this->container['to_field'];
    }

    /**
     * Sets to_field
     * @param string $to_field To personalize the «To» Field, e.g. if you want to include the first name and last name of your recipient, add [FNAME] [LNAME]. These attributes must already exist in contacts database
     * @return $this
     */
    public function setToField($to_field)
    {
        $this->container['to_field'] = $to_field;

        return $this;
    }

    /**
     * Gets attachment_url
     * @return string
     */
    public function getAttachmentUrl()
    {
        return $this->container['attachment_url'];
    }

    /**
     * Sets attachment_url
     * @param string $attachment_url Absolute url of the attachment (no local file). Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff and rtf
     * @return $this
     */
    public function setAttachmentUrl($attachment_url)
    {
        $this->container['attachment_url'] = $attachment_url;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active Status of the template. isActive = false means template is inactive, isActive = true means template is active
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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


