# # VoteParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a value to get items where the specified field is equal to the specified value.  Example: &#x60;?vote&#x3D;yay&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a value to get items where the specified field is not equal to the specified value.  Example: &#x60;?vote.ne&#x3D;pass&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of values to get items where the specified field is equal to one of the specified values.  Example: &#x60;?vote.in&#x3D;yay,nay&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of values to get items where the specified field is not equal to all the specified values.  Example: &#x60;?vote.ni&#x3D;yay,nay&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
