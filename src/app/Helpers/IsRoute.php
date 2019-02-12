<?php

if (!function_exists('isRoute')) {
    function isRoute($routes)
    {
        $checkedRoutes = [];

        foreach ($routes as $route) {
            $checkedRoutes[] = request()->routeIs($route);
        }

        return in_array(true, $checkedRoutes);
    }
}
