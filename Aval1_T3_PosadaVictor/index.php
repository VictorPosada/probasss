<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Index Aval1-T3</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Estructuras de control</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Boletín de entrega</p>
				<p>Exercicios:</p>
				<?php
					for ($i = 1; $i <= 9; $i++) {
						echo "<a href='Exer0" . $i . ".php'> Exercicio0" . $i . "</a></br>";
					}
				?>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>