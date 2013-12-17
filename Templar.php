<?php
class Templar {
    protected $vars = [];

    // Smarty interfaces
    public function assign($key, $value) {
        $this->vars[$key] = $value;
    }

    public function render($template) {
        echo $this->fetch($template);
    }

    public function fetch($template) {
        extract($this->vars);
        ob_start();
        include $template;
        $t = ob_get_contents();
        ob_end_clean();
        return $t;
    }
}
