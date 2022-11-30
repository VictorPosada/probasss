<html>
	<head>
		<title>Exer03</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 3</h2>
		</header>
		<section>
			<article>
				<p>Script que devolva o prezo a pagar para un produto e unha calidade dada.</p>
				<p> 	
                    <?php
                        $produto = 3;
						$calidade = 2;
						switch ($produto) {
							case 1 : 
								switch ($calidade) {
									case 1: 
										echo "5000";
										break;
									case 2: 
										echo "4500";
										break;
									case 3: 
										echo "4000";
								}
								break;
							case 2 : 
								switch ($calidade) {
									case 1: 
										echo "4500";
										break;
									case 2: 
										
										echo "4000";
										break;
									case 3: echo "3500";
								}
								break;
							case 3 : 
								switch ($calidade) {
									case 1: 
										echo "4000";
										break;
									case 2: 
										echo "3500";
										break;
									case 3: 
										echo "3000";
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