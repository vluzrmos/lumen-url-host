<?php

if (!function_exists('lumenHttpHost')) {
    /**
     * Fix Http Hostname and Port.
     * @param  array|string $base An array with host and port parameters, or string eg localhost:80.
     */
    function lumenUrlHost($base = [])
    {
        $defaults = [
            'host' => 'localhost',
            'port' => 80,
        ];

        if (is_string($base)) {
            $base = parse_url($base);
        }

        $base = array_merge($defaults, (array) $base);

        if (!isset($_SERVER['SERVER_NAME'])) {
            $_SERVER['SERVER_NAME'] = $base['host'];
        }

        if (!isset($_SERVER['SERVER_PORT'])) {
            $_SERVER['SERVER_PORT'] = $base['port'];
        }
    }
}
