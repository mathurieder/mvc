<?php

class TextBuilder extends Builder
{
    public function __construct()
    {
        $this->addProperty('label');
        $this->addProperty('name');
    }

    public function build()
    {
        return "<label>{$this->label}: <input type=\"text\" name=\"{$this->name}\" /></label>";
    }
}
