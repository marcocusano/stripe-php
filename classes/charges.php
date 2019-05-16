<?php

    class STRIPE_CHARGES {

        // Capture a charge
        function capture($id, $params = null) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["charges"] . "$id/capture", $params);
            } else {
                return 0;
            }
        }

        // Create a charge
        function charge($params) { global $stripe;
            if ($params["amount"] && $params["currency"]) {
                return $stripe->requests->post($stripe->keys["api"]["charges"], $params);
            } else {
                return 0;
            }
        }

        // List all charges
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["charges"]);
        }

        // Retrieve a charge
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["charges"] . "/$id");
            } else {
                return 0;
            }
        }

        // Update a charge
        function update($id, $params = null) { global $stripe;
            if ($id) {
                if ($params) {
                    return $stripe->requests->post($stripe->keys["api"]["charges"] . "/$id");
                } else {
                    return $stripe->charges->get($id);
                }
            } else {
                return 0;
            }
        }

    }

?>
