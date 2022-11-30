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
				<p>  Dado	 o	 número	 de	 mes,	 devolver	 o	 trimestres	 do	 ano	 que	 lle	 corresponda	
segundo	a	táboa	que	se	mostra	a	continuación.	Comproba	previamente	que	o	número	de	mes	
é	un	valor	entre	1	e	12.	Facer	o	algoritmo	empregando	a	estrutura	switch.</p>	
                    <?php 
                        $numero = 5;
                        echo "Mes numero $numero pertenece al ";
                        if (($numero == 1) or ($numero == 2) or ($numero == 3)) {
                            echo "1ºTrimestre";
                        }   elseif ($numero == 4 or $numero == 5 or $numero == 6) {
                            echo "2ºTrimestre";
                        }   elseif ($numero == 7 or $numero == 8 or $numero == 9) {
                            echo "3ºTrimestre";
                        }   elseif ($numero == 10 or $numero == 11 or $numero == 12) {
                            echo "4ºTrimestre";
                        }   else {
                            echo "Número no valido";
                        };
                        echo '<p></p>';
                        $numeje = 12;
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