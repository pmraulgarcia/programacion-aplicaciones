<?php

class Teacher extends Persona {

    private $group;

    public function getGroup(){
        return $this->group;
    }

    public function setGroup($group){
        $this->group = utf8_decode($group);
    }
}


