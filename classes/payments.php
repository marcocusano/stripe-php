<?php

    class STRIPE_PAYMENTS {

        // Attach a Payment Method to a Customer
        function attachMethod($methodID, $customerID) { global $stripe;
            if ($methodID && $customerID) {
                return $stripe->requests->post($stripe->keys["api"]["payment_methods"] . "/$methodID/attach", $params);
            } else {
                return 0;
            }
        }

        // Cancel a Payment Intent
        function cancelIntent($id, $params = null) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["payment_intents"] . "/$id/cancel", $params);
            } else {
                return 0;
            }
        }

        // Capture a Payment Intent
        function captureIntent($id, $params = null) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["payment_intents"] . "/$id/capture", $params);
            } else {
                return 0;
            }
        }

        // Retrieve a charge
        function charge($id) { global $stripe;
            return $stripe->charges->get($id);
        }

        // List all charges
        function charges() { global $stripe;
            return $stripe->charges->list();
        }

        // Close a dispute
        function closeeDispute($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["disputes"] . "/$id/close");
            } else {
                return 0;
            }
        }

        // Confirm a Payment Intent
        function confirmIntent($id, $params = null) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["payment_intents"] . "/$id/confirm", $params);
            } else {
                return 0;
            }
        }

        // Create a Payment Intent
        function createIntent($params) { global $stripe;
            if (is_numeric($params["amount"]) && $params["currency"]) {
                return $stripe->requests->post($stripe->keys["api"]["payment_intents"], $params);
            } else {
                return 0;
            }
        }

        // Create a Payment Method
        function createMethod($params) { global $stripe;
            if ($params["type"]) {
                return $stripe->requests->post($stripe->keys["api"]["payment_methods"], $params);
            } else {
                return 0;
            }
        }

        // Create a refund
        function createRefund($params) { global $stripe;
            if ($params["charge"]) {
                return $stripe->requests->post($stripe->keys["api"]["refunds"] . "/$id", $params);
            } else {
                return 0;
            }
        }

        // Detach a Payment Method to a Customer
        function detachMethod($methodID) { global $stripe;
            if ($methodID) {
                return $stripe->requests->post($stripe->keys["api"]["payment_methods"] . "/$methodID/detach");
            } else {
                return 0;
            }
        }

        // Delete a Payment Method
        function deleteMethod($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["payment_methods"] . "/$id");
            } else {
                return 0;
            }
        }

        // Retrieve a dispute
        function dispute($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["disputes"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all disputes
        function disputes() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["disputes"]);
        }

        // Retrieve a Payment Intent
        function intent($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["payment_intents"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all Payment Intents
        function intents() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["payment_intents"]);
        }


        // Retrieve a payment method
        function method($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["payment_methods"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all payment methods
        function methods() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["payment_methods"]);
        }

        // Retrieve a payout
        function payout($id) { global $stripe;
            return $stripe->payouts->get($id);
        }

        // List all payouts
        function payouts() { global $stripe;
            return $stripe->payouts->list();
        }

        // Retrieve a refund
        function refund($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["refunds"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all refunds
        function refunds() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["refunds"]);
        }

        // Create a charge
        function send($params) { global $stripe;
            return $stripe->charges->charge($params);
        }

        // Update a dispute
        function updateDispute($id, $params) { global $stripe;
            if ($id && $params["dispute"]) {
                return $stripe->requests->post($stripe->keys["api"]["disputes"] . "/$id", $params);
            } else {
                return 0;
            }
        }

        // Update a refund
        function updateRefund($id, $params = null) { global $stripe;
            if ($id) {
                if ($params) {
                    return $stripe->requests->post($stripe->keys["api"]["refunds"] . "/$id", $params);
                } else {
                    return $stripe->payments->refund($id);
                }
            } else {
                return 0;
            }
        }

    }

?>
