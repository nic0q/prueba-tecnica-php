<!-- Task 3:
Escriba una función que permita multiplicar dos números sin utilizar el signo
de multiplicación -->
<?php
  function multiply($a, $b){
    $i = 0;
    $ac = 0;
    while($i < $b){
      $ac = $ac + $a;
      $i++;
    }
    return $ac;
  }
  echo multiply(2, 3)."\n";
?>