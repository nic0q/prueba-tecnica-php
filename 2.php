<!-- Task 2:
Dada una cadena de texto, darle la vuelta a invertir el orden de sus caracteres,
sin usar métodos propios del lenguaje, sólo estructuras de control. -->
<?php
  function reverse($str){
    $i = 0;
    $len = strlen($str);
    $rev = "";
    while($i < $len){
      $rev = $rev . substr($str, $len - $i - 1, 1);
      $i++;
    }
    return $rev;
  }
  echo reverse("hola")."\n";
  echo reverse("mundo")."\n";
?>