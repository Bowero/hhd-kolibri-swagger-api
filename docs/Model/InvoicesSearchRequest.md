# InvoicesSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **string** | Search by a specific invoice Id. Used to return/refresh one search result. | [optional] 
**skip_system_invoices_are_missing_check** | **bool** | Search by a specific invoice Id. Used to return/refresh one search result. | [optional] 
**status_filter** | [**\Swagger\Client\Model\InvoiceStatus[]**](InvoiceStatus.md) | Only return invoices with given status. | [optional] 
**order_by** | **object** | Order the results by the indicated invoice field. | [optional] 
**term_fields** | [**\Swagger\Client\Model\InvoiceTermField[]**](InvoiceTermField.md) |  | [optional] 
**parent_id** | **string** | Specify a parent ID to search invoices based on either an Assignment id or a Relation id. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-contry/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;) | [optional] 
**overdue_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**overdue_until** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice_date_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice_date_until** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


