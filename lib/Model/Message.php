<?php
/**
 * Message
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API Swagger specification Kolibri24 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1.778.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_been_read' => 'bool',
        'info_url' => 'string',
        'linked_assignment' => '\Swagger\Client\Model\LinkedAssignment',
        'linked_relation' => '\Swagger\Client\Model\LinkedRelation',
        'linked_media_contract' => '\Swagger\Client\Model\LinkedMediaContract',
        'linked_search_assignment' => '\Swagger\Client\Model\LinkedSearchAssignment',
        'linked_employee' => '\Swagger\Client\Model\LinkedEmployee',
        'message_type' => '\Swagger\Client\Model\MessageType',
        'region' => 'string',
        'sender' => 'string',
        'subject' => 'string',
        'content' => 'string',
        'date_time_sent' => '\DateTime',
        'user_data' => '\Swagger\Client\Model\UserData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'has_been_read' => null,
        'info_url' => null,
        'linked_assignment' => null,
        'linked_relation' => null,
        'linked_media_contract' => null,
        'linked_search_assignment' => null,
        'linked_employee' => null,
        'message_type' => null,
        'region' => null,
        'sender' => null,
        'subject' => null,
        'content' => null,
        'date_time_sent' => 'date-time',
        'user_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'has_been_read' => 'hasBeenRead',
        'info_url' => 'infoUrl',
        'linked_assignment' => 'linkedAssignment',
        'linked_relation' => 'linkedRelation',
        'linked_media_contract' => 'linkedMediaContract',
        'linked_search_assignment' => 'linkedSearchAssignment',
        'linked_employee' => 'linkedEmployee',
        'message_type' => 'messageType',
        'region' => 'region',
        'sender' => 'sender',
        'subject' => 'subject',
        'content' => 'content',
        'date_time_sent' => 'dateTimeSent',
        'user_data' => 'userData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_been_read' => 'setHasBeenRead',
        'info_url' => 'setInfoUrl',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_relation' => 'setLinkedRelation',
        'linked_media_contract' => 'setLinkedMediaContract',
        'linked_search_assignment' => 'setLinkedSearchAssignment',
        'linked_employee' => 'setLinkedEmployee',
        'message_type' => 'setMessageType',
        'region' => 'setRegion',
        'sender' => 'setSender',
        'subject' => 'setSubject',
        'content' => 'setContent',
        'date_time_sent' => 'setDateTimeSent',
        'user_data' => 'setUserData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_been_read' => 'getHasBeenRead',
        'info_url' => 'getInfoUrl',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_relation' => 'getLinkedRelation',
        'linked_media_contract' => 'getLinkedMediaContract',
        'linked_search_assignment' => 'getLinkedSearchAssignment',
        'linked_employee' => 'getLinkedEmployee',
        'message_type' => 'getMessageType',
        'region' => 'getRegion',
        'sender' => 'getSender',
        'subject' => 'getSubject',
        'content' => 'getContent',
        'date_time_sent' => 'getDateTimeSent',
        'user_data' => 'getUserData'
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
        return self::$swaggerModelName;
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

        $this->container['has_been_read'] = isset($data['has_been_read']) ? $data['has_been_read'] : null;
        $this->container['info_url'] = isset($data['info_url']) ? $data['info_url'] : null;
        $this->container['linked_assignment'] = isset($data['linked_assignment']) ? $data['linked_assignment'] : null;
        $this->container['linked_relation'] = isset($data['linked_relation']) ? $data['linked_relation'] : null;
        $this->container['linked_media_contract'] = isset($data['linked_media_contract']) ? $data['linked_media_contract'] : null;
        $this->container['linked_search_assignment'] = isset($data['linked_search_assignment']) ? $data['linked_search_assignment'] : null;
        $this->container['linked_employee'] = isset($data['linked_employee']) ? $data['linked_employee'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['date_time_sent'] = isset($data['date_time_sent']) ? $data['date_time_sent'] : null;
        $this->container['user_data'] = isset($data['user_data']) ? $data['user_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets has_been_read
     *
     * @return bool
     */
    public function getHasBeenRead()
    {
        return $this->container['has_been_read'];
    }

    /**
     * Sets has_been_read
     *
     * @param bool $has_been_read has_been_read
     *
     * @return $this
     */
    public function setHasBeenRead($has_been_read)
    {
        $this->container['has_been_read'] = $has_been_read;

        return $this;
    }

    /**
     * Gets info_url
     *
     * @return string
     */
    public function getInfoUrl()
    {
        return $this->container['info_url'];
    }

    /**
     * Sets info_url
     *
     * @param string $info_url info_url
     *
     * @return $this
     */
    public function setInfoUrl($info_url)
    {
        $this->container['info_url'] = $info_url;

        return $this;
    }

    /**
     * Gets linked_assignment
     *
     * @return \Swagger\Client\Model\LinkedAssignment
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Swagger\Client\Model\LinkedAssignment $linked_assignment linked_assignment
     *
     * @return $this
     */
    public function setLinkedAssignment($linked_assignment)
    {
        $this->container['linked_assignment'] = $linked_assignment;

        return $this;
    }

    /**
     * Gets linked_relation
     *
     * @return \Swagger\Client\Model\LinkedRelation
     */
    public function getLinkedRelation()
    {
        return $this->container['linked_relation'];
    }

    /**
     * Sets linked_relation
     *
     * @param \Swagger\Client\Model\LinkedRelation $linked_relation linked_relation
     *
     * @return $this
     */
    public function setLinkedRelation($linked_relation)
    {
        $this->container['linked_relation'] = $linked_relation;

        return $this;
    }

    /**
     * Gets linked_media_contract
     *
     * @return \Swagger\Client\Model\LinkedMediaContract
     */
    public function getLinkedMediaContract()
    {
        return $this->container['linked_media_contract'];
    }

    /**
     * Sets linked_media_contract
     *
     * @param \Swagger\Client\Model\LinkedMediaContract $linked_media_contract linked_media_contract
     *
     * @return $this
     */
    public function setLinkedMediaContract($linked_media_contract)
    {
        $this->container['linked_media_contract'] = $linked_media_contract;

        return $this;
    }

    /**
     * Gets linked_search_assignment
     *
     * @return \Swagger\Client\Model\LinkedSearchAssignment
     */
    public function getLinkedSearchAssignment()
    {
        return $this->container['linked_search_assignment'];
    }

    /**
     * Sets linked_search_assignment
     *
     * @param \Swagger\Client\Model\LinkedSearchAssignment $linked_search_assignment linked_search_assignment
     *
     * @return $this
     */
    public function setLinkedSearchAssignment($linked_search_assignment)
    {
        $this->container['linked_search_assignment'] = $linked_search_assignment;

        return $this;
    }

    /**
     * Gets linked_employee
     *
     * @return \Swagger\Client\Model\LinkedEmployee
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Swagger\Client\Model\LinkedEmployee $linked_employee linked_employee
     *
     * @return $this
     */
    public function setLinkedEmployee($linked_employee)
    {
        $this->container['linked_employee'] = $linked_employee;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return \Swagger\Client\Model\MessageType
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \Swagger\Client\Model\MessageType $message_type message_type
     *
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets date_time_sent
     *
     * @return \DateTime
     */
    public function getDateTimeSent()
    {
        return $this->container['date_time_sent'];
    }

    /**
     * Sets date_time_sent
     *
     * @param \DateTime $date_time_sent date_time_sent
     *
     * @return $this
     */
    public function setDateTimeSent($date_time_sent)
    {
        $this->container['date_time_sent'] = $date_time_sent;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return \Swagger\Client\Model\UserData
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param \Swagger\Client\Model\UserData $user_data user_data
     *
     * @return $this
     */
    public function setUserData($user_data)
    {
        $this->container['user_data'] = $user_data;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


