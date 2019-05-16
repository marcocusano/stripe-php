<?php

    class STRIPE_INVOICES {

        // Create an invoice
        function create($params) { global $stripe;
            if ($params["customer"]) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"], $params);
            } else {
                return 0;
            }
        }

        // Create an invoice item
        function createItem($params) { global $stripe;
            if ($params["currency"] && $params["customer"]) {
                return $stripe->requests->post($stripe->keys["api"]["invoice_items"], $params);
            } else {
                return 0;
            }
        }

        // Delete an invoice
        function delete($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["invoices"] . "/$id");
            } else {
                return 0;
            }
        }

        // Delete an invoice
        function deleteItem($id) { global $stripe;
            if ($id) {
                return $stripe->requests->delete($stripe->keys["api"]["invoice_items"] . "/$id");
            } else {
                return 0;
            }
        }

        // Finalize invoice
        function finalize($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id/finalize");
            } else {
                return 0;
            }
        }

        // Retrieve an invoice
        function get($id) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["invoices"] . "/$id");
            } else {
                return 0;
            }
        }

        // Retrieve invoice item
        function item($invoiceID) { global $stripe;
            if ($id) {
                return $stripe->requests->get($stripe->keys["api"]["invoice_items"] . "/$invoiceID");
            } else {
                return 0;
            }
        }

        // List all invoice items
        function items() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["invoice_items"]);
        }

        // List all invoices
        function list() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["invoices"]);
        }

        // Pay an invoice
        function pay($id, $params = null) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id/pay", $params);
            } else {
                return 0;
            }
        }

        // Send an invoice for a manual payment
        function send($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id/send");
            } else {
                return 0;
            }
        }

        // Mark invoice as uncollectible
        function uncollectible($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id/mark_uncollectible");
            } else {
                return 0;
            }
        }

        // Retrieve all upcoming invoices
        function upcoming() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["invoices"] . "/upcoming");
        }

        // Retrieve all upcoming invoices
        function upcomingItems() { global $stripe;
            return $stripe->requests->get($stripe->keys["api"]["invoices"] . "/upcoming/lines");
        }

        // Update an invoice
        function update($id, $params) {
            if ($id && $params) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id", $params);
            } else {
                return 0;
            }
        }

        // Void an invoice
        function void($id) { global $stripe;
            if ($id) {
                return $stripe->requests->post($stripe->keys["api"]["invoices"] . "/$id/void");
            } else {
                return 0;
            }
        }

    }

?>
