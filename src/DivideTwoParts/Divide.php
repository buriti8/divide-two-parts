<?php

namespace DivideTwoParts;

class Divide
{
    private $number = 8;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function validate()
    {
        if($this->number % 2 == 0 && $this->number > 2){
            echo 'YES';
        } else {
            echo 'NO';
        }
    }
}
