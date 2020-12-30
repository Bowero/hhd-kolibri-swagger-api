# HttpError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Gets or sets the high-level, user-visible message explaining the cause of the error. Information carried in this field should be considered public in that it will go over the wire regardless of the IncludeErrorDetailPolicy. As a result care should be taken not to disclose sensitive information about the server or the application. | [optional] 
**model_state** | **object** | Gets the ModelState containing information about the errors that occurred during model binding. | [optional] 
**message_detail** | **string** | Gets or sets a detailed description of the error intended for the developer to understand exactly what failed. | [optional] 
**exception_message** | **string** | Gets or sets the message of the Exception if available. | [optional] 
**exception_type** | **string** | Gets or sets the type of the Exception if available. | [optional] 
**stack_trace** | **string** | Gets or sets the stack trace information associated with this instance if available. | [optional] 
**inner_exception** | **object** | Gets the inner Exception associated with this instance if available. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


