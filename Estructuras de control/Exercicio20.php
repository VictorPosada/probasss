<html>
	<head>
		<title>Exer20</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 20</h2>
		</header>
		<section>
			<article>
                    <?php
                        $rangoI= 20;
                        $rangoS= 60;
                        $multi = 4;
                        $cont = 0;
                        for ($i = $rangoI; $i <= $rangoS; $i++) {
                            if ($i % 4 == 0) {
                                $cont++;
                            };
                        };
                        echo "<p>Multiplo: $multi</p>\n";
                        echo "<p>Inicio: $rangoI</p>\n";
                        echo "<p>Fin: $rangoS</p>\n";
                        echo "<p>Total: $cont</p>\n";
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html> 