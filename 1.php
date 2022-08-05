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
    echo $a."\n";
  }
  fibo(0);
  fibo(1);
  fibo(2);
  fibo(3);
  fibo(4);
?>

