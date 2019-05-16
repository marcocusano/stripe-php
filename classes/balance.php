<?php

    class STRIPE_BALANCE {

        // Retrieve balance
        function get() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["balance"]);
        }

        // List all histories or get a specifiy history balance by sending $id
        function history($id = null) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["balance"] . "/history/$id");
            } else {
                return $stripe->requests->get($stripe->keys["api"]["balance"] . "/history");
            }
        }

    }

?>
