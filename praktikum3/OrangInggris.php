<?php

require_once  "Orang.php";

class OrangInggris extends Orang{

    //Overrede
    public function ucapSalam()
    {
       echo "Hello My name is " . $this->nama;
    }
}