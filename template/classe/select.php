<?php
require_once 'HTMLElement.php';

class Select extends HTMLElement {
    private $options = [];

    public function __construct($name, $options = [], $attributes = []) {
        parent::__construct('select', array_merge($attributes, [
            'name' => $name
        ]));
        $this->options = $options;
    }

    public function render() {
        $optionsHTML = '';
        foreach ($this->options as $value => $text) {
            $optionsHTML .= "<option value=\"$value\">$text</option>";
        }
        return "<{$this->tag}{$this->renderAttributes()}>{$optionsHTML}</{$this->tag}>";
    }
}
