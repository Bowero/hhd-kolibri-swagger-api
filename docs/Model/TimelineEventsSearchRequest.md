# TimelineEventsSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assignment_id** | **string** | Search timeline events by a specific assignment Id. | [optional] 
**filter_by_action_types** | [**\Swagger\Client\Model\TimelineActionType[]**](TimelineActionType.md) | Search timeline events of given type (e.g. only tasks and/or agendaitems). | [optional] 
**include_statistics** | **bool** | Return statistics, like counts of timeline events in past, today and future. | [optional] 
**max_date_time** | [**\DateTime**](\DateTime.md) | Don&#39;t return timeline events with a date after this given maximum date value. | [optional] 
**min_date_time** | [**\DateTime**](\DateTime.md) | Don&#39;t return timeline events with a date before this given minimum date value. | [optional] 
**order_by** | **object** | Order the results by the indicated timeline event field. | [optional] 
**relation_id** | **string** | Search timeline events by a specific relation Id. | [optional] 
**term_fields** | [**\Swagger\Client\Model\TimelineTermField[]**](TimelineTermField.md) | Search for given text (Term) indicated by the fields in the TermFields list. Required in case &#39;Term&#39; is given. | [optional] 
**culture** | **string** | The culture name in the format languagecode2-country/regioncode2. Available cultures: \&quot;nl-NL\&quot; and \&quot;en-GB\&quot;. If no or an unsupported culture is given the default culture is used (\&quot;nl-NL\&quot;). | [optional] 
**include_timeline_events_of_versions** | **bool** | There might be multiple versions of an assignment (see /ObjectAssignment/MakeVersionOf). When IncludeTimelineEventsOfVersions is true the timeline events of the Assignment that has a given Assignment Id and the timeline events of all assignment versions are returned in the search results. | [optional] 
**include_timeline_events_of_child_items** | **bool** | When requesting ARO/Timeline event items for e.g. a Acquisition Assignment it is possible to get the ARO/Timeline event items of the linked Acquisition Object Assignments of the Acquisition Assignments as well, by setting IncludeTimelineEventsOfChildItems to &#39;true&#39;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


