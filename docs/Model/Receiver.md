# # Receiver

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiver_id** | **string** | the receiver id of the return shipment |
**shipper_country** | [**\Dhl\Rest\Retoure\Model\Country**](Country.md) |  |
**ekp** | **string** |  |
**billing_number** | **string** |  |
**company_name** | **string** |  |
**number_range** | **string** | Number range associated with the billing number. The return shipment number is part of the number range. |
**receiver_address** | [**\Dhl\Rest\Retoure\Model\ContactAddress**](ContactAddress.md) |  |
**company_address** | [**\Dhl\Rest\Retoure\Model\ContactAddress**](ContactAddress.md) |  |
**contact_email** | **string** | contact email address | [optional]
**additional_email_note** | **string** | Text for additional comments by the business customer that are printed in the footer of the email that is sent to the shipper after order of a return label. | [optional]
**sales_tax_identification_number** | **string** | Identification of the business customer for sales tax purposes | [optional]
**court** | **string** | Jurisdiction of the business customer | [optional]
**company_management** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
