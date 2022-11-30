<html>
	<head>
		<title>Exer02</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 2</h2>
		</header>
		<section>
			<article>
				<p>Dada	un día e o número de mes, devolver a estación do ano.</p>
				<p> 	
                    <?php
                        $mes = 2;
						$dia = 28;
						echo "<p>O día $dia do mes $mes</p>\n"; 
						if (($mes >= 1 && $mes <= 12)  &&($dia >= 1 && $dia <= 31)) {
							if (($mes  == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2 && $dia  <= 28) || ($mes == 3 && $dia  <= 20)){
								echo "<p>É inverno</p>\n";
							}
							if (($mes  == 3 && $dia > 20) ||($mes == 4 && $dia  <= 30) || $mes ==5 || ($mes == 6 && $dia <= 21)) {
								echo "<p>É primaveira</p>\n";
							}
							if (($mes == 6 && $dia >= 21 && $dia <= 30)|| ($mes > 6 && $mes <= 8) || ($mes == 9 && $dia <= 22)) {
								echo "<p>É verán";
							}
							if (($mes == 9 && $dia >= 23) || ($mes == 10) || ($mes == 11 && $dia <= 30) || ($mes == 12 && $dia <= 20)) {
								echo "<p>É outono</p>\n";
							}
						} else {
							echo "<p>Non é un día correcto</p>\n";
						}		
                    ?>	
                </p>
			</article>
		</section>
		<footer>
			<p>IES de Teis</p>
		</footer>
	</body>
</html>