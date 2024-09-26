<?php

class Orang{
    protected $nama;

    //constructor
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //menthod
    public function ucapSalam(){
        echo "Hello nama saya " . $this->nama;
    }
}