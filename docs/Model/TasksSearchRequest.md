# TasksSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_ids** | **string[]** | Only return tasks linked at one of the categories indicated by given Task category Id&#39;s. | [optional] 
**delegate_filter** | **object** | Search the tasks created by the given employee (e.g. &#39;Tasks created by me&#39;) or assigned to given employee (&#39;Tasks assigned to me&#39;) or both. Default: AssignedToMe | [optional] 
**employee_id** | **string** | Search the tasks assigned and/or created by given employee. | [optional] 
**employee_ids** | **string[]** | Search the tasks assigned and/or created by given employee ids. | [optional] 
**include_statistics** | **bool** | Return statistics, like counts of timeline events in past, today and next week. | [optional] 
**order_by** | **object** | Order the results by the indicated task field. | [optional] 
**status_filter** | [**\Swagger\Client\Model\TaskStatus[]**](TaskStatus.md) | Only return tasks with given status. | [optional] 
**task_id** | **string** | Search by a specific task Id. Used to return/refresh one search result. | [optional] 
**term_fields** | [**\Swagger\Client\Model\TaskTermField[]**](TaskTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**task_ids** | **string[]** | Search by specific task ids. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


