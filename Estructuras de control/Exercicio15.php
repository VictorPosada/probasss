<html>
	<head>
		<title>Exer12</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 12</h2>
		</header>
		<section>
			<article>
                    <?php 
                    $cociente = 111222333444555666777888999;
                    $contDix = 0;
                    $contPares = 0;
                    $maior = 0;
                    while($cociente != 0) {
                        $dixito = $cociente % 10;
                        $cociente = floor($cociente / 10);
                        $contDix++;
                        if ($dixito % 2 == 0){
                            $contPares++;
                        }
                        if ($dixito > $maior) {
                            $maior = $dixito;
                        }
                    }
                    echo "<ul>\n
                            <li>Número de díxitos: $contDix</li>\n
                            <li>Número de pares: $contPares</li>\n
                            <li>Número maior: $maior</li>\n
                        </ul>\n"
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>