<?php
/**
 * AgendaItem
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
 * AgendaItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgendaItem extends RootEntity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgendaItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'all_day_event' => 'bool',
        'description' => 'string',
        'end_date_time' => '\DateTime',
        'exception_dates' => '\DateTime[]',
        'is_canceled' => 'bool',
        'is_confirmed' => 'bool',
        'is_private' => 'bool',
        'is_recurring_event' => 'bool',
        'linked_agenda_item_category' => '\Swagger\Client\Model\LinkedAgendaItemCategory',
        'linked_assignments' => '\Swagger\Client\Model\LinkedAssignment[]',
        'linked_employees' => '\Swagger\Client\Model\LinkedEmployee[]',
        'linked_relations' => '\Swagger\Client\Model\LinkedRelation[]',
        'location' => 'string',
        'geo_location' => '\Swagger\Client\Model\GeoLocation',
        'minutes_before_reminder' => 'int',
        'parent_id' => 'string',
        'priority' => '\Swagger\Client\Model\Priority',
        'recurrence_pattern' => 'string',
        'start_date_time' => '\DateTime',
        'subject' => 'string',
        'time_marker' => '\Swagger\Client\Model\AgendaItemTimeMarker',
        'use_reminder' => 'bool',
        'utc_date_time_to_exclude_at_parent' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'all_day_event' => null,
        'description' => null,
        'end_date_time' => 'date-time',
        'exception_dates' => 'date-time',
        'is_canceled' => null,
        'is_confirmed' => null,
        'is_private' => null,
        'is_recurring_event' => null,
        'linked_agenda_item_category' => null,
        'linked_assignments' => null,
        'linked_employees' => null,
        'linked_relations' => null,
        'location' => null,
        'geo_location' => null,
        'minutes_before_reminder' => 'int32',
        'parent_id' => 'guid',
        'priority' => null,
        'recurrence_pattern' => null,
        'start_date_time' => 'date-time',
        'subject' => null,
        'time_marker' => null,
        'use_reminder' => null,
        'utc_date_time_to_exclude_at_parent' => 'date-time'
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
        'all_day_event' => 'allDayEvent',
        'description' => 'description',
        'end_date_time' => 'endDateTime',
        'exception_dates' => 'exceptionDates',
        'is_canceled' => 'isCanceled',
        'is_confirmed' => 'isConfirmed',
        'is_private' => 'isPrivate',
        'is_recurring_event' => 'isRecurringEvent',
        'linked_agenda_item_category' => 'linkedAgendaItemCategory',
        'linked_assignments' => 'linkedAssignments',
        'linked_employees' => 'linkedEmployees',
        'linked_relations' => 'linkedRelations',
        'location' => 'location',
        'geo_location' => 'geoLocation',
        'minutes_before_reminder' => 'minutesBeforeReminder',
        'parent_id' => 'parentId',
        'priority' => 'priority',
        'recurrence_pattern' => 'recurrencePattern',
        'start_date_time' => 'startDateTime',
        'subject' => 'subject',
        'time_marker' => 'timeMarker',
        'use_reminder' => 'useReminder',
        'utc_date_time_to_exclude_at_parent' => 'utcDateTimeToExcludeAtParent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_day_event' => 'setAllDayEvent',
        'description' => 'setDescription',
        'end_date_time' => 'setEndDateTime',
        'exception_dates' => 'setExceptionDates',
        'is_canceled' => 'setIsCanceled',
        'is_confirmed' => 'setIsConfirmed',
        'is_private' => 'setIsPrivate',
        'is_recurring_event' => 'setIsRecurringEvent',
        'linked_agenda_item_category' => 'setLinkedAgendaItemCategory',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_employees' => 'setLinkedEmployees',
        'linked_relations' => 'setLinkedRelations',
        'location' => 'setLocation',
        'geo_location' => 'setGeoLocation',
        'minutes_before_reminder' => 'setMinutesBeforeReminder',
        'parent_id' => 'setParentId',
        'priority' => 'setPriority',
        'recurrence_pattern' => 'setRecurrencePattern',
        'start_date_time' => 'setStartDateTime',
        'subject' => 'setSubject',
        'time_marker' => 'setTimeMarker',
        'use_reminder' => 'setUseReminder',
        'utc_date_time_to_exclude_at_parent' => 'setUtcDateTimeToExcludeAtParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_day_event' => 'getAllDayEvent',
        'description' => 'getDescription',
        'end_date_time' => 'getEndDateTime',
        'exception_dates' => 'getExceptionDates',
        'is_canceled' => 'getIsCanceled',
        'is_confirmed' => 'getIsConfirmed',
        'is_private' => 'getIsPrivate',
        'is_recurring_event' => 'getIsRecurringEvent',
        'linked_agenda_item_category' => 'getLinkedAgendaItemCategory',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_employees' => 'getLinkedEmployees',
        'linked_relations' => 'getLinkedRelations',
        'location' => 'getLocation',
        'geo_location' => 'getGeoLocation',
        'minutes_before_reminder' => 'getMinutesBeforeReminder',
        'parent_id' => 'getParentId',
        'priority' => 'getPriority',
        'recurrence_pattern' => 'getRecurrencePattern',
        'start_date_time' => 'getStartDateTime',
        'subject' => 'getSubject',
        'time_marker' => 'getTimeMarker',
        'use_reminder' => 'getUseReminder',
        'utc_date_time_to_exclude_at_parent' => 'getUtcDateTimeToExcludeAtParent'
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

        $this->container['all_day_event'] = isset($data['all_day_event']) ? $data['all_day_event'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
        $this->container['exception_dates'] = isset($data['exception_dates']) ? $data['exception_dates'] : null;
        $this->container['is_canceled'] = isset($data['is_canceled']) ? $data['is_canceled'] : null;
        $this->container['is_confirmed'] = isset($data['is_confirmed']) ? $data['is_confirmed'] : null;
        $this->container['is_private'] = isset($data['is_private']) ? $data['is_private'] : null;
        $this->container['is_recurring_event'] = isset($data['is_recurring_event']) ? $data['is_recurring_event'] : null;
        $this->container['linked_agenda_item_category'] = isset($data['linked_agenda_item_category']) ? $data['linked_agenda_item_category'] : null;
        $this->container['linked_assignments'] = isset($data['linked_assignments']) ? $data['linked_assignments'] : null;
        $this->container['linked_employees'] = isset($data['linked_employees']) ? $data['linked_employees'] : null;
        $this->container['linked_relations'] = isset($data['linked_relations']) ? $data['linked_relations'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['geo_location'] = isset($data['geo_location']) ? $data['geo_location'] : null;
        $this->container['minutes_before_reminder'] = isset($data['minutes_before_reminder']) ? $data['minutes_before_reminder'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['recurrence_pattern'] = isset($data['recurrence_pattern']) ? $data['recurrence_pattern'] : null;
        $this->container['start_date_time'] = isset($data['start_date_time']) ? $data['start_date_time'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['time_marker'] = isset($data['time_marker']) ? $data['time_marker'] : null;
        $this->container['use_reminder'] = isset($data['use_reminder']) ? $data['use_reminder'] : null;
        $this->container['utc_date_time_to_exclude_at_parent'] = isset($data['utc_date_time_to_exclude_at_parent']) ? $data['utc_date_time_to_exclude_at_parent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 250)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
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
     * Gets all_day_event
     *
     * @return bool
     */
    public function getAllDayEvent()
    {
        return $this->container['all_day_event'];
    }

    /**
     * Sets all_day_event
     *
     * @param bool $all_day_event all_day_event
     *
     * @return $this
     */
    public function setAllDayEvent($all_day_event)
    {
        $this->container['all_day_event'] = $all_day_event;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time end_date_time
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets exception_dates
     *
     * @return \DateTime[]
     */
    public function getExceptionDates()
    {
        return $this->container['exception_dates'];
    }

    /**
     * Sets exception_dates
     *
     * @param \DateTime[] $exception_dates exception_dates
     *
     * @return $this
     */
    public function setExceptionDates($exception_dates)
    {
        $this->container['exception_dates'] = $exception_dates;

        return $this;
    }

    /**
     * Gets is_canceled
     *
     * @return bool
     */
    public function getIsCanceled()
    {
        return $this->container['is_canceled'];
    }

    /**
     * Sets is_canceled
     *
     * @param bool $is_canceled is_canceled
     *
     * @return $this
     */
    public function setIsCanceled($is_canceled)
    {
        $this->container['is_canceled'] = $is_canceled;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return bool
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool $is_confirmed is_confirmed
     *
     * @return $this
     */
    public function setIsConfirmed($is_confirmed)
    {
        $this->container['is_confirmed'] = $is_confirmed;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool $is_private is_private
     *
     * @return $this
     */
    public function setIsPrivate($is_private)
    {
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets is_recurring_event
     *
     * @return bool
     */
    public function getIsRecurringEvent()
    {
        return $this->container['is_recurring_event'];
    }

    /**
     * Sets is_recurring_event
     *
     * @param bool $is_recurring_event When set to true this AgendaItem is marked as a recurring AgendaItem. The recurrency pattern MUST be set using the property 'RecurrencePattern'.
     *
     * @return $this
     */
    public function setIsRecurringEvent($is_recurring_event)
    {
        $this->container['is_recurring_event'] = $is_recurring_event;

        return $this;
    }

    /**
     * Gets linked_agenda_item_category
     *
     * @return \Swagger\Client\Model\LinkedAgendaItemCategory
     */
    public function getLinkedAgendaItemCategory()
    {
        return $this->container['linked_agenda_item_category'];
    }

    /**
     * Sets linked_agenda_item_category
     *
     * @param \Swagger\Client\Model\LinkedAgendaItemCategory $linked_agenda_item_category linked_agenda_item_category
     *
     * @return $this
     */
    public function setLinkedAgendaItemCategory($linked_agenda_item_category)
    {
        $this->container['linked_agenda_item_category'] = $linked_agenda_item_category;

        return $this;
    }

    /**
     * Gets linked_assignments
     *
     * @return \Swagger\Client\Model\LinkedAssignment[]
     */
    public function getLinkedAssignments()
    {
        return $this->container['linked_assignments'];
    }

    /**
     * Sets linked_assignments
     *
     * @param \Swagger\Client\Model\LinkedAssignment[] $linked_assignments linked_assignments
     *
     * @return $this
     */
    public function setLinkedAssignments($linked_assignments)
    {
        $this->container['linked_assignments'] = $linked_assignments;

        return $this;
    }

    /**
     * Gets linked_employees
     *
     * @return \Swagger\Client\Model\LinkedEmployee[]
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Swagger\Client\Model\LinkedEmployee[] $linked_employees linked_employees
     *
     * @return $this
     */
    public function setLinkedEmployees($linked_employees)
    {
        $this->container['linked_employees'] = $linked_employees;

        return $this;
    }

    /**
     * Gets linked_relations
     *
     * @return \Swagger\Client\Model\LinkedRelation[]
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Swagger\Client\Model\LinkedRelation[] $linked_relations linked_relations
     *
     * @return $this
     */
    public function setLinkedRelations($linked_relations)
    {
        $this->container['linked_relations'] = $linked_relations;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \Swagger\Client\Model\GeoLocation
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \Swagger\Client\Model\GeoLocation $geo_location geo_location
     *
     * @return $this
     */
    public function setGeoLocation($geo_location)
    {
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets minutes_before_reminder
     *
     * @return int
     */
    public function getMinutesBeforeReminder()
    {
        return $this->container['minutes_before_reminder'];
    }

    /**
     * Sets minutes_before_reminder
     *
     * @param int $minutes_before_reminder minutes_before_reminder
     *
     * @return $this
     */
    public function setMinutesBeforeReminder($minutes_before_reminder)
    {
        $this->container['minutes_before_reminder'] = $minutes_before_reminder;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Swagger\Client\Model\Priority
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Swagger\Client\Model\Priority $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets recurrence_pattern
     *
     * @return string
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /**
     * Sets recurrence_pattern
     *
     * @param string $recurrence_pattern When the AgendaItem is a recurring AgendaItem (IsRecurringEvent = true) the recurrency pattern describes how and when occurences take place. See https://tools.ietf.org/html/rfc2445#section-4.3.10 for the specifications of the recurrence pattern string. . Examples: FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR FREQ=DAILY;COUNT=10 FREQ=WEEKLY;COUNT=10;BYDAY=WE . Not supported: BYSECOND BYMINUTE BYYEARDAY BYWEEKNO
     *
     * @return $this
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time start_date_time
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

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
        if (!is_null($subject) && (mb_strlen($subject) > 250)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling AgendaItem., must be smaller than or equal to 250.');
        }
        if (!is_null($subject) && (mb_strlen($subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling AgendaItem., must be bigger than or equal to 0.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets time_marker
     *
     * @return \Swagger\Client\Model\AgendaItemTimeMarker
     */
    public function getTimeMarker()
    {
        return $this->container['time_marker'];
    }

    /**
     * Sets time_marker
     *
     * @param \Swagger\Client\Model\AgendaItemTimeMarker $time_marker time_marker
     *
     * @return $this
     */
    public function setTimeMarker($time_marker)
    {
        $this->container['time_marker'] = $time_marker;

        return $this;
    }

    /**
     * Gets use_reminder
     *
     * @return bool
     */
    public function getUseReminder()
    {
        return $this->container['use_reminder'];
    }

    /**
     * Sets use_reminder
     *
     * @param bool $use_reminder use_reminder
     *
     * @return $this
     */
    public function setUseReminder($use_reminder)
    {
        $this->container['use_reminder'] = $use_reminder;

        return $this;
    }

    /**
     * Gets utc_date_time_to_exclude_at_parent
     *
     * @return \DateTime
     */
    public function getUtcDateTimeToExcludeAtParent()
    {
        return $this->container['utc_date_time_to_exclude_at_parent'];
    }

    /**
     * Sets utc_date_time_to_exclude_at_parent
     *
     * @param \DateTime $utc_date_time_to_exclude_at_parent utc_date_time_to_exclude_at_parent
     *
     * @return $this
     */
    public function setUtcDateTimeToExcludeAtParent($utc_date_time_to_exclude_at_parent)
    {
        $this->container['utc_date_time_to_exclude_at_parent'] = $utc_date_time_to_exclude_at_parent;

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


