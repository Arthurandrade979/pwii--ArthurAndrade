<?php
    $x = "hello world!";
    $y = 'hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    $x = 12.4;

    var_dump($x);
    echo "<br> <br>";

    $y = ['arthur', 'cacheado'];

    var_dump($y);
    echo "<br>";
    echo $y[1];
    echo "<br>";
   
    $meuObj = new stdclass();
    $ymeuObj -> nome= "davi";
    $meuObj -> idade = 32;
    $meuJson = json_encode($meuObj);
    echo $meuJson;
    echo "<br>";
    var_dump
       
  
?>