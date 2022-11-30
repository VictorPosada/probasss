<?php
    include "arquivo11_include.php";
?>	
<html>
	<head>
		<title>Exer01</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 1</h2>
		</header>
		<section>
			<article>
				<p>Enunciado exercicio.</p>
				<p> 	
                Primer valor <?= $num ?>
                </p>
                <?php $num = $num + 1?>
                <p> 
                Segundo valor <?= $num ?>
                </p>
			</article>
		</section>
		<footer>
			<p>IES de Teis</p>
		</footer>
	</body>
</html>