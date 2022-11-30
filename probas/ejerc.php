
<?php
$a=5;
echo "Primer número = " . $a . "\n";
$b=12;
echo "Segundo número = " . $b . "\n";
echo "Resultado de la suma = " .($a + $b) . "\n";

echo "Resultado de la divison = " .($a / $b) . "\n";
echo "Resto de la divison = " .($a % $b) . "\n";

$DNI="34438574B";
$nota1=5;
$nota2=7;
$nota3=9;
$nota4=2;
echo "DNI: " . $DNI . "\n";
echo "SRI: " . $nota1 . "\n";
echo "EIE: " . $nota2 . "\n";
echo "IAW: " . $nota3 . "\n";
echo "ASO: " . $nota4 . "\n";
$media=[$nota1,$nota2,$nota3,$nota4];
echo "Media: " . array_sum($media)/count($media) . "\n";

$precio=5.25;
echo "Precio = " . $precio ."\n";
echo "Precio con IVA = " . $precio + ($precio * 0.21) . "\n";

echo "Potencia de 5 ^ 12 = " . ($a ** $b) . "\n";

echo "Horas = " . $a . "\n";
echo "Minutos = " . $a*60 . "\n";
echo "Segundos = " . $a*60*60 . "\n";

$voto1=true;
$voto2=false;
$voto3=true;
$votos=[$voto1,$voto2,$voto3];
echo "Resultado votacion: " . array_sum($votos)/count($votos)*100 . "% de votos a favor" . "\n";

$C = 20;
define("F", ($C * 9 / 5) + 32);
define("K", $C + 273.15);
echo $C . " grados Celsius son " . F . " grados Fahrenheit y " . K . " grados Kelvin \n";

$dato1=1;
$dato2=2;
$dato3=3;

echo ($dato1+$dato2+$dato3)**3;

$libras=225;
$pies=7;
echo "Usuario pesa" . $libras . " libras y mide " . $pies . " pies";
define("KG", $libras/2.205);
define("CM", $pies*30.48);
define("IMC", KG/CM);
echo "Usuario pesa " . KG . " kg y mide " . CM . " cms, tiene un IMC de " . IMC . "\n";

define("PI", 3.14159265359 );
$radio= 4;
$altura= 20;
echo "Área de cilindro= " . 2*PI*$radio*($radio+$altura) . "\n";
echo "Volumen de cilindro= " . PI*$altura*$radio**2 . "\n";
?>