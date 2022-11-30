<html>
	<head>
		<title>Exer11</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 11</h2>
		</header>
		<section>
			<article>
				<p> Dado	 un	 número	 enteiro	 dun	 díxito	 (0	 ao	 9),	 devolver	 o	 mesmo	 número	expresado	en	letras.</p>	
                    <?php 
                        $numero = 2;
                        echo "Numero = $numero-";
                        if ($numero == 1) {
                            echo "Uno";
                        }   elseif ($numero == 2) {
                            echo "Dos";
                        }   elseif ($numero == 3) {
                            echo "Tres";
                        }   elseif ($numero == 4) {
                            echo "Cuatro";
                        }   elseif ($numero == 5) {
                            echo "Cinco";
                        }   elseif ($numero == 6) {
                            echo "Seis";
                        }   elseif ($numero == 7) {
                            echo "Siete";
                        }   elseif ($numero == 8) {
                            echo "Ocho";
                        }   elseif ($numero == 9) {
                            echo "Nueve";
                        }   elseif ($numero == 0) {
                            echo "Cero";
                        }   else {
                            echo "Numero no válido";
                        };
                        echo '<p></p>';
                        $numeje = 11;
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