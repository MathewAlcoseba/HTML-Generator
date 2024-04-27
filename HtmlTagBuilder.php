<?php

class HtmlTagBuilder {
    private $tag;
    private $attributes = [];
    private $content;
    private $headers = [];

    public function create($tag) {
        $this->tag = $tag;
        return $this; // Return $this for method chaining
    }

    public function attr($name, $value) {
        $this->attributes[$name] = $value;
        return $this; // Return $this for method chaining
    }

    public function content($content) {
        $this->content = $content;
        return $this; // Return $this for method chaining
    }

    public function header($name, $value){
        $this->content = $content;
        return $this;

    }

    public function __toString() {
        $html = "<{$this->tag}";

        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"$value\"";
        }

        $html .= ">{$this->content}</{$this->tag}>";

        return $html;
    }
}
?>
