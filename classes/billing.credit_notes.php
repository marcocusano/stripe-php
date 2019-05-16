<?php

    class STRIPE_CREDIT_NOTES {

        // Create a credit_note
        function create($params) { global $stripe;
            if (is_numeric($params["amount"]) && $params["invoice"]) {
                return $stripe->requests->post($stripe->keys["api"]["credit_notes"], $params);
            } else {
                return 0;
            }
        }

        // Delete a credit_note
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["credit_notes"] . "/$id");
            } else {
                return 0;
            }
        }


        // Retrieve a credit_note
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["credit_notes"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all credit_notes
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["credit_notes"]);
        }

        // Update a credit_note
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["credit_notes"] . "/$id", $params);
            } else {
                return 0;
            }
        }

        // Update a credit_note
        function void($id) {
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["credit_notes"] . "/$id/void");
            } else {
                return 0;
            }
        }

    }

?>
