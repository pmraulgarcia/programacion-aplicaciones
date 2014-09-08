<?php

class Privada {

        public $id;
        private $message;
        private $name;

        public function setMessage($value){
            $this->message = $value;
        }

        public function getMessage(){
            return $this->message;
        }

        public function setName(){
            $this->name = "Raul";
        }

        public function getName(){
            return $this->name;
        }
}

