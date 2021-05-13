# # SelectParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fields** | **string[]** | **Fields** selection mode (optional, i.e. &#x60;select.fields&#x3D;balance&#x60; is the same as &#x60;select&#x3D;balance&#x60;). \\ Specify a comma-separated list of fields to include into response.  Example: &#x60;?select&#x3D;address,balance&#x60; &#x3D;&amp;gt; &#x60;[ { \&quot;address\&quot;: \&quot;asd\&quot;, \&quot;balance\&quot;: 10 } ]&#x60;. | [optional]
**values** | **string[]** | **Values** selection mode. \\ Specify a comma-separated list of fields to include their values into response.  Example: &#x60;?select.values&#x3D;address,balance&#x60; &#x3D;&amp;gt; &#x60;[ [ \&quot;asd\&quot;, 10 ] ]&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)