<!-- Task 2:
Dada una cadena de texto, darle la vuelta a invertir el orden de sus caracteres,
sin usar métodos propios del lenguaje, sólo estructuras de control. -->
<?php
  function reverse($string){
    $len = strlen($string);
    $rev = "";
    $i = 0;
    while($i < $len){
      $rev = $rev . substr($string, $len - 1 - $i , 1);
      $i++;
    }
    return $rev;
  }
  echo reverse("nico")."\n";
  echo reverse("hola")."\n";
?>