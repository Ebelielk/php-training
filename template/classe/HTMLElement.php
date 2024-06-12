<?php
class HTMLElement {
    protected $tag;
    protected $attributes = [];
    protected $content;

    public function __construct($tag, $attributes = [], $content = '') {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    protected function renderAttributes() {
        $result = '';
        foreach ($this->attributes as $key => $value) {
            $result .= " $key=\"$value\"";
        }
        return $result;
    }

    public function render() {
        return "<{$this->tag}{$this->renderAttributes()}>{$this->content}</{$this->tag}>";
    }
}
