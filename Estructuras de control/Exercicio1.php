<html>
	<head>
		<title>Exer01</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 1</h2>
		</header>
		<section>
			<article>
				<p>Dados dous números enteiros diferentes, devolver o número maior.</p>	
                    <?php 
                        $a = 4;
                        $b = 5;
                        echo "Numero maior entre $a e $b é ";
                        echo max($a, $b);
						echo '<p></p>';
						$numeje = 1;
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