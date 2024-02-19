# # ReturnOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiver_id** | **string** | the receiver id of the return shipment |
**customer_reference** | **string** | The customer reference may be used to identify the original customer order. The first 30 characters are visibly printed on the returns label. | [optional]
**shipment_reference** | **string** | The shipment reference may be used to identify the returns shipment. It is not visibly printed on the returns label but only displayed in the returns overview of the Post &amp; DHL Business Customer Portal. | [optional]
**shipper** | [**\Dhl\Rest\Retoure\Model\ContactAddress**](ContactAddress.md) |  |
**item_weight** | [**\Dhl\Rest\Retoure\Model\Weight**](Weight.md) |  | [optional]
**item_value** | [**\Dhl\Rest\Retoure\Model\Value**](Value.md) |  | [optional]
**customs_details** | [**\Dhl\Rest\Retoure\Model\CustomsDetails**](CustomsDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
