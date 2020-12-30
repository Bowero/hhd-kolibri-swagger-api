# CompanyListingsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cadastre_id** | **string** | Search by a specific company listing Id. Used to return/refresh one search result. | [optional] 
**object_assignment_id** | **string** | Search by a specific ObjectAssignment Id. | [optional] 
**order_by** | **object** | Order the results by the indicated company listing field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\CompanyListingTermField[]**](CompanyListingTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


