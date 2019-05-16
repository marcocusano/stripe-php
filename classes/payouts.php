<?php

    class STRIPE_PAYOUTS {

            // Cancel a payout
            function cancel($id) { global $stripe;
                if ($id) {
                    return $stripe->requests->post($stripe->keys["api"]["payouts"] . "/$id/cancel");
                } else {
                    return 0;
                }
            }

            function create($params) { global $stripe;
                if (is_numeric($params["amount"]) && $params["currency"]) {
                    return $stripe->requests->post($stripe->keys["api"]["payouts"], $params);
                } else {
                    return 0;
                }
            }

            function get() { global $stripe;
                if ($id) {
                    return $stripe->requests->get($stripe->keys["api"]["payouts"] . "/$id");
                } else {
                    return 0;
                }
            }

            function list() { global $stripe;
                return $stripe->requests->get($stripe->keys["api"]["payouts"]);
            }

    }

?>
