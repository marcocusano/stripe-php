![build](https://img.shields.io/badge/build-beta-yellow.svg) ![php-version](https://img.shields.io/badge/php-5.6%2B-blue.svg) ![author](https://img.shields.io/badge/author-Marco%20Cusano-blue.svg)

![background](https://www.marcocusano.dev/api/stripe-php/background.jpg)

# stripe-php
**Stripe PHP** is a PHP library developed to include and simplify the creation and connection between websites, online applications and Stripe.

## Let's Start
Just PHP 5.6+ is required. Let's start [downloading](https://github.com/marcocusano/stripe-php/archive/master.zip) the stripe-php library, then extract it to `your_server_path/`.

## Importing
Import the `stripe.php` file to any `.php` file where you need to use the **Stripe PHP lib**.
```PHP
require_once("your_server_path/stripe.php");
```

## Configuration
Before using the **Stripe PHP lib**, You must [create your Stripe Api-Keys](https://dashboard.stripe.com/apikeys), then configure the lib at `/config.json` as following:
```JSON
{
    "api_keys" : {
        "test" : {
            "public_key" : "pk_test_YourPublicTestApiKey",
            "secret_key" : "sk_test_YourSecretTestApiKey"
        },
        "live" : {
            "public_key" : "pk_live_YourPublicLiveApiKey",
            "secret_key" : "sk_live_YourSecretLiveApiKey"
        }
    },

    "tokens" : [
        "rk_test_AAoz9hZGmZvB3kQigpcJo5BQ00McIje2bd",
        "rk_your_token_key1",
        "rk_your_token_key2",
        "rk_your_token_keyN"
    ],

    "live" : false
}

```
Where:
- `public_key` = Generally used to identify your account with Stripe;
- `private_key` = Required for any request;
- `tokens` = Array of tokens that allows you to perform requests as described from your token limitations;
- `live` = Default `false`, set `true` if on request you are ready to use your **Live** Api Keys.

All of these will be added to `$stripe->config`. If You need to modify `public_key`, `private_key` and/or `tokens` dynamically, You can change it as shown below:
```PHP
// Modify Private Keys
$stripe->config->api_keys->test->secret_key = "pk_test_YourNewSecretTestApiKey";
$stripe->config->api_keys->live->secret_key = "pk_live_YourNewSecretLiveApiKey";
// Modify Public Keys
$stripe->config->api_keys->test->public_key = "pk_test_YourNewPublicTestApiKey";
$stripe->config->api_keys->live->public_key = "pk_live_YourNewPublicLiveApiKey";
// Modify Bot Token
$stripe->config->token = array(
    "rk_test_YourToken1",
    "rk_test_YourToken2",
    "rk_test_YourTokenN",
    "rk_live_YourToken1",
    "rk_live_YourToken2",
    "rk_live_YourTokenN"
);
```

## Ready to pay
You are now ready to use the **Stripe PHP lib** as you wish!
Everything you need to know about the library, such as Classes and "How To Use", is described [here in the Wiki](https://github.com/marcocusano/stripe-php/wiki).
*I hope this library will help you coding for Stripe Payments in PHP. Any suggestion or improvement is always welcome.*

## Change Log
#### v0.1 (2019/05/16)
- First and **beta** release of **stripe-php** lib
