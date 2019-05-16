<?php

    class STRIPE_SUBSCRIPTIONS {

        // Cancel a subscription
        function cancel($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["subscriptions"] . "/$id/cancel");
            } else {
                return 0;
            }
        }

        // Create a subscription
        function create($params) { global $stripe;
            if ($params["customer"]) {
                return $stripe->requests->post($stripe->keys["api"]["subscriptions"], $params);
            } else {
                return 0;
            }
        }

        // Create a subscription item
        function createItem($params) { global $stripe;
            if ($params["plan"] && $params["subscription"]) {
                return $stripe->requests->post($stripe->keys["api"]["subscription_items"], $params);
            } else {
                return 0;
            }
        }

        // Delete a subscription
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["subscriptions"] . "/$id");
            } else {
                return 0;
            }
        }

        // Delete a subscription
        function deleteItem($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["subscription_items"] . "/$id");
            } else {
                return 0;
            }
        }

        // Retrieve a subscription
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["subscriptions"] . "/$id");
            } else {
                return 0;
            }
        }

        // Retrieve subscription item
        function item($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["subscription_items"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all subscription items
        function items() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["subscription_items"]);
        }

        // List all subscriptions
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["subscriptions"]);
        }

        // Update a subscription
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["subscriptions"] . "/$id", $params);
            } else {
                return 0;
            }
        }

    }

?>
