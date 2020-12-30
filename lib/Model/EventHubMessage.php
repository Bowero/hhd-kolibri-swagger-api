<?php
/**
 * EventHubMessage
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EventHubMessage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventHubMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventHubMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agency_id' => 'string',
        'id' => 'string',
        'stamp' => '\DateTime',
        'cat' => '\Swagger\Client\Model\FloorFloorType',
        'reminder' => '\Swagger\Client\Model\ReminderEventDetails',
        'msg' => '\Swagger\Client\Model\MessageEventDetails',
        'pub' => '\Swagger\Client\Model\PublicationEventDetails',
        'presence' => '\Swagger\Client\Model\PresenceEventDetails',
        'entity' => '\Swagger\Client\Model\EntityEventDetails',
        'usr' => '\Swagger\Client\Model\UserDetails',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agency_id' => 'guid',
        'id' => 'guid',
        'stamp' => 'date-time',
        'cat' => null,
        'reminder' => null,
        'msg' => null,
        'pub' => null,
        'presence' => null,
        'entity' => null,
        'usr' => null,
        'version' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'agency_id' => 'agencyId',
        'id' => 'id',
        'stamp' => 'stamp',
        'cat' => 'cat',
        'reminder' => 'reminder',
        'msg' => 'msg',
        'pub' => 'pub',
        'presence' => 'presence',
        'entity' => 'entity',
        'usr' => 'usr',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agency_id' => 'setAgencyId',
        'id' => 'setId',
        'stamp' => 'setStamp',
        'cat' => 'setCat',
        'reminder' => 'setReminder',
        'msg' => 'setMsg',
        'pub' => 'setPub',
        'presence' => 'setPresence',
        'entity' => 'setEntity',
        'usr' => 'setUsr',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agency_id' => 'getAgencyId',
        'id' => 'getId',
        'stamp' => 'getStamp',
        'cat' => 'getCat',
        'reminder' => 'getReminder',
        'msg' => 'getMsg',
        'pub' => 'getPub',
        'presence' => 'getPresence',
        'entity' => 'getEntity',
        'usr' => 'getUsr',
        'version' => 'getVersion'
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
        return self::$swaggerModelName;
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
        $this->container['agency_id'] = isset($data['agency_id']) ? $data['agency_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['stamp'] = isset($data['stamp']) ? $data['stamp'] : null;
        $this->container['cat'] = isset($data['cat']) ? $data['cat'] : null;
        $this->container['reminder'] = isset($data['reminder']) ? $data['reminder'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['pub'] = isset($data['pub']) ? $data['pub'] : null;
        $this->container['presence'] = isset($data['presence']) ? $data['presence'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['usr'] = isset($data['usr']) ? $data['usr'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['agency_id'] === null) {
            $invalidProperties[] = "'agency_id' can't be null";
        }
        if ((mb_strlen($this->container['agency_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'agency_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['stamp'] === null) {
            $invalidProperties[] = "'stamp' can't be null";
        }
        if ($this->container['cat'] === null) {
            $invalidProperties[] = "'cat' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ((mb_strlen($this->container['version']) < 1)) {
            $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
     * Gets agency_id
     *
     * @return string
     */
    public function getAgencyId()
    {
        return $this->container['agency_id'];
    }

    /**
     * Sets agency_id
     *
     * @param string $agency_id agency_id
     *
     * @return $this
     */
    public function setAgencyId($agency_id)
    {

        if ((mb_strlen($agency_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $agency_id when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['agency_id'] = $agency_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets stamp
     *
     * @return \DateTime
     */
    public function getStamp()
    {
        return $this->container['stamp'];
    }

    /**
     * Sets stamp
     *
     * @param \DateTime $stamp stamp
     *
     * @return $this
     */
    public function setStamp($stamp)
    {
        $this->container['stamp'] = $stamp;

        return $this;
    }

    /**
     * Gets cat
     *
     * @return \Swagger\Client\Model\FloorFloorType
     */
    public function getCat()
    {
        return $this->container['cat'];
    }

    /**
     * Sets cat
     *
     * @param \Swagger\Client\Model\FloorFloorType $cat cat
     *
     * @return $this
     */
    public function setCat($cat)
    {
        $this->container['cat'] = $cat;

        return $this;
    }

    /**
     * Gets reminder
     *
     * @return \Swagger\Client\Model\ReminderEventDetails
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param \Swagger\Client\Model\ReminderEventDetails $reminder reminder
     *
     * @return $this
     */
    public function setReminder($reminder)
    {
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return \Swagger\Client\Model\MessageEventDetails
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param \Swagger\Client\Model\MessageEventDetails $msg msg
     *
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets pub
     *
     * @return \Swagger\Client\Model\PublicationEventDetails
     */
    public function getPub()
    {
        return $this->container['pub'];
    }

    /**
     * Sets pub
     *
     * @param \Swagger\Client\Model\PublicationEventDetails $pub pub
     *
     * @return $this
     */
    public function setPub($pub)
    {
        $this->container['pub'] = $pub;

        return $this;
    }

    /**
     * Gets presence
     *
     * @return \Swagger\Client\Model\PresenceEventDetails
     */
    public function getPresence()
    {
        return $this->container['presence'];
    }

    /**
     * Sets presence
     *
     * @param \Swagger\Client\Model\PresenceEventDetails $presence presence
     *
     * @return $this
     */
    public function setPresence($presence)
    {
        $this->container['presence'] = $presence;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \Swagger\Client\Model\EntityEventDetails
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \Swagger\Client\Model\EntityEventDetails $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets usr
     *
     * @return \Swagger\Client\Model\UserDetails
     */
    public function getUsr()
    {
        return $this->container['usr'];
    }

    /**
     * Sets usr
     *
     * @param \Swagger\Client\Model\UserDetails $usr usr
     *
     * @return $this
     */
    public function setUsr($usr)
    {
        $this->container['usr'] = $usr;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The Message Type version specifies the version of the format of the event message. When the version number is not equal to what is expected the format of this event message might be different. Each time the format of the EventMessage class is changed the version number is incremented.
     *
     * @return $this
     */
    public function setVersion($version)
    {

        if ((mb_strlen($version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $version when calling EventHubMessage., must be bigger than or equal to 1.');
        }

        $this->container['version'] = $version;

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


