<?php

    require ('PassingParameters.php');

    $obj = new PassingParameters();

   /* echo "<br>a: ".$obj->a."  b:".$obj->b;
    $obj->firstCase(2,3);
    echo "<br>a: ".$obj->a."  b:".$obj->b;
    $obj->secondCase(2,3);
    echo "<br>a: ".$obj->a."  b:".$obj->b;
    $obj->thirdCase(2,3);
    echo "<br>a: ".$obj->a."  b:".$obj->b;
    $obj->fourthCase(2,3);
    echo "<br>a: ".$obj->a."  b:".$obj->b;*/

   // $obj->thirdCase(2,3);

    $obj->a = 10;
    $obj->b = 20;
    $obj->suma();
    echo "<br>a: ".$obj->a ;
    echo "<br>b: ".$obj->b ;
?>
























