<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio16</title>
</head>
<body>
	<h1>Exercicio 16</h1>
	<?php
		$numero = 345875;
		$cociente = abs($numero);
		$pares = 0;
		$maior = 0;
		$total = 0;

		while ($cociente != 0) {
			$dixito = $cociente % 10;
			$cociente = floor($cociente / 10);
			$total++;
			if ($dixito % 2 == 0) {
				$pares++;
			}
			if ($dixito > $maior) {
				$maior = $dixito;
			}
		}

		echo "\t\t<ul>\n 
        \t\t\t<li>Número de díxitos: $contDix</li>\n
        \t\t\t<li>Número de pares: $contPares</li>\n
        \t\t\t<li>Número maior: $maior</li>\n
        \t\t</ul>\n";
		
	?>
</body>
</html>