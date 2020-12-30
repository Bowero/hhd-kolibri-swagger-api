# AgendaItemCategoriesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_by** | **object** | Order the results by the indicated AgendaItem field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\AgendaItemCategoryTermField[]**](AgendaItemCategoryTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 
**include_statistics** | **bool** | Return statistics; the number of agenda items per agenda item category | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


