<?php
require_once 'HTMLElement.php';

class Button extends HTMLElement {
    public function __construct($type, $content, $attributes = []) {
        parent::__construct('button', array_merge($attributes, [
            'type' => $type
        ]), $content);
    }
}
