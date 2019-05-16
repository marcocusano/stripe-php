<?php

    class STRIPE_CUSTOMERS {

        // Create a customer
        function create($params) { global $stripe;
            if ($params["description"]) {
                return $stripe->requests->post($stripe->keys["api"]["customers"], $params);
            } else {
                return 0;
            }
        }

        // Create a Tax ID
        function createTax($customerID, $params) { global $stripe;
            if ($customerID) {
                if ($params["type"] && $params["value"]) {
                    return $stripe->requests->post($stripe->keys["api"]["customers"] . "/$customerID/tax_ids");
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
        }

        // Delete a customer
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["customers"] . "/$id");
            } else {
                return 0;
            }
        }

        // Delete a Tax ID
        function deleteTax($customerID, $taxID) { global $stripe;
            if ($customerID && $taxID) {
                return $stripe->requests->delete($stripe->keys["api"]["customers"] . "/$customerID/tax_ids/$taxID");
            } else {
                return 0;
            }
        }

        // Retrieve a customer
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["customers"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all customers
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["customers"]);
        }

        // List all Tax IDs
        function taxes($customerID) {
            if ($customerID) {
                return $stripe->requests->get($stripe->keys["api"]["customers"] . "/$customerID/tax_ids");
            } else {
                return 0;
            }
        }

        // Update a customer
        function update($id, $params = null) { global $stripe;
            if ($id) {
                if ($params) {
                    return $stripe->requests->post($stripe->keys["api"]["customers"] . "/$id", $params);
                } else {
                    return $stripe->customers->get($id);
                }
            } else {
                return 0;
            }
        }


    }

?>
