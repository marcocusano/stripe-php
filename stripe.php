<?php

    /////////////////////////////////////////
    //  Stripe-PHP                         //
    //  v0.1 (May 2019)                    //
    //  by Marco Cusano                    //
    //  https://www.marcocusano.dev        //
    /////////////////////////////////////////

    // Static Variables
    DEFINE("STRIPE_ROOT", dirname(__FILE__));
    DEFINE("STRIPE_REQUIREMENTS", STRIPE_ROOT . "/requirements");
    DEFINE("STRIPE_CLASSES", STRIPE_ROOT . "/classes");
    DEFINE("STRIPE_CUSTOM", STRIPE_CUSTOM . "/custom");

    $stripe = New STDCLASS();

        /////////////////////////////////////////
        //                                     //
        //             REQUIREMENTS            //
        //                                     //
        /////////////////////////////////////////

        // Initialization
        $stripe->config = json_decode(file_get_contents("config.json"));
        $stripe->keys = array();
        include(STRIPE_REQUIREMENTS . "/keys.php");
        require_once(STRIPE_REQUIREMENTS . "/requests.php");
        $stripe->requests = New STRIPE_REQUESTS;

        /////////////////////////////////////////
        //                                     //
        //               CLASSES               //
        //                                     //
        /////////////////////////////////////////

        // Balance
        include_once(STRIPE_CLASSES . "/balance.php");
        $stripe->balance = New STRIPE_BALANCE;

        // Charges
        include_once(STRIPE_CLASSES . "/charges.php");
        $stripe->charges = New STRIPE_CHARGES;

        // Charges
        include_once(STRIPE_CLASSES . "/customers.php");
        $stripe->customers = New STRIPE_CUSTOMERS;

        // Payments
        include_once(STRIPE_CLASSES . "/payments.php");
        $stripe->payments = New STRIPE_PAYMENTS;

        // Payouts
        include_once(STRIPE_CLASSES . "/payouts.php");
        $stripe->payouts = New STRIPE_PAYOUTS;

        // Billing / Checkout / Orders
        $stripe->billing = New STDCLASS();
            include_once(STRIPE_CLASSES . "/billing.coupons.php");
            $stripe->billing->coupons = New STRIPE_COUPONS;
            include_once(STRIPE_CLASSES . "/billing.credit_notes.php");
            $stripe->billing->credit_notes = New STRIPE_CREDIT_NOTES;
            include_once(STRIPE_CLASSES . "/billing.invoices.php");
            $stripe->billing->invoics = New STRIPE_INVOICES;
            include_once(STRIPE_CLASSES . "/billing.products.php");
            $stripe->billing->products = New STRIPE_PRODUCTS;
            include_once(STRIPE_CLASSES . "/billing.plans.php");
            $stripe->billing->plans = New STRIPE_PLANS;
            include_once(STRIPE_CLASSES . "/billing.subscriptions.php");
            $stripe->billing->subscriptions = New STRIPE_SUBSCRIPTIONS;
            include_once(STRIPE_CLASSES . "/billing.tax_rates.php");
            $stripe->billing->tax_rates = New STRIPE_TAX_RATES;

        // Connect
        // Coming soon

        // Radar / Fraud
        // Coming soon

        // Issuing
        // Coming soon

        // Terminal
        // Coming soon

        // WebHooks
        // Coming soon

        // Debug Stripe
        // var_dump($stripe);

?>
