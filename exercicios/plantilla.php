<html>
	<head>
		<title>Exer01</title>
		<link href="Base.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
				<p>Enunciado exercicio.</p>
				
				<?php

					echo "<p><strong> Exercicio 17 </strong></p> \n";
					$z=3;
					$x=4;
					echo "<p>Suma de $a + $b = " . $a + $b . "</p> \n";


					$a=5;
					echo "<p>Primer número = " . $a . "</p>\n";
					$b=12;
					echo "<p>Segundo número = " . $b . "</p>\n";
					echo "<p>Resultado de la suma = " .($a + $b) . "</p>\n";

					echo "<p>Resultado de la divison = " .($a / $b) . "</p>\n";
					echo "<p>Resto de la divison = " .($a % $b) . "</p>\n";

					echo "<p><strong> Exercicio 19 </strong></p> \n";
					$DNI="34438574B";
					$nota1=5;
					$nota2=7;
					$nota3=9;
					$nota4=2;
					echo "<p>DNI: " . $DNI . "</p>\n";
					echo "<p>SRI: " . $nota1 . "</p>\n";
					echo "<p>EIE: " . $nota2 . "</p>\n";
					echo "<p>IAW: " . $nota3 . "</p>\n";
					echo "<p>ASO: " . $nota4 . "</p>\n";
					$media=[$nota1,$nota2,$nota3,$nota4];
					echo "<p>Media: " . array_sum($media)/count($media) . "</p>\n";


					echo "<p><strong> Exercicio 20 </strong></p> \n";
					$precio=5.25;
					echo "<p>Precio = " . $precio ."</p>\n";
					echo "<p>Precio con IVA = " . $precio + ($precio * 0.21) . "</p>\n";


					echo "<p><strong> Exercicio 21 </strong></p> \n";
					echo "<p>Potencia de 5 ^ 12 = " . ($a ** $b) . "</p>\n";


					echo "<p><strong> Exercicio 22 </strong></p> \n";
					echo "<p>Horas = " . $a . "</p>\n";
					echo "<p>Minutos = " . $a*60 . "</p>\n";
					echo "<p>Segundos = " . $a*60*60 . "</p>\n";


					echo "<p><strong> Exercicio 23 </strong></p> \n";
					$voto1=true;
					$voto2=false;
					$voto3=true;
					$votos=[$voto1,$voto2,$voto3];
					echo "<p>Resultado votacion: " . array_sum($votos)/count($votos)*100 . "% de votos a favor" . "</p>\n";

					echo "<p><strong> Exercicio 24 </strong></p> \n";
					$C = 20;
					define("F", ($C * 9 / 5) + 32);
					define("K", $C + 273.15);
					echo "<p>" . $C . " grados Celsius son " . F . " grados Fahrenheit y " . K . " grados Kelvin </p>\n";


					echo "<p><strong> Exercicio 25 </strong></p> \n";
					$dato1=1;
					$dato2=2;
					$dato3=3;
					echo "<p>" . ($dato1+$dato2+$dato3)**3 . "</p>";

					echo "<p><strong> Exercicio 26 </strong></p> \n";
					$libras=225;
					$pies=7;
					echo "<p>Usuario pesa " . $libras . " libras y mide " . $pies . " pies</p>\n";
					define("KG", $libras/2.205);
					define("CM", $pies*30.48);
					define("IMC", (KG/(CM)**2));
					echo "<p>Usuario pesa " . KG . " kg y mide " . CM . " cms, tiene un IMC de " . IMC . "</p>\n";


					echo "<p><strong> Exercicio 27 </strong></p> \n";
					define("PI", 3.14159265359 );
					$radio= 4;
					$altura= 20;
					echo "<p>Área de cilindro= " . 2*PI*$radio*($radio+$altura) . "</p>\n";
					echo "<p>Volumen de cilindro= " . PI*$altura*$radio**2 . "</p>\n";


					echo "<p><strong> Exercicio 28 </strong></p> \n";
					$numero="1512";
					echo "<p> Número incial= $numero mm </p>\n";
					echo "<p> " . substr($numero, -4, 1) . " metros " . substr($numero, -3, 1) . " decametros "  . substr($numero, -2, 1) . " centimetros " . substr($numero, -1, 1) . " milimetros " . "</p>" ;
					
					echo "<p><strong> Exercicio 29 </strong></p> \n";
					$lado=5;
					echo "<p> Area =" . $lado**2 . "</p> \n";
					echo "<p> Perimetro = " . $lado*4 . "</p> \n";

					echo "<p><strong> Exercicio 30 </strong></p> \n";
					$N=30;
					echo "<p> Resultado= " . ($N * ($N + 1) / 2) . "</p>\n" ;

					echo "<p><strong> Exercicio 31 </strong></p> \n";
					
					echo "<p> Resultado de $z + $x" . suma($z, $x) . "</p>\n" ;
					?>
                
	</body>
</html>