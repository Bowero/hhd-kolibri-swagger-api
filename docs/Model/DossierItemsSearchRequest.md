# DossierItemsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_by** | **object** | Order the results by the indicated note field. | [optional] 
**parent_id** | **string** | Search by a specific parent Id. Obsolete: will be removed in future version; use &#39;parentIds&#39; parameter in stead. | [optional] 
**parent_ids** | **string[]** |  | [optional] 
**id** | **string** | Search by a specific dossier item Id. Obsolete: will be removed in future version; use &#39;ids&#39; parameter in stead. | [optional] 
**ids** | **string[]** | Search by one or more dossier item Ids. | [optional] 
**term_fields** | [**\Swagger\Client\Model\DossierItemTermField[]**](DossierItemTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


