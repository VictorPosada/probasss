<html>
	<head>
		<title>Exer03</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 3</h2>
		</header>
		<section>
			<article>
				<p>Dado un carácter, determinar se é unha vogal.</p>	
                    <?php
						$numeje = 3;
                        $letra = 'e';
                        $vocales = array('a', 'e', 'i', 'o', 'u');
                        if ( in_array($letra, $vocales) ) {
                            echo $letra . " é unha vogal";
                        }   else {
                            echo $letra . " é unha consoante";
                        };
						echo '<p></p>';
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