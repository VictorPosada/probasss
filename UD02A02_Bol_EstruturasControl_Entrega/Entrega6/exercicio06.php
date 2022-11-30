<html>
	<head>
		<title>Exer06</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 6</h2>
		</header>
		<section>
			<article>
				<p>Dados dous números determinar se son amigos.</p>
				<p> 	
                    <?php
                        $num1 = 220;
						$num2 = 284;
						$suma1 = 0;
						$suma2 = 0;
				
						echo "<p>Os números son: $num1 e $num2</p>\n";
						for($i = 1; $i < $num1; $i ++){
							if ($num1 % $i == 0) {
								$suma1 += $i;
							}
						}
						for($j = 1; $j < $num2; $j++){
							if($num2 % $j == 0){
								$suma2 += $j;
							}
						}
				
						if (($suma1 == $num2) && ($suma2 == $num1)) {
							echo"<p>Os números son amigos</p>\n";
						} else {
							echo"<p>Os numeros non son amigos</p>\n";
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