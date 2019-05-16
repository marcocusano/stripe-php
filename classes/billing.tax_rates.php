<?php

    class STRIPE_TAX_RATES {

        // Create a tax_rate
        function create($params) { global $stripe;
            if ($params["display_name"] && $params["display_name"] && is_numeric($params["percentage"])) {
                return $stripe->requests->post($stripe->keys["api"]["tax_rates"], $params);
            } else {
                return 0;
            }
        }

        // Delete a tax_rate
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["tax_rates"] . "/$id");
            } else {
                return 0;
            }
        }


        // Retrieve a tax_rate
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["tax_rates"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all tax_rates
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["tax_rates"]);
        }

        // Update a tax_rate
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["tax_rates"] . "/$id", $params);
            } else {
                return 0;
            }
        }

    }

?>
