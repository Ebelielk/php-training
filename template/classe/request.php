<?php
class Request {
    public static function get($key, $default = null) {
        return $_GET[$key] ?? $default;
    }

    public static function post($key, $default = null) {
        return $_POST[$key] ?? $default;
    }

    public static function file($key) {
        return $_FILES[$key] ?? null;
    }
}
