# AgendaItemsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_ids** | **string[]** | Only return agendaItems linked at one of the categories indicated by given AgendaItem category Id&#39;s. | [optional] 
**category_types** | [**\Swagger\Client\Model\AgendaItemCategoryType[]**](AgendaItemCategoryType.md) | Only return agendaItems linked at one of the categories with a category type indicated by given AgendaItem Category Types. | [optional] 
**employee_ids** | **string[]** | Search the agendaItems of the given employees. | [optional] 
**order_by** | **object** | Order the results by the indicated AgendaItem field. | [optional] 
**period_date_time_max** | [**\DateTime**](\DateTime.md) | Highest value agenda items should occur. Not required when searching by AgendaItemId. | [optional] 
**period_date_time_min** | [**\DateTime**](\DateTime.md) | Lowest value agenda items should occur. Not required when searching by AgendaItemId. | [optional] 
**term_fields** | [**\Swagger\Client\Model\AgendaItemTermField[]**](AgendaItemTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 
**is_canceled** | **bool** | If isCanceled is null, results are eiter canceled or not. If it is defined as true, only canceled results are returned. If it is defined as false, only not canceled results are returned. | [optional] 
**is_confirmed** | **bool** | If isConfirmed is null, results are either confirmed or not. If it is defined as true, only confirmed results are returned. If it is defined as false, only non confirmed results are returned. | [optional] 
**return_occurences_of_recurring_agenda_items** | **bool** | If returnOccurencesOfRecurringAgendaItems is set to true each occurence of a recurring agendaitem will be in the search results. When set to false only the recurring agendaItem (with its recurrency patter) is in the results. For the /AgendaItem/Search endpoint the default value of returnOccurencesOfRecurringAgendaItems is false. For the /AgendaItem/SearchAndExport endpoint the default value of returnOccurencesOfRecurringAgendaItems is true. | [optional] 
**agenda_item_id** | **string** | Search by a specific agendaItem Id. Used to return/refresh one search result. | [optional] 
**agenda_item_ids** | **string[]** | Search by specific agenda item Ids. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


