<?php

if (! function_exists('idr_format')) {
    function idr_format($value) {
        return 'Rp '.number_format($value, 0, ',', '.');
    }
}