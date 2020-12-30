# DocumentTemplatesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\Swagger\Client\Model\SearchRequestOrder**](SearchRequestOrder.md) |  | 
**skip** | **int** | Number of results to skip. | 
**take** | **int** | Number of results to return. | 
**term** | **string** | Search by given text term in the fields indicated by TermFields | [optional] 
**term_fields** | [**\Swagger\Client\Model\DocumentTemplateTermField[]**](DocumentTemplateTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**order_by** | [**\Swagger\Client\Model\DocumentTemplatesSearchRequestOrderBy**](DocumentTemplatesSearchRequestOrderBy.md) |  | 
**template_id** | **string** |  | [optional] 
**filter_by_real_estate_groups** | [**\Swagger\Client\Model\RealEstateGroup[]**](RealEstateGroup.md) | Filter by selected real estate groups (residential, commercial,...). | [optional] 
**filter_by_document_template_types** | [**\Swagger\Client\Model\DocumentTemplateType[]**](DocumentTemplateType.md) |  | [optional] 
**for_sale** | **bool** |  | 
**for_rent** | **bool** |  | 
**is_active** | [**\Swagger\Client\Model\ActiveFilter**](ActiveFilter.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


