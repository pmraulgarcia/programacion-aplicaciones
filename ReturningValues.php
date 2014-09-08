<?php

    class ReturningValues{

        public $a;

        public function firstCase(){
            $a = 10;
            return $a;
        }

        public function secondCase(){
            $this->a = 10;
            return $this->a;
        }

        public function thirdCase(){
            $x = 10;
            return $x;
        }
    }


?>