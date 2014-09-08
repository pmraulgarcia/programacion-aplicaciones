<?php

    include ('Suma.php');
    include ('Resta.php');
    include ('Multiplicacion.php');
    include ('Division.php');

    echo "<table>";

    $object01 = new Suma();
    $object01->a = 10;
    $object01->b = 5;
    $object01->sumar();
    echo "<tr><td>".$object01->c."</td></tr>";

    $object02 = new Resta();
    $object02->a = 10;
    $object02->b = 5;
    $object02->restar();
    echo "<tr><td>".$object02->c."</td></tr>";

    $object03 = new Multiplicacion();
    $object03->a = 10;
    $object03->b = 5;
    //$temp1 = $object03->multiplicar();
    echo "<tr><td>".$object03->c."</td></tr>";

    $object04 = new Multiplicacion();
    $object04->a = 10;
    $object04->b = 5;
    //$temp2 = $object04->multiplicar();
    echo "<tr><td>".$object04->c."</td></tr>";

    echo "</table>";






?>