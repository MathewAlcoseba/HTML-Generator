<?php

class HTMLTagBuilder {
    private $tag;
    private $attributes = [];
    private $content = '';

    public function __construct($tag) {
        $this->tag = $tag;
    }

    public function withAttribute($name, $value) {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function withContent($content) {
        $this->content = $content;
        return $this;
    }

    public function build() {
        $html = "\n\t" . '<' . $this->tag;
        foreach ($this->attributes as $name => $value) {
            $html .= ' ' . $name . '="' . $value . '"';
        }
        $html .= '>' . $this->content . '</' . $this->tag . '>';
        return $html;
    }
}

?>
