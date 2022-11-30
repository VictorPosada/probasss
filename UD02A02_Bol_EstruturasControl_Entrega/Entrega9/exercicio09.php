<html>
	<head>
		<title>Exer09</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 9</h2>
		</header>
		<section>
			<article>
				<p>Táboa de multiplicar completa desde o número 1 ao 10.</p>
				<p> 	
                    <?php
                        for ($i = 1; $i <= 10; $i++) {
							for ($j = 1; $j <= 10; $j++) {
								$res = $i * $j;
								echo "<p>$i * $j = $res</p>\n";
							}
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