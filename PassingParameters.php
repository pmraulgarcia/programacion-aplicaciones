<?php

    class PassingParameters{

        public $a;
        public $b;

        public function firstCase($a,$b){
            echo "<br> a= ".$a;
            echo "<br> b= ".$b;
        }

        public function secondCase($x,$y){
            echo "<br> a= ".$x;
            echo "<br> b= ".$y;
        }

        public function thirdCase($a,$b){
            $this->a = $a;
            $this->b = $b;
            echo "<br> a= ".$this->a;
            echo "<br> b= ".$this->b;
        }

        public function fourthCase($x,$y){
            $this->a = $x;
            $this->b = $y;
            echo "<br> a= ".$this->a;
            echo "<br> b= ".$this->b;
        }

        public function suma(){
            echo "<br> a= ".$this->a;
            echo "<br> b= ".$this->b;
            $total = $this->b + $this->a;
            echo "<br>".$total;
            $this->a++;
            $this->b++;
        }
    }


?>























