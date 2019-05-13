<?php

if (!function_exists('t')) {
    function t($value, $key = null, $params = [])
    {
        return app('translator')->insertTransValue($value, $key, $params);
    }
}
