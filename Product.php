<?php


	class Product{
		
		public $id;
		public $name;
		public $description;
		public $prize;
		
		public function getProduct(){
			$this->id = 1;
			$this->name = "Autom&oacute;vil";
			$this->description = utf8_decode("Ford Focus 2012, Estándar, 4 puertas, automático, color negro... ");
			$this->prize = "$120,000";
		}
		
		public function showProduct(){
			echo "<table border=1>";
				echo "<tr><th>ID</th><th>NOMBRE</th><th>DESCRIPCIÓN</th><th>PRECIO</th></tr>";
				echo "<tr><td>$this->id</td><td>$this->name</td><td>$this->description</td><td>$this->prize</td></tr>";
			echo "</table>";
		}
		
		
	}

?>

