# TemplateDefinitionCategoriesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_by** | **object** | Order the results by the indicated AgendaItem field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\TemplateDefinitionCategoryTermField[]**](TemplateDefinitionCategoryTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**category_types** | [**\Swagger\Client\Model\TemplateDefinitionCategoryType[]**](TemplateDefinitionCategoryType.md) |  | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


