# DocumentSessionsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_id** | **string** | Search by a specific parent (ObjectAssignment, ContactPerson, ContactCompany) by its id. | [optional] 
**document_session_id** | **string** | Search by a specific document session id | [optional] 
**order_by** | **object** | Order the results by the indicated company listing field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\DocumentSessionTermField[]**](DocumentSessionTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


