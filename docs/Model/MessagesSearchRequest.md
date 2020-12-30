# MessagesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter_by_message_types** | [**\Swagger\Client\Model\MessageType[]**](MessageType.md) | Filter by items of given message type. | [optional] 
**order_by** | **object** | Order the results by the indicated Message field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\MessageTermField[]**](MessageTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**min_date_time_created** | [**\DateTime**](\DateTime.md) | Filter by items created at or after the minimum datetime created. | [optional] 
**max_date_time_created** | [**\DateTime**](\DateTime.md) | Filter by items created at or before the given maximum datetime created. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


