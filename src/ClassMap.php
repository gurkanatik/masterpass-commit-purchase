<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'CommitPurchase' => '\\StructType\\CommitPurchase',
            'CommitPurchaseResponse' => '\\StructType\\CommitPurchaseResponse',
            'CustomCommitPurchase' => '\\StructType\\CustomCommitPurchase',
            'CustomCommitPurchaseResponse' => '\\StructType\\CustomCommitPurchaseResponse',
            'CommitPurchaseRequest' => '\\StructType\\CommitPurchaseRequest',
            'CommitPurchaseRequestBody' => '\\StructType\\CommitPurchaseRequestBody',
            'BasePurchaseRequestBody' => '\\StructType\\BasePurchaseRequestBody',
            'OtherMerchantRequestBody' => '\\StructType\\OtherMerchantRequestBody',
            'DirectPurchaseRequestBody' => '\\StructType\\DirectPurchaseRequestBody',
            'PurchaseAndRegisterRequestBody' => '\\StructType\\PurchaseAndRegisterRequestBody',
            'RegisterData' => '\\StructType\\RegisterData',
            'CommitPurchaseResult' => '\\StructType\\CommitPurchaseResult',
            'CommitPurchaseResponseBody' => '\\StructType\\CommitPurchaseResponseBody',
            'ReversePurchaseResponseBody' => '\\StructType\\ReversePurchaseResponseBody',
            'RewardResponseBody' => '\\StructType\\RewardResponseBody',
            'CustomRewardResponseBody' => '\\StructType\\CustomRewardResponseBody',
            'OtherMerchantResponseBody' => '\\StructType\\OtherMerchantResponseBody',
            'CustomRemotePurchaseResponseBody' => '\\StructType\\CustomRemotePurchaseResponseBody',
            'CustomCommitPurchaseResponseBody' => '\\StructType\\CustomCommitPurchaseResponseBody',
            'ProcessPaymentResponseBody' => '\\StructType\\ProcessPaymentResponseBody',
            'PurchaseAndRegisterResponseBody' => '\\StructType\\PurchaseAndRegisterResponseBody',
            'DirectPurchaseResponseBody' => '\\StructType\\DirectPurchaseResponseBody',
            'CustomCommitPurchaseRequest' => '\\StructType\\CustomCommitPurchaseRequest',
            'CustomCommitPurchaseRequestBody' => '\\StructType\\CustomCommitPurchaseRequestBody',
            'BaseCustomPurchaseRequestBody' => '\\StructType\\BaseCustomPurchaseRequestBody',
            'CustomRemotePurchaseRequestBody' => '\\StructType\\CustomRemotePurchaseRequestBody',
            'CustomCommitPurchaseResult' => '\\StructType\\CustomCommitPurchaseResult',
            'RequestHeader' => '\\StructType\\RequestHeader',
            'ArrayOfRewardList' => '\\ArrayType\\ArrayOfRewardList',
            'RewardList' => '\\StructType\\RewardList',
            'ArrayOfChequeList' => '\\ArrayType\\ArrayOfChequeList',
            'ChequeList' => '\\StructType\\ChequeList',
            'MoneyCard' => '\\StructType\\MoneyCard',
            'AdditionalFields' => '\\StructType\\AdditionalFields',
            'CustomField' => '\\StructType\\CustomField',
            'OrderDetails' => '\\StructType\\OrderDetails',
            'ArrayOfOrderItem' => '\\StructType\\ArrayOfOrderItem',
            'OrderItem' => '\\StructType\\OrderItem',
            'BillDetails' => '\\StructType\\BillDetails',
            'DeliveryDetails' => '\\StructType\\DeliveryDetails',
            'BuyerDetails' => '\\StructType\\BuyerDetails',
            'AntiFraudDetails' => '\\StructType\\AntiFraudDetails',
            'OtherDetails' => '\\StructType\\OtherDetails',
            'MasterPassRequestCustomField' => '\\StructType\\MasterPassRequestCustomField',
            'ResponseHeader' => '\\StructType\\ResponseHeader',
            'ConsumerFinancialResponseBody' => '\\StructType\\ConsumerFinancialResponseBody',
            'ResponseBody' => '\\StructType\\ResponseBody',
            'SmsNotification' => '\\StructType\\SmsNotification',
            'ConsumerRewardResponseBody' => '\\StructType\\ConsumerRewardResponseBody',
            'MoneySendResponseBody' => '\\StructType\\MoneySendResponseBody',
            'MerchantFinancialResponseBody' => '\\StructType\\MerchantFinancialResponseBody',
            'ArrayOfListItem' => '\\ArrayType\\ArrayOfListItem',
            'ListItem' => '\\StructType\\ListItem',
            'MasterPassResponseCustomField' => '\\StructType\\MasterPassResponseCustomField',
            'DirectPurchaseRequestBody3DAuth' => '\\StructType\\DirectPurchaseRequestBody3DAuth',
            'OtherMerchantRequestBody3DAuth' => '\\StructType\\OtherMerchantRequestBody3DAuth',
            'DirectPurchaseResponseBody3DAuth' => '\\StructType\\DirectPurchaseResponseBody3DAuth',
            'GenerateKeyResponseBody' => '\\StructType\\GenerateKeyResponseBody',
            'TransactionVoidResponseBody' => '\\StructType\\TransactionVoidResponseBody',
            'CustomTransactionVoidResponseBody' => '\\StructType\\CustomTransactionVoidResponseBody',
            'MerchantRegistrationResponseBody' => '\\StructType\\MerchantRegistrationResponseBody',
            'CustomFields' => '\\StructType\\CustomFields',
            'DefineAuthTokenResponseBody' => '\\StructType\\DefineAuthTokenResponseBody',
            'UnBlockMPinResponseBody' => '\\StructType\\UnBlockMPinResponseBody',
            'GenerateOTPResponseBody' => '\\StructType\\GenerateOTPResponseBody',
            'ValidateTransactionResponseBody' => '\\StructType\\ValidateTransactionResponseBody',
            'LoginResponseBody' => '\\StructType\\LoginResponseBody',
            'CheckMasterPassEndUserResponseBody' => '\\StructType\\CheckMasterPassEndUserResponseBody',
            'VerifyMpinResponseBody' => '\\StructType\\VerifyMpinResponseBody',
            'ForgotPasswordResponseBody' => '\\StructType\\ForgotPasswordResponseBody',
            'ResendOTPResponseBody' => '\\StructType\\ResendOTPResponseBody',
            'UpdateUserResponseBody' => '\\StructType\\UpdateUserResponseBody',
            'ChangeAuthTokenResponseBody' => '\\StructType\\ChangeAuthTokenResponseBody',
            'VerifyResponseBody' => '\\StructType\\VerifyResponseBody',
            'AuthenticateResponseBody' => '\\StructType\\AuthenticateResponseBody',
            'UpdateCardLockResponseBody' => '\\StructType\\UpdateCardLockResponseBody',
            'ViewAddressListResponseBody' => '\\StructType\\ViewAddressListResponseBody',
            'ArrayOfAddressListItem' => '\\ArrayType\\ArrayOfAddressListItem',
            'AddressListItem' => '\\StructType\\AddressListItem',
            'AddAddressResponseBody' => '\\StructType\\AddAddressResponseBody',
            'MaintainAddressListResponseBody' => '\\StructType\\MaintainAddressListResponseBody',
            'MaintainListResponseBody' => '\\StructType\\MaintainListResponseBody',
            'ViewListResponseBody' => '\\StructType\\ViewListResponseBody',
            'IssuerCardRegistrationResponseBody' => '\\StructType\\IssuerCardRegistrationResponseBody',
            'TransactionQueryResponseBody' => '\\StructType\\TransactionQueryResponseBody',
            'CustomTransactionQueryResponseBody' => '\\StructType\\CustomTransactionQueryResponseBody',
            'ResetMPinResponseBody' => '\\StructType\\ResetMPinResponseBody',
            'RedownloadListResponseBody' => '\\StructType\\RedownloadListResponseBody',
            'ArrayOfString1' => '\\ArrayType\\ArrayOfString1',
            'ReinitializeDukptResponseBody' => '\\StructType\\ReinitializeDukptResponseBody',
            'SetDefaultAccountResponseBody' => '\\StructType\\SetDefaultAccountResponseBody',
            'SetDefaultAddressResponseBody' => '\\StructType\\SetDefaultAddressResponseBody',
            'ArrayOfString' => '\\ArrayType\\ArrayOfString',
            'ConsumerRegistrationResponseBodyForPurchase' => '\\StructType\\ConsumerRegistrationResponseBodyForPurchase',
            'VerifyUserResponseBody' => '\\StructType\\VerifyUserResponseBody',
            'ViewMPListResponseBody' => '\\StructType\\ViewMPListResponseBody',
            'ArrayOfMPListItem' => '\\ArrayType\\ArrayOfMPListItem',
            'MPListItem' => '\\StructType\\MPListItem',
            'Card' => '\\StructType\\Card',
            'Contact' => '\\StructType\\Contact',
            'ConsumerRegistrationResponseBody' => '\\StructType\\ConsumerRegistrationResponseBody',
            'MPGAccountResponse' => '\\StructType\\MPGAccountResponse',
            'MPGAccountCustomField' => '\\StructType\\MPGAccountCustomField',
            'ExternalAccountResponse' => '\\StructType\\ExternalAccountResponse',
            'ExternalAccountCustomField' => '\\StructType\\ExternalAccountCustomField',
            'ConsumerAccountSearchResponseBody' => '\\StructType\\ConsumerAccountSearchResponseBody',
            'ConsumerAccount' => '\\StructType\\ConsumerAccount',
            'LinkAccountToClientResponseBody' => '\\StructType\\LinkAccountToClientResponseBody',
            'AddCardToMasterPassResponseBody' => '\\StructType\\AddCardToMasterPassResponseBody',
            'CompleteRegistrationResponseBody' => '\\StructType\\CompleteRegistrationResponseBody',
            'GetCardResponseBody' => '\\StructType\\GetCardResponseBody',
            'MasterpassPostbackResponseBody' => '\\StructType\\MasterpassPostbackResponseBody',
            'ManageRecurringPaymentResponseBody' => '\\StructType\\ManageRecurringPaymentResponseBody',
            'CustomCommitRecurringPaymentResponseBody' => '\\StructType\\CustomCommitRecurringPaymentResponseBody',
            'CommitRecurringPaymentResponseBody' => '\\StructType\\CommitRecurringPaymentResponseBody',
            'TransactionRefundResponseBody' => '\\StructType\\TransactionRefundResponseBody',
            'CustomTransactionRefundResponseBody' => '\\StructType\\CustomTransactionRefundResponseBody',
        );
    }
}
