# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_number_broker** | **string** |  | [optional] 
**tax_number_customer** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**customer_address** | [**\Swagger\Client\Model\Address**](Address.md) |  | [optional] 
**customer_name** | **string** |  | [optional] 
**debtor_number_format_pre** | **string** |  | [optional] 
**debtor_number** | **string** |  | [optional] 
**debtor_number_format_post** | **string** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**due_date_text** | **string** |  | [optional] 
**financial_administration_export_batch_id** | **string** |  | [optional] 
**financial_administration_id** | **string** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**display_name** | **string** |  | [optional] 
**invoice_type** | [**\Swagger\Client\Model\InvoiceType**](InvoiceType.md) |  | [optional] 
**kvk_number** | **string** |  | [optional] 
**lines** | [**\Swagger\Client\Model\InvoiceLine[]**](InvoiceLine.md) |  | [optional] 
**products_to_pass_on** | [**\Swagger\Client\Model\ProductOrder[]**](ProductOrder.md) |  | [optional] 
**purpose** | **string** |  | [optional] 
**reference** | **string** |  | [optional] 
**remarks** | **string** |  | [optional] 
**status** | [**\Swagger\Client\Model\InvoiceStatus**](InvoiceStatus.md) |  | [optional] 
**tav_customer** | **string** |  | [optional] 
**total_price_gross** | **float** |  | [optional] 
**total_price_net** | **float** |  | [optional] 
**total_tax** | **float** |  | [optional] 
**is_overdue** | **bool** |  | [optional] 
**linked_assignment** | [**\Swagger\Client\Model\LinkedAssignment**](LinkedAssignment.md) |  | [optional] 
**linked_relation** | [**\Swagger\Client\Model\LinkedRelation**](LinkedRelation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


