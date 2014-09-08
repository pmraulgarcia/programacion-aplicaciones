<?php

    echo "<br> Crear Objeto";
    require ('Privada.php');
    $obj = new Privada();

    echo "<br> Asignar Valores";
    $obj->id = 1;
    $obj->setMessage("Hola");
    $obj->setName();

    echo "<br> Mostrar Valores";
    echo "<br> Id: ".$obj->id;
    echo "<br> Mensaje:".$obj->getMessage();
    echo "<br> Nombre:".$obj->getName();



?>