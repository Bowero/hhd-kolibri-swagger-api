<?php
/**
 * PublicationEventDetails
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
 * PublicationEventDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicationEventDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicationEventDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => '\Swagger\Client\Model\PublicationEventDetailsType',
        'group' => '\Swagger\Client\Model\FloorFloorType',
        'type_of_assignment' => '\Swagger\Client\Model\PublicationEventDetailsTypeOfAssignment',
        'assignmentid' => 'string',
        'name' => 'string',
        'msg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'group' => null,
        'type_of_assignment' => null,
        'assignmentid' => 'guid',
        'name' => null,
        'msg' => null
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
        'type' => 'type',
        'group' => 'group',
        'type_of_assignment' => 'typeOfAssignment',
        'assignmentid' => 'assignmentid',
        'name' => 'name',
        'msg' => 'msg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'group' => 'setGroup',
        'type_of_assignment' => 'setTypeOfAssignment',
        'assignmentid' => 'setAssignmentid',
        'name' => 'setName',
        'msg' => 'setMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'group' => 'getGroup',
        'type_of_assignment' => 'getTypeOfAssignment',
        'assignmentid' => 'getAssignmentid',
        'name' => 'getName',
        'msg' => 'getMsg'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['type_of_assignment'] = isset($data['type_of_assignment']) ? $data['type_of_assignment'] : null;
        $this->container['assignmentid'] = isset($data['assignmentid']) ? $data['assignmentid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
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
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['type_of_assignment'] === null) {
            $invalidProperties[] = "'type_of_assignment' can't be null";
        }
        if ($this->container['assignmentid'] === null) {
            $invalidProperties[] = "'assignmentid' can't be null";
        }
        if ((mb_strlen($this->container['assignmentid']) < 1)) {
            $invalidProperties[] = "invalid value for 'assignmentid', the character length must be bigger than or equal to 1.";
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
     * @return \Swagger\Client\Model\PublicationEventDetailsType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\PublicationEventDetailsType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Swagger\Client\Model\FloorFloorType
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Swagger\Client\Model\FloorFloorType $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets type_of_assignment
     *
     * @return \Swagger\Client\Model\PublicationEventDetailsTypeOfAssignment
     */
    public function getTypeOfAssignment()
    {
        return $this->container['type_of_assignment'];
    }

    /**
     * Sets type_of_assignment
     *
     * @param \Swagger\Client\Model\PublicationEventDetailsTypeOfAssignment $type_of_assignment type_of_assignment
     *
     * @return $this
     */
    public function setTypeOfAssignment($type_of_assignment)
    {
        $this->container['type_of_assignment'] = $type_of_assignment;

        return $this;
    }

    /**
     * Gets assignmentid
     *
     * @return string
     */
    public function getAssignmentid()
    {
        return $this->container['assignmentid'];
    }

    /**
     * Sets assignmentid
     *
     * @param string $assignmentid assignmentid
     *
     * @return $this
     */
    public function setAssignmentid($assignmentid)
    {

        if ((mb_strlen($assignmentid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $assignmentid when calling PublicationEventDetails., must be bigger than or equal to 1.');
        }

        $this->container['assignmentid'] = $assignmentid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name String representation of assignment; e.g. address of objectassignment, name of project assignment.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string $msg msg
     *
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

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


