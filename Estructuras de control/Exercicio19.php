<html>
	<head>
		<title>Exer19</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 19</h2>
		</header>
		<section>
			<article>
                    <?php
                        $numero = 50;
                        $contP = 0;
                        $contI = 0;
                        for ($i = 1; $i <= $numero; $i++) {
                            if ($i % 2 == 0) {
                                $contP++;
                            } else {
                                $contI++;
                            }
                        };
                        echo "<p>Numero: $numero</p>\n";
                        echo "<p>Pares: $contP</p>\n";
                        echo "<p>Impares: $contI</p>\n";
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html> 