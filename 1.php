<!-- Task 1:
Dado un número, mostrar su serie de Fibonacci. (La serie de Fibonacci es un
orden de números dónde cada número es la suma de los dos anteriores) -->
<?php
  function fibo($n){
    $a = 0;
    $b = 1;
    $i = 0;
    while($i < $n){
      $t = $a;
      $a = $a + $b;
      $b = $t;
      $i++;
    }
    return $a;
  }
  echo fibo(0)."\n";
  echo fibo(1)."\n";
  echo fibo(2)."\n";
  echo fibo(3)."\n";
?>

