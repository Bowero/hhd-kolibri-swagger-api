# ReminderSnapShot

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_root_entity_id** | **string** | Id of Task or AgendaItem. Remember: the Id of the Reminder might be different from the Id of the Parent Root Entity. Example: An AgendaItem may have multiple reminders: one for each attendee (employee). | [optional] 
**real_estate_agency_id** | **string** |  | [optional] 
**employee_id** | **string** | The employee responsible for the task or agenda item (e.g. attendee). | [optional] 
**reminder_type** | **object** |  | [optional] 
**subject** | **string** | The subject of the task or agenda item. | [optional] 
**location** | **string** | The location of the task or agenda item. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The startdatetime of the task or agenda item. | [optional] 
**reminder_time** | [**\DateTime**](\DateTime.md) | The time the reminder should be shown. | [optional] 
**linked_created_by** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**linked_modified_by** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**linked_employee** | [**\Swagger\Client\Model\LinkedEmployee**](LinkedEmployee.md) |  | [optional] 
**linked_relations** | [**\Swagger\Client\Model\LinkedRelation[]**](LinkedRelation.md) |  | [optional] 
**linked_assignments** | [**\Swagger\Client\Model\LinkedAssignment[]**](LinkedAssignment.md) |  | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**category_id** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


