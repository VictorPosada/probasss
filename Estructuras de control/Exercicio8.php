<html>
	<head>
		<title>Exer08</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            
			<h2>Exercicio 8</h2>
		</header>
		<section>
			<article>
				<p>Dados 3 números enteiros, devolver o número maior.</p>	
                    <?php 
                        $cuenta = 100;
                        if ($cuenta <= 100) {
                            echo "Precio final " . $cuenta - ($cuenta * 0.1) + $cuenta * 0.19;
                        }   else {
                            echo "Precio final " . $cuenta - ($cuenta * 0.2) + $cuenta * 0.19;
                        };
						echo '<p></p>';
                        $numeje = 8;
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