<?php

    include ('Example.php');

    $object01 = new Example();
    
    $object01->ShowMessage01("Hola Mundo 01");
    
    $object01->message = "Hola Mundo 02";
    $object01->ShowMessage02();
    
    echo "<br> Mensaje:".$object01->ShowMessage03();


?>