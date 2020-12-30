# RelationsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter_by_relation_group_ids** | **string[]** | Filter by selected relation group id&#39;s. | [optional] 
**filter_by_relation_types** | [**\Swagger\Client\Model\RelationType[]**](RelationType.md) | Filter by selected relation types. | [optional] 
**include_statistics** | **bool** | Return statistics, like lists of unique localities of the relations. | [optional] 
**include_back_office_employees** | **bool** | Include back office employees if FilterByRelationTypes contains employees. | [optional] [default to false]
**order_by** | **object** | Order the results by the indicated relation field. | [optional] 
**relation_id** | **string** | Search by a specific relation Id. Used to return/refresh one search result. | [optional] 
**term_fields** | [**\Swagger\Client\Model\RelationTermField[]**](RelationTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 
**min_date_time_created** | [**\DateTime**](\DateTime.md) | Filter by items created at or after the minimum datetime created. | [optional] 
**max_date_time_created** | [**\DateTime**](\DateTime.md) | Filter by items created at or before the given maximum datetime created. | [optional] 
**min_date_time_modified** | [**\DateTime**](\DateTime.md) | Filter by items created at or after the minimum datetime modified. | [optional] 
**max_date_time_modified** | [**\DateTime**](\DateTime.md) | Filter by items modified at or before the given maximum datetime modified. | [optional] 
**email_addresses** | **string[]** | Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned. | [optional] 
**relation_ids** | **string[]** | Search by specific task Ids. Used to return/refresh one search result. | [optional] 
**phone_number** | **string** |  | [optional] 
**has_phone_number** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


