<?php

require_once('animal.php');

class ape extends animal
{
    public $legs = 2;
    public $cool_blooded = "no" ;
    public function yell()
    {
        return "yell : auooo";
    }
}
