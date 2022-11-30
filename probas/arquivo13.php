<?php
$a = 1;
$b = 2;

function Suma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];   
}
Suma();
?>
<html>
	<head>
		<title>Exer01</title>
		<link href="base.css" rel="stylesheet" type="text/css"/>
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
                    <?= $b?>	
                </p>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>
