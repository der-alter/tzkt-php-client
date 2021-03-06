# # BigMapKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal Id, can be used for pagination | [optional]
**active** | **bool** | Bigmap key status (&#x60;true&#x60; - active, &#x60;false&#x60; - removed) | [optional]
**hash** | **string** | Key hash | [optional]
**key** | **mixed** | Key in JSON or Micheline format, depending on the &#x60;micheline&#x60; query parameter. | [optional]
**value** | **mixed** | Value in JSON or Micheline format, depending on the &#x60;micheline&#x60; query parameter. Note, if the key is inactive (removed) it will contain the last non-null value. | [optional]
**first_level** | **int** | Level of the block where the bigmap key was seen first time | [optional]
**last_level** | **int** | Level of the block where the bigmap key was seen last time | [optional]
**updates** | **int** | Total number of actions with the bigmap key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
