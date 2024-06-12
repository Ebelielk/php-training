<?php
class Cookie {
    public static function set($key, $value, $expiry) {
        setcookie($key, $value, time() + $expiry, "/");
    }

    public static function get($key, $default = null) {
        return $_COOKIE[$key] ?? $default;
    }
}
