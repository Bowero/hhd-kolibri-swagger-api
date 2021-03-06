<?php
/**
 * TimelineEventsSearchRequest
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
 * TimelineEventsSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimelineEventsSearchRequest extends SearchRequest 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimelineEventsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignment_id' => 'string',
        'filter_by_action_types' => '\Swagger\Client\Model\TimelineActionType[]',
        'include_statistics' => 'bool',
        'max_date_time' => '\DateTime',
        'min_date_time' => '\DateTime',
        'order_by' => 'object',
        'relation_id' => 'string',
        'term_fields' => '\Swagger\Client\Model\TimelineTermField[]',
        'culture' => 'string',
        'include_timeline_events_of_versions' => 'bool',
        'include_timeline_events_of_child_items' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignment_id' => 'guid',
        'filter_by_action_types' => null,
        'include_statistics' => null,
        'max_date_time' => 'date-time',
        'min_date_time' => 'date-time',
        'order_by' => null,
        'relation_id' => 'guid',
        'term_fields' => null,
        'culture' => null,
        'include_timeline_events_of_versions' => null,
        'include_timeline_events_of_child_items' => null
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
        'assignment_id' => 'assignmentId',
        'filter_by_action_types' => 'filterByActionTypes',
        'include_statistics' => 'includeStatistics',
        'max_date_time' => 'maxDateTime',
        'min_date_time' => 'minDateTime',
        'order_by' => 'orderBy',
        'relation_id' => 'relationId',
        'term_fields' => 'termFields',
        'culture' => 'culture',
        'include_timeline_events_of_versions' => 'includeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'includeTimelineEventsOfChildItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_id' => 'setAssignmentId',
        'filter_by_action_types' => 'setFilterByActionTypes',
        'include_statistics' => 'setIncludeStatistics',
        'max_date_time' => 'setMaxDateTime',
        'min_date_time' => 'setMinDateTime',
        'order_by' => 'setOrderBy',
        'relation_id' => 'setRelationId',
        'term_fields' => 'setTermFields',
        'culture' => 'setCulture',
        'include_timeline_events_of_versions' => 'setIncludeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'setIncludeTimelineEventsOfChildItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_id' => 'getAssignmentId',
        'filter_by_action_types' => 'getFilterByActionTypes',
        'include_statistics' => 'getIncludeStatistics',
        'max_date_time' => 'getMaxDateTime',
        'min_date_time' => 'getMinDateTime',
        'order_by' => 'getOrderBy',
        'relation_id' => 'getRelationId',
        'term_fields' => 'getTermFields',
        'culture' => 'getCulture',
        'include_timeline_events_of_versions' => 'getIncludeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'getIncludeTimelineEventsOfChildItems'
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

        $this->container['assignment_id'] = isset($data['assignment_id']) ? $data['assignment_id'] : null;
        $this->container['filter_by_action_types'] = isset($data['filter_by_action_types']) ? $data['filter_by_action_types'] : null;
        $this->container['include_statistics'] = isset($data['include_statistics']) ? $data['include_statistics'] : null;
        $this->container['max_date_time'] = isset($data['max_date_time']) ? $data['max_date_time'] : null;
        $this->container['min_date_time'] = isset($data['min_date_time']) ? $data['min_date_time'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['relation_id'] = isset($data['relation_id']) ? $data['relation_id'] : null;
        $this->container['term_fields'] = isset($data['term_fields']) ? $data['term_fields'] : null;
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['include_timeline_events_of_versions'] = isset($data['include_timeline_events_of_versions']) ? $data['include_timeline_events_of_versions'] : null;
        $this->container['include_timeline_events_of_child_items'] = isset($data['include_timeline_events_of_child_items']) ? $data['include_timeline_events_of_child_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
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
     * Gets assignment_id
     *
     * @return string
     */
    public function getAssignmentId()
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     *
     * @param string $assignment_id Search timeline events by a specific assignment Id.
     *
     * @return $this
     */
    public function setAssignmentId($assignment_id)
    {
        $this->container['assignment_id'] = $assignment_id;

        return $this;
    }

    /**
     * Gets filter_by_action_types
     *
     * @return \Swagger\Client\Model\TimelineActionType[]
     */
    public function getFilterByActionTypes()
    {
        return $this->container['filter_by_action_types'];
    }

    /**
     * Sets filter_by_action_types
     *
     * @param \Swagger\Client\Model\TimelineActionType[] $filter_by_action_types Search timeline events of given type (e.g. only tasks and/or agendaitems).
     *
     * @return $this
     */
    public function setFilterByActionTypes($filter_by_action_types)
    {
        $this->container['filter_by_action_types'] = $filter_by_action_types;

        return $this;
    }

    /**
     * Gets include_statistics
     *
     * @return bool
     */
    public function getIncludeStatistics()
    {
        return $this->container['include_statistics'];
    }

    /**
     * Sets include_statistics
     *
     * @param bool $include_statistics Return statistics, like counts of timeline events in past, today and future.
     *
     * @return $this
     */
    public function setIncludeStatistics($include_statistics)
    {
        $this->container['include_statistics'] = $include_statistics;

        return $this;
    }

    /**
     * Gets max_date_time
     *
     * @return \DateTime
     */
    public function getMaxDateTime()
    {
        return $this->container['max_date_time'];
    }

    /**
     * Sets max_date_time
     *
     * @param \DateTime $max_date_time Don't return timeline events with a date after this given maximum date value.
     *
     * @return $this
     */
    public function setMaxDateTime($max_date_time)
    {
        $this->container['max_date_time'] = $max_date_time;

        return $this;
    }

    /**
     * Gets min_date_time
     *
     * @return \DateTime
     */
    public function getMinDateTime()
    {
        return $this->container['min_date_time'];
    }

    /**
     * Sets min_date_time
     *
     * @param \DateTime $min_date_time Don't return timeline events with a date before this given minimum date value.
     *
     * @return $this
     */
    public function setMinDateTime($min_date_time)
    {
        $this->container['min_date_time'] = $min_date_time;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return object
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param object $order_by Order the results by the indicated timeline event field.
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets relation_id
     *
     * @return string
     */
    public function getRelationId()
    {
        return $this->container['relation_id'];
    }

    /**
     * Sets relation_id
     *
     * @param string $relation_id Search timeline events by a specific relation Id.
     *
     * @return $this
     */
    public function setRelationId($relation_id)
    {
        $this->container['relation_id'] = $relation_id;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Swagger\Client\Model\TimelineTermField[]
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Swagger\Client\Model\TimelineTermField[] $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
     *
     * @return $this
     */
    public function setTermFields($term_fields)
    {
        $this->container['term_fields'] = $term_fields;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").
     *
     * @return $this
     */
    public function setCulture($culture)
    {
        if (!is_null($culture) && (mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling TimelineEventsSearchRequest., must be smaller than or equal to 5.');
        }
        if (!is_null($culture) && (mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling TimelineEventsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets include_timeline_events_of_versions
     *
     * @return bool
     */
    public function getIncludeTimelineEventsOfVersions()
    {
        return $this->container['include_timeline_events_of_versions'];
    }

    /**
     * Sets include_timeline_events_of_versions
     *
     * @param bool $include_timeline_events_of_versions There might be multiple versions of an assignment (see /ObjectAssignment/MakeVersionOf). When IncludeTimelineEventsOfVersions is true the timeline events of the Assignment that has a given Assignment Id and the timeline events of all assignment versions are returned in the search results.
     *
     * @return $this
     */
    public function setIncludeTimelineEventsOfVersions($include_timeline_events_of_versions)
    {
        $this->container['include_timeline_events_of_versions'] = $include_timeline_events_of_versions;

        return $this;
    }

    /**
     * Gets include_timeline_events_of_child_items
     *
     * @return bool
     */
    public function getIncludeTimelineEventsOfChildItems()
    {
        return $this->container['include_timeline_events_of_child_items'];
    }

    /**
     * Sets include_timeline_events_of_child_items
     *
     * @param bool $include_timeline_events_of_child_items When requesting ARO/Timeline event items for e.g. a Acquisition Assignment it is possible to get the ARO/Timeline event items of the linked Acquisition Object Assignments of the Acquisition Assignments as well, by setting IncludeTimelineEventsOfChildItems to 'true'.
     *
     * @return $this
     */
    public function setIncludeTimelineEventsOfChildItems($include_timeline_events_of_child_items)
    {
        $this->container['include_timeline_events_of_child_items'] = $include_timeline_events_of_child_items;

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


