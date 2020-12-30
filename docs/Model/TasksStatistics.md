# TasksStatistics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed_count** | **int** |  | 
**expired_count** | **int** |  | 
**expires_after_next_week_count** | **int** | The number op open (not completed and not cancelled) tasks with an expiration date set to a date after two weeks. | 
**expires_this_week_count** | **int** | The number op open (not completed and not cancelled) tasks with an expiration date set to a date in the current week. | 
**expires_next_week_count** | **int** | The number op open (not completed and not cancelled) tasks with an expiration date set to a date in the next week. | 
**expires_today_count** | **int** | The number op open (not completed and not cancelled) tasks with an expiration date set to today. | 
**expires_tomorrow_count** | **int** | The number op open (not completed and not cancelled) tasks with an expiration date set to tomorrow, but only in case tomorrow is in the current week. So on Sundays ExpiresTomorrowCount will always be 0. | 
**no_end_date_count** | **int** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


