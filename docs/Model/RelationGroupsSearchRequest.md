# RelationGroupsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**include_statistics** | **bool** | Return statistics, like number of relations per relation group. | [optional] 
**order_by** | **object** | Order the results by the indicated RelationGroup field. | [optional] 
**relation_group_id** | **string** | Search by a specific relationGroup Id. Used to return/refresh one search result. | [optional] 
**term_fields** | [**\Swagger\Client\Model\RelationGroupTermField[]**](RelationGroupTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


