/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'djengapayment',
                component: 'Equitydjenga_Equitymodule/js/view/payment/method-renderer/djengapayment-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);