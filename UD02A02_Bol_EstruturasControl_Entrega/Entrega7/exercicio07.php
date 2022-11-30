<html>
	<head>
		<title>Exer07</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 7</h2>
		</header>
		<section>
			<article>
				<p>	Determinar se un número é capicúa ou non.</p>
				<p> 	
                    <?php
                        $valor = 12322321;
						$numinv = 0;
						$cociente = $valor;
						
						while ($cociente != 0) {
							$resto = $cociente % 10;
							$numinv = $numinv * 10 + $resto;
							$cociente = (int)($cociente / 10);
						}
						if ($valor == $numinv) {
							echo "<p>O número $valor é capicúa</p>\n";
						} else {
							echo "<p>O número $valor non é capicúa</p>\n";
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