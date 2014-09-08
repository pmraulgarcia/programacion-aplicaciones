<?php

    require('Persona.php');
    require('Teacher.php');

    $teacher = new Teacher();

    $teacher->setName("Raúl García");
    $teacher->setGroup("Programación de Aplicaciones");


    echo "<table border=1>";
        echo "<tr bgcolor=#f3f3f3><th>Nombre</th><th>Grupo</th></tr>";
        echo "<tr><td>".$teacher->getName()."</td><td>".$teacher->getGroup()."</td></tr>";
    echo "</table>";




?>