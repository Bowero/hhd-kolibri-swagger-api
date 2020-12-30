# EventHubMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agency_id** | **string** |  | 
**id** | **string** |  | 
**stamp** | [**\DateTime**](\DateTime.md) |  | 
**cat** | [**\Swagger\Client\Model\FloorFloorType**](FloorFloorType.md) |  | 
**reminder** | [**\Swagger\Client\Model\ReminderEventDetails**](ReminderEventDetails.md) |  | [optional] 
**msg** | [**\Swagger\Client\Model\MessageEventDetails**](MessageEventDetails.md) |  | [optional] 
**pub** | [**\Swagger\Client\Model\PublicationEventDetails**](PublicationEventDetails.md) |  | [optional] 
**presence** | [**\Swagger\Client\Model\PresenceEventDetails**](PresenceEventDetails.md) |  | [optional] 
**entity** | [**\Swagger\Client\Model\EntityEventDetails**](EntityEventDetails.md) |  | [optional] 
**usr** | [**\Swagger\Client\Model\UserDetails**](UserDetails.md) |  | [optional] 
**version** | **string** | The Message Type version specifies the version of the format of the event message. When the version number is not equal to what is expected the format of this event message might be different. Each time the format of the EventMessage class is changed the version number is incremented. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


