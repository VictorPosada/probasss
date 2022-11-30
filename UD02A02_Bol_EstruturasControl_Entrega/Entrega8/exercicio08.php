<html>
	<head>
		<title>Exer08</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 8</h2>
		</header>
		<section>
			<article>
				<p>Indicar se un número é perfecto ou non.</p>
				<p> 	
                    <?php
                        $num=6;
						$suma=0;
				
						echo "<p>O número é $num</p>\n";
						for ($i = 1; $i < $num; $i++) {
							if ($num % $i == 0){
								$suma += $i;	
							}
						}
						if ($suma == $num) {
							echo "<p>O número é perfecto</p>\n";
						} else {
							echo "<p>O número non é perfecto</p>\n";
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