# # ReturnOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiver_id** | **string** |  |
**customer_reference** | **string** |  | [optional]
**shipment_reference** | **string** |  | [optional]
**sender_address** | [**\Dhl\Rest\Retoure\Model\SimpleAddress**](SimpleAddress.md) |  |
**email** | **string** |  | [optional]
**telephone_number** | **string** |  | [optional]
**weight_in_grams** | **int** |  | [optional]
**value** | **float** |  | [optional]
**customs_document** | [**\Dhl\Rest\Retoure\Model\CustomsDocument**](CustomsDocument.md) |  | [optional]
**return_document_type** | **string** | The type of document(s) to return in the response&#39;:&#39; The SHIPMENT_LABEL only, the QR_LABEL or BOTH. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
