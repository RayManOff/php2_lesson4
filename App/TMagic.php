<?php

namespace App;


//use App\Classes\Model;

trait TMagic {

    protected $data = [];


    public function __set($k, $v) {

        $this->data[$k] = $v;
    }

    public function __get($k) {

        return $this->data[$k];
    }

    public function __isset($k) {

        return empty($this->data[$k]);
    }



}