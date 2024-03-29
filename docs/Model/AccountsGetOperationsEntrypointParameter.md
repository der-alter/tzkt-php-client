# # AccountsGetOperationsEntrypointParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a string to get items where the specified field is equal to the specified value.  Example: &#x60;?parameters&#x3D;abc&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a string to get items where the specified field is not equal to the specified value.  Example: &#x60;?parameters.ne&#x3D;abc&#x60;. | [optional]
**as** | **string** | **Same as** filter mode. \\ Specify a string template to get items where the specified field matches the specified template. \\ This mode supports wildcard &#x60;*&#x60;. Use &#x60;\\*&#x60; as an escape symbol.  Example: &#x60;?parameters.as&#x3D;*mid*&#x60; or &#x60;?parameters.as&#x3D;*end&#x60;. | [optional]
**un** | **string** | **Unlike** filter mode. \\ Specify a string template to get items where the specified field doesn&#39;t match the specified template. This mode supports wildcard &#x60;*&#x60;. Use &#x60;\\*&#x60; as an escape symbol.  Example: &#x60;?parameters.un&#x3D;*mid*&#x60; or &#x60;?parameters.un&#x3D;*end&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of strings to get items where the specified field is equal to one of the specified values. \\ Use &#x60;\\,&#x60; as an escape symbol.  Example: &#x60;?errors.in&#x3D;bla,bal,abl&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of strings to get items where the specified field is not equal to all the specified values. \\ Use &#x60;\\,&#x60; as an escape symbol.  Example: &#x60;?errors.ni&#x3D;bla,bal,abl&#x60;. | [optional]
**null** | **bool** | **Is null** filter mode. \\ Use this mode to get items where the specified field is null or not.  Example: &#x60;?parameters.null&#x60; or &#x60;?parameters.null&#x3D;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
