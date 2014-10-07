<?php

class Form
{

    public function __construct($action = '#', $method = 'POST')
    {
        echo "<form class=\"dhform\" action=\"$action\" method=\"$method\">";
    }

    public function end()
    {
        echo '</form>';
    }

    public function __call($name, $args)
    {
        $builderName = ucfirst($name) . "Builder";

        return new $builderName();
    }

}
