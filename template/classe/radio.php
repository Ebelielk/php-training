<?php
require_once 'HTMLElement.php';

class Radio extends HTMLElement {
    public function __construct($name, $value = '', $checked = false, $attributes = []) {
        parent::__construct('input', array_merge($attributes, [
            'type' => 'radio',
            'name' => $name,
            'value' => $value
        ]));
        if ($checked) {
            $this->attributes['checked'] = 'checked';
        }
    }

    public function render() {
        return "<{$this->tag}{$this->renderAttributes()} />";
    }
}
