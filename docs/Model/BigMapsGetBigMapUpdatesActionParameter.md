# # BigMapsGetBigMapUpdatesActionParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a contract kind to get items where the specified field is equal to the specified value.  Example: &#x60;?kind&#x3D;smart_contract&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a contract kind to get items where the specified field is not equal to the specified value.  Example: &#x60;?kind.ne&#x3D;delegator_contract&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of contract kinds to get items where the specified field is equal to one of the specified values.  Example: &#x60;?kind.in&#x3D;smart_contract,asset&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of contract kinds to get items where the specified field is not equal to all the specified values.  Example: &#x60;?kind.ni&#x3D;smart_contract,asset&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
