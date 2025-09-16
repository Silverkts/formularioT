<?php
$Nombre= $_POST  ['Nombre'];
$Curso=$_POST ['Curso en formacion'];
$Numero= $_POST  ['Ingrese un numero aleatoreo'];

$val = $Numero * $Numero

echo "Su nombre es: $Nombre <br>";
echo "ESu curso es: $Curso <br>";
if ($val >= 100)  {
  echo "su numero es: . $val . que afortunado eh";
}else  {
  echo "su numero es: $val";  }
