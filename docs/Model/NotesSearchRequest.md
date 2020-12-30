# NotesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note_id** | **string** | Search by a specific note Id. Used to return/refresh one search result. | [optional] 
**order_by** | **object** | Order the results by the indicated note field. | [optional] 
**parent_id** | **string** |  | [optional] 
**term_fields** | [**\Swagger\Client\Model\NoteTermField[]**](NoteTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**is_important** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


