<?php

class SubmitBuilder extends Builder
{
    public function __construct()
    {
        $this->addProperty('label');
        $this->addProperty('name', 'submit');
    }

    public function build()
    {
        return "<label><input type=\"submit\" name=\"{$this->name}\" value=\"{$this->label}\" /></label>";
    }
}
