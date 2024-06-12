<?php
require_once 'HTMLElement.php';

class Input extends HTMLElement {
    public function __construct($type, $name, $value = '', $attributes = []) {
        parent::__construct('input', array_merge($attributes, [
            'type' => $type,
            'name' => $name,
            'value' => $value
        ]));
    }

    public function render() {
        return "<{$this->tag}{$this->renderAttributes()} />";
    }
}
