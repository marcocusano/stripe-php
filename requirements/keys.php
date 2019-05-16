<?php

    // APIs
    $stripe->keys["api"]["root"] = "https://api.stripe.com/v1";
    $stripe->keys["api"]["accounts"] = $stripe->keys["api"]["root"] . "/accounts";
    $stripe->keys["api"]["application_fees"] = $stripe->keys["api"]["root"] . "/application_fees";
    $stripe->keys["api"]["balance"] = $stripe->keys["api"]["root"] . "/balance";
    $stripe->keys["api"]["charges"] = $stripe->keys["api"]["root"] . "/charges";
    $stripe->keys["api"]["checkout"] = $stripe->keys["api"]["root"] . "/checkout";
    $stripe->keys["api"]["country_specs"] = $stripe->keys["api"]["root"] . "/country_specs";
    $stripe->keys["api"]["coupons"] = $stripe->keys["api"]["root"] . "/coupons";
    $stripe->keys["api"]["credit_notes"] = $stripe->keys["api"]["root"] . "/credit_notes";
    $stripe->keys["api"]["customers"] = $stripe->keys["api"]["root"] . "/customers";
    $stripe->keys["api"]["disputes"] = $stripe->keys["api"]["root"] . "/disputes";
    $stripe->keys["api"]["events"] = $stripe->keys["api"]["root"] . "/events";
    $stripe->keys["api"]["files"] = $stripe->keys["api"]["root"] . "/files";
    $stripe->keys["api"]["files_post"] = "https://files.stripe.com/v1/files";
    $stripe->keys["api"]["invoices"] = $stripe->keys["api"]["root"] . "/invoices";
    $stripe->keys["api"]["invoice_items"] = $stripe->keys["api"]["root"] . "/invoiceitems";
    $stripe->keys["api"]["issuing"] = $stripe->keys["api"]["root"] . "/issuing";
    $stripe->keys["api"]["payment_intents"] = $stripe->keys["api"]["root"] . "/payment_intents";
    $stripe->keys["api"]["payment_methods"] = $stripe->keys["api"]["root"] . "/payment_methods";
    $stripe->keys["api"]["payouts"] = $stripe->keys["api"]["root"] . "/payouts";
    $stripe->keys["api"]["plans"] = $stripe->keys["api"]["root"] . "/plans";
    $stripe->keys["api"]["products"] = $stripe->keys["api"]["root"] . "/products";
    $stripe->keys["api"]["refunds"] = $stripe->keys["api"]["root"] . "/refunds";
    $stripe->keys["api"]["sessions"] = $stripe->keys["api"]["checkout"] . "/sessions";
    $stripe->keys["api"]["sources"] = $stripe->keys["api"]["root"] . "/sources";
    $stripe->keys["api"]["subscriptions"] = $stripe->keys["api"]["root"] . "/subscriptions";
    $stripe->keys["api"]["subscription_items"] = $stripe->keys["api"]["root"] . "/subscription_items";
    $stripe->keys["api"]["tax_rates"] = $stripe->keys["api"]["root"] . "/tax_rates";
    $stripe->keys["api"]["terminal"] = $stripe->keys["api"]["root"] . "/terminal";
    $stripe->keys["api"]["tokens"] = $stripe->keys["api"]["root"] . "/tokens";
    $stripe->keys["api"]["topups"] = $stripe->keys["api"]["root"] . "/topups";
    $stripe->keys["api"]["transfers"] = $stripe->keys["api"]["root"] . "/transfers";
    $stripe->keys["api"]["radar"] = $stripe->keys["api"]["root"] . "/radar";
    $stripe->keys["api"]["reviews"] = $stripe->keys["api"]["root"] . "/reviews";
    $stripe->keys["api"]["sigma"] = $stripe->keys["api"]["root"] . "/sigma";
    $stripe->keys["api"]["skus"] = $stripe->keys["api"]["root"] . "/skus";
    $stripe->keys["api"]["value_lists"] = $stripe->keys["api"]["radar"] . "/value_lists";
    $stripe->keys["api"]["value_list_items"] = $stripe->keys["api"]["radar"] . "/value_list_items";
    $stripe->keys["api"]["webhooks"] = $stripe->keys["api"]["root"] . "/webhook_endpoints";

    // Error codes
    $stripe->keys["errors"][200] = "Everything worked as expected.";
    $stripe->keys["errors"][400] = "Bad Request	The request was unacceptable, often due to missing a required parameter.";
    $stripe->keys["errors"][401] = "Unauthorized	No valid API key provided.";
    $stripe->keys["errors"][402] = "Request Failed: The parameters were valid but the request failed.";
    $stripe->keys["errors"][404] = "Not Found: The requested resource doesn't exist.";
    $stripe->keys["errors"][409] = "Conflict	The request conflicts with another request (perhaps due to using the same idempotent key).";
    $stripe->keys["errors"][429] = "Too Many Requests: Too many requests hit the API too quickly. We recommend an exponential backoff of your requests.";
    $stripe->keys["errors"][500] = "Server Errors: Something went wrong on Stripe's end. (These are rare.)";
    $stripe->keys["errors"][502] = "Server Errors: Something went wrong on Stripe's end. (These are rare.)";
    $stripe->keys["errors"][503] = "Server Errors: Something went wrong on Stripe's end. (These are rare.)";
    $stripe->keys["errors"][504] = "Server Errors: Something went wrong on Stripe's end. (These are rare.)";
    $stripe->keys["errors"]["api_connection_error"] = "Failure to connect to Stripe's API.";
    $stripe->keys["errors"]["api_error"] = "API errors cover any other type of problem (e.g., a temporary problem with Stripe's servers), and are extremely uncommon.";
    $stripe->keys["errors"]["authentication_error"]	= "Failure to properly authenticate yourself in the request.";
    $stripe->keys["errors"]["card_error	Card errors"] = "are the most common type of error you should expect to handle. They result when the user enters a card that can't be charged for some reason.";
    $stripe->keys["errors"]["idempotency_error"] = "Idempotency errors occur when an Idempotency-Key is re-used on a request that does not match the first request's API endpoint and parameters.";
    $stripe->keys["errors"]["invalid_request_error"] = "Invalid request errors arise when your request has invalid parameters.";
    $stripe->keys["errors"]["rate_limit_error"] = "Too many requests hit the API too quickly.";
    $stripe->keys["errors"]["validation_error"] = "Errors triggered by our client-side libraries when failing to validate fields (e.g., when a card number or expiration date is invalid or incomplete).";



?>
