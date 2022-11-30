<html>
	<head>
		<title>Exer05</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 5</h2>
		</header>
		<section>
			<article>
				<p>Determinar se un número enteiro é par ou impar.</p>	
                    <?php 
                        $numero = 11;
                        if (($numero % 2) == 0) {
                            echo "$numero é par";
                        } else {
                            echo "$numero é impar";
                        };
						echo '<p></p>';
						$numeje = 5;
						echo '<a href=Exercicio' . ($numeje - 1) . '.php>Prev </a>';
						echo '<a href=Exercicio' . ($numeje + 1) . '.php>Next </a>';
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>