<?php
require_once 'HTMLElement.php';

class Form extends HTMLElement {
    private $elements = [];

    public function __construct($action, $method = 'POST', $attributes = []) {
        parent::__construct('form', array_merge($attributes, [
            'action' => $action,
            'method' => $method,
            'enctype' => 'multipart/form-data'
        ]));
    }

    public function addElement($element) {
        $this->elements[] = $element;
    }

    public function render() {
        $content = '';
        foreach ($this->elements as $element) {
            $content .= $element->render();
        }
        return "<{$this->tag}{$this->renderAttributes()}>{$content}</{$this->tag}>";
    }
}
