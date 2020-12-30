# CommunicationLogsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_id** | **string** | Set the ParentId to search for communicationLogs by the Id of a ContactPerson or ContactCompany or by an AssignmentId. | [optional] 
**order_by** | **object** | Order the results by the indicated communicationLog field. | [optional] 
**communication_log_id** | **string** | Search by a specific communicationLog Id. Used to return/refresh one search result. | [optional] 
**term_fields** | [**\Swagger\Client\Model\CommunicationLogTermField[]**](CommunicationLogTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


