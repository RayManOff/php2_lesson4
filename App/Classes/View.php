<?php

namespace App\Classes;


class View implements \Countable
{

    use TCollection;

    public function render($template)
    {

        ob_start();

        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }

        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {

        echo $this->render($template);

    }

    public function count()
    {
        return count($this->data);
    }

}