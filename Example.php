<?php

    class Example{

        public $message;

        
        public function ShowMessage01($MyMessage){
        	$this->message = $MyMessage;
            
        	print "<br> Mensaje: ".$this->message;
        }
        
        public function ShowMessage02(){

            print "<br> Mensaje: ".$this->message;
        }
        
        public function ShowMessage03(){

            $this->message = "Hola Mundo 03";
            
            return $this->message;
        }
    }

?>