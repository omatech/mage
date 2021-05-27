<?php

if (!function_exists('transbr')) {
    function transbr($key = null, $params = [])
    {
        return nl2br(trans($key, $params));
    }
}
