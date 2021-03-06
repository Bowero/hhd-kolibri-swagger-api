<?php
/**
 * Space
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
 * Space Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Space implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Space';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balcony_type' => '\Swagger\Client\Model\BalconyType',
        'bathroom_facilities' => '\Swagger\Client\Model\BathroomFacility[]',
        'description' => '\Swagger\Client\Model\TranslatedText[]',
        'has_stairway' => 'bool',
        'is_renewed' => 'bool',
        'kitchen_type' => '\Swagger\Client\Model\KitchenType[]',
        'living_room_types' => '\Swagger\Client\Model\LivingRoomType[]',
        'construction_year' => 'int',
        'kitchen_facilities' => '\Swagger\Client\Model\KitchenFacility[]',
        'name' => 'string',
        'orientation' => '\Swagger\Client\Model\Orientation',
        'size' => '\Swagger\Client\Model\Size',
        'stove' => '\Swagger\Client\Model\Stove',
        'type' => '\Swagger\Client\Model\SpaceType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balcony_type' => null,
        'bathroom_facilities' => null,
        'description' => null,
        'has_stairway' => null,
        'is_renewed' => null,
        'kitchen_type' => null,
        'living_room_types' => null,
        'construction_year' => 'int32',
        'kitchen_facilities' => null,
        'name' => null,
        'orientation' => null,
        'size' => null,
        'stove' => null,
        'type' => null
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
        'balcony_type' => 'balconyType',
        'bathroom_facilities' => 'bathroomFacilities',
        'description' => 'description',
        'has_stairway' => 'hasStairway',
        'is_renewed' => 'isRenewed',
        'kitchen_type' => 'kitchenType',
        'living_room_types' => 'livingRoomTypes',
        'construction_year' => 'constructionYear',
        'kitchen_facilities' => 'kitchenFacilities',
        'name' => 'name',
        'orientation' => 'orientation',
        'size' => 'size',
        'stove' => 'stove',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balcony_type' => 'setBalconyType',
        'bathroom_facilities' => 'setBathroomFacilities',
        'description' => 'setDescription',
        'has_stairway' => 'setHasStairway',
        'is_renewed' => 'setIsRenewed',
        'kitchen_type' => 'setKitchenType',
        'living_room_types' => 'setLivingRoomTypes',
        'construction_year' => 'setConstructionYear',
        'kitchen_facilities' => 'setKitchenFacilities',
        'name' => 'setName',
        'orientation' => 'setOrientation',
        'size' => 'setSize',
        'stove' => 'setStove',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balcony_type' => 'getBalconyType',
        'bathroom_facilities' => 'getBathroomFacilities',
        'description' => 'getDescription',
        'has_stairway' => 'getHasStairway',
        'is_renewed' => 'getIsRenewed',
        'kitchen_type' => 'getKitchenType',
        'living_room_types' => 'getLivingRoomTypes',
        'construction_year' => 'getConstructionYear',
        'kitchen_facilities' => 'getKitchenFacilities',
        'name' => 'getName',
        'orientation' => 'getOrientation',
        'size' => 'getSize',
        'stove' => 'getStove',
        'type' => 'getType'
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
        $this->container['balcony_type'] = isset($data['balcony_type']) ? $data['balcony_type'] : null;
        $this->container['bathroom_facilities'] = isset($data['bathroom_facilities']) ? $data['bathroom_facilities'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['has_stairway'] = isset($data['has_stairway']) ? $data['has_stairway'] : null;
        $this->container['is_renewed'] = isset($data['is_renewed']) ? $data['is_renewed'] : null;
        $this->container['kitchen_type'] = isset($data['kitchen_type']) ? $data['kitchen_type'] : null;
        $this->container['living_room_types'] = isset($data['living_room_types']) ? $data['living_room_types'] : null;
        $this->container['construction_year'] = isset($data['construction_year']) ? $data['construction_year'] : null;
        $this->container['kitchen_facilities'] = isset($data['kitchen_facilities']) ? $data['kitchen_facilities'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['stove'] = isset($data['stove']) ? $data['stove'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets balcony_type
     *
     * @return \Swagger\Client\Model\BalconyType
     */
    public function getBalconyType()
    {
        return $this->container['balcony_type'];
    }

    /**
     * Sets balcony_type
     *
     * @param \Swagger\Client\Model\BalconyType $balcony_type balcony_type
     *
     * @return $this
     */
    public function setBalconyType($balcony_type)
    {
        $this->container['balcony_type'] = $balcony_type;

        return $this;
    }

    /**
     * Gets bathroom_facilities
     *
     * @return \Swagger\Client\Model\BathroomFacility[]
     */
    public function getBathroomFacilities()
    {
        return $this->container['bathroom_facilities'];
    }

    /**
     * Sets bathroom_facilities
     *
     * @param \Swagger\Client\Model\BathroomFacility[] $bathroom_facilities bathroom_facilities
     *
     * @return $this
     */
    public function setBathroomFacilities($bathroom_facilities)
    {
        $this->container['bathroom_facilities'] = $bathroom_facilities;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Swagger\Client\Model\TranslatedText[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Swagger\Client\Model\TranslatedText[] $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets has_stairway
     *
     * @return bool
     */
    public function getHasStairway()
    {
        return $this->container['has_stairway'];
    }

    /**
     * Sets has_stairway
     *
     * @param bool $has_stairway has_stairway
     *
     * @return $this
     */
    public function setHasStairway($has_stairway)
    {
        $this->container['has_stairway'] = $has_stairway;

        return $this;
    }

    /**
     * Gets is_renewed
     *
     * @return bool
     */
    public function getIsRenewed()
    {
        return $this->container['is_renewed'];
    }

    /**
     * Sets is_renewed
     *
     * @param bool $is_renewed is_renewed
     *
     * @return $this
     */
    public function setIsRenewed($is_renewed)
    {
        $this->container['is_renewed'] = $is_renewed;

        return $this;
    }

    /**
     * Gets kitchen_type
     *
     * @return \Swagger\Client\Model\KitchenType[]
     */
    public function getKitchenType()
    {
        return $this->container['kitchen_type'];
    }

    /**
     * Sets kitchen_type
     *
     * @param \Swagger\Client\Model\KitchenType[] $kitchen_type kitchen_type
     *
     * @return $this
     */
    public function setKitchenType($kitchen_type)
    {
        $this->container['kitchen_type'] = $kitchen_type;

        return $this;
    }

    /**
     * Gets living_room_types
     *
     * @return \Swagger\Client\Model\LivingRoomType[]
     */
    public function getLivingRoomTypes()
    {
        return $this->container['living_room_types'];
    }

    /**
     * Sets living_room_types
     *
     * @param \Swagger\Client\Model\LivingRoomType[] $living_room_types living_room_types
     *
     * @return $this
     */
    public function setLivingRoomTypes($living_room_types)
    {
        $this->container['living_room_types'] = $living_room_types;

        return $this;
    }

    /**
     * Gets construction_year
     *
     * @return int
     */
    public function getConstructionYear()
    {
        return $this->container['construction_year'];
    }

    /**
     * Sets construction_year
     *
     * @param int $construction_year construction_year
     *
     * @return $this
     */
    public function setConstructionYear($construction_year)
    {
        $this->container['construction_year'] = $construction_year;

        return $this;
    }

    /**
     * Gets kitchen_facilities
     *
     * @return \Swagger\Client\Model\KitchenFacility[]
     */
    public function getKitchenFacilities()
    {
        return $this->container['kitchen_facilities'];
    }

    /**
     * Sets kitchen_facilities
     *
     * @param \Swagger\Client\Model\KitchenFacility[] $kitchen_facilities kitchen_facilities
     *
     * @return $this
     */
    public function setKitchenFacilities($kitchen_facilities)
    {
        $this->container['kitchen_facilities'] = $kitchen_facilities;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return \Swagger\Client\Model\Orientation
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param \Swagger\Client\Model\Orientation $orientation orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \Swagger\Client\Model\Size
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Swagger\Client\Model\Size $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets stove
     *
     * @return \Swagger\Client\Model\Stove
     */
    public function getStove()
    {
        return $this->container['stove'];
    }

    /**
     * Sets stove
     *
     * @param \Swagger\Client\Model\Stove $stove stove
     *
     * @return $this
     */
    public function setStove($stove)
    {
        $this->container['stove'] = $stove;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\SpaceType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\SpaceType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


