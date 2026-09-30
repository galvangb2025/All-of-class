<?php
//Biblioteca de funciones

//Compara palabras a y b, si la longitud de a > b, devuelve un numero positivo
//                                          a < b, devuelve un numero negativo
//                                          si son iguales devuelve un 0
function compara($a, $b)
{
$num = 0;
if(strlen($a) > strlen($b))
{
$num ++;
}
elseif(strlen($a) < strlen($b))
{
$num --;
}
else
{
$num;
}

return $num;
}

echo compara("lfadwa","pe");

echo "<br>";


function cuentaLetras($a, $x){

}












//No se pone el simbolo de cierre