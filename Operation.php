<?php


    class Operation{

        public $data01;
        public $data02;
        public $result;

        public function operation01($x,$y){
            $this->data01 = $x;
            $this->data02 = $y;
            $this->result = ($this->data01 + $this->data01)*2;
            return $this->result;
        }

        public function operation02($x,$y){
            $this->data01 = $x;
            $this->data02 = $y;
            $this->result = ($this->data01 + $this->data01)*2;
        }

        public function operation03(){
            $this->result = ($this->data01 + $this->data01)*2;
            return $this->result;
        }

        public function operation04(){
            $this->result = ($this->data01 + $this->data01)*2;
        }

        public function operation05($a, $b){
            $this->data01 = $a;
            $operation = $this->data01 + $b;
            $this->result = $a * $b;
            return $operation;
        }

    }


?>