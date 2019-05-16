<?php

    class STRIPE_PRODUCTS {

        // Create a product
        function create($params) { global $stripe;
            if ($params["name"] && $params["type"]) {
                return $stripe->requests->post($stripe->keys["api"]["products"], $params);
            } else {
                return 0;
            }
        }

        // Delete a product
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["products"] . "/$id");
            } else {
                return 0;
            }
        }


        // Retrieve a product
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["products"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all products
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["products"]);
        }

        // Update a product
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["products"] . "/$id", $params);
            } else {
                return 0;
            }
        }

    }

?>
