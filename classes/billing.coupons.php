<?php

    class STRIPE_COUPONS {

        // Create a coupon
        function create($params) { global $stripe;
            if ($params["duration"]) {
                return $stripe->requests->post($stripe->keys["api"]["coupons"], $params);
            } else {
                return 0;
            }
        }

        // Delete a coupon
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["coupons"] . "/$id");
            } else {
                return 0;
            }
        }


        // Retrieve a coupon
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["coupons"] . "/$id");
            } else {
                return 0;
            }
        }

        // List all coupons
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["coupons"]);
        }

        // Update a coupon
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["coupons"] . "/$id", $params);
            } else {
                return 0;
            }
        }

    }

?>
