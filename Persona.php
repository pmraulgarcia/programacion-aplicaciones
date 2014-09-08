<?php

class Persona {

    private $name;


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        return $this->name = utf8_decode($name);
    }


}


?>