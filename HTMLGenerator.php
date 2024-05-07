<?php

class HTMLGenerator {
    private $html = '';

    public function createDoctype() {
        $this->html .= '<!DOCTYPE html>';
        return $this;
    }

    public function createHead() {
        $this->html .= "\n" . '<head>';
        return $this;
    }

    public function createTitle($title) {
        $this->html .= "\n\t" . '<title>' . $title . '</title>';
        return $this;
    }

    public function closeHead() {
        $this->html .= "\n" . '</head>';
        return $this;
    }

    public function createBody() {
        $this->html .= "\n" . '<body>';
        return $this;
    }

    public function closeBody() {
        $this->html .= "\n" . '</body>';
        return $this;
    }

    public function addTag($tag) {
        $this->html .= $tag;
        return $this;
    }

    public function saveToFile($filename) {
        file_put_contents($filename, $this->html);
    }
}

?>