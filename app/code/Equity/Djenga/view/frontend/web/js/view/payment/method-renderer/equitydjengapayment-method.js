define(
    [
        'Magento_Checkout/js/view/payment/default',

    ],
    function (Component) {
        'use strict';
        var token = window.checkoutConfig.paymentToken
        var total = window.checkoutConfig.quoteData.grand_total * 100
        var ref = window.checkoutConfig.formKey
        var name = window.checkoutConfig.customerData.email
        var logo = window.checkoutConfig.imageData[15].src

        return Component.extend({

            defaults: {
                template: 'Equity_Djenga/payment/equitydjengapayment',

            },
            paymentToken: `${token}`,
            orderTotal: `${total}`,
            orderRef: `${ref}`,
            custName: `${name}`,
            popLog: `${logo}`,

            /** Returns send check to info */
            getMailingAddress: function() {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },

        });
    }
);


