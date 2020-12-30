# AgendaItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all_day_event** | **bool** |  | [optional] 
**description** | **string** |  | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**exception_dates** | [**\DateTime[]**](\DateTime.md) |  | [optional] 
**is_canceled** | **bool** |  | [optional] 
**is_confirmed** | **bool** |  | [optional] 
**is_private** | **bool** |  | [optional] 
**is_recurring_event** | **bool** | When set to true this AgendaItem is marked as a recurring AgendaItem. The recurrency pattern MUST be set using the property &#39;RecurrencePattern&#39;. | [optional] 
**linked_agenda_item_category** | [**\Swagger\Client\Model\LinkedAgendaItemCategory**](LinkedAgendaItemCategory.md) |  | [optional] 
**linked_assignments** | [**\Swagger\Client\Model\LinkedAssignment[]**](LinkedAssignment.md) |  | [optional] 
**linked_employees** | [**\Swagger\Client\Model\LinkedEmployee[]**](LinkedEmployee.md) |  | [optional] 
**linked_relations** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**location** | **string** |  | [optional] 
**geo_location** | [**\Swagger\Client\Model\GeoLocation**](GeoLocation.md) |  | [optional] 
**minutes_before_reminder** | **int** |  | [optional] 
**parent_id** | **string** |  | [optional] 
**priority** | [**\Swagger\Client\Model\Priority**](Priority.md) |  | [optional] 
**recurrence_pattern** | **string** | When the AgendaItem is a recurring AgendaItem (IsRecurringEvent &#x3D; true) the recurrency pattern describes how and when occurences take place. See https://tools.ietf.org/html/rfc2445#section-4.3.10 for the specifications of the recurrence pattern string. . Examples: FREQ&#x3D;WEEKLY;BYDAY&#x3D;MO,TU,WE,TH,FR FREQ&#x3D;DAILY;COUNT&#x3D;10 FREQ&#x3D;WEEKLY;COUNT&#x3D;10;BYDAY&#x3D;WE . Not supported: BYSECOND BYMINUTE BYYEARDAY BYWEEKNO | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**subject** | **string** |  | [optional] 
**time_marker** | [**\Swagger\Client\Model\AgendaItemTimeMarker**](AgendaItemTimeMarker.md) |  | [optional] 
**use_reminder** | **bool** |  | [optional] 
**utc_date_time_to_exclude_at_parent** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


