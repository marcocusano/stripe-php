<?php

    class STRIPE_PLANS {

        // Create a plan
        function create($params) { global $stripe;
            if ($params["currency"] && $params["interval"] && $params["product"]) {
                return $stripe->requests->post($stripe->keys["api"]["plans"], $params);
            } else {
                return 0;
            }
        }

        // Delete a plan
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["plans"] . "/$id");
            } else {
                return 0;
            }
        }


        // Retrieve a plan
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["plans"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all plans
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["plans"]);
        }

        // Update a plan
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["plans"] . "/$id", $params);
            } else {
                return 0;
            }
        }

    }

?>
