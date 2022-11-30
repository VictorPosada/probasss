<html>
	<head>
		<title>Exer04</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 4</h2>
		</header>
		<section>
			<article>
				<p>Puntuación obtida no lanzamento de tres dados.</p>
				<p> 	
                    <?php
                        $tirada1 = rand(1,6);
						$tirada2 = rand(1,6);
						$tirada3 = rand(1,6);
						$k = 0;
						echo "<p>Estes son os datos: $tirada1 ,$tirada2, $tirada3</p>\n";
						if ($tirada1 == 6) {
							$k++;
						}
						if ($tirada2 == 6)  {
							$k++;
						}	
						if ($tirada3 == 6){
							$k++;
						}
						switch ($k) {
							case 1 :  
								echo "<p>Bronce</p>\n"; 
								break;
							case 2 : 
								echo "<p>Prata</p>\n"; 
								break;
							case 3 : 
								echo "<p>Ouro</p>\n";
								break;
							default: 
								echo "<p>Perdeu!</p>\n";
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