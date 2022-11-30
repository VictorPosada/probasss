<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio02</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 2</p>
				<p>Dada un día e o número de mes, devolver a estación do ano de acordo á seguinte taboa:</p>
			</div>
			<?php
				$dia = 3;
				$mes = 12;
				$fecha = ($mes * 100) + $dia;
				$estacion = "";

				if (($fecha >= 1221) || ($fecha <= 320)){
					$estacion = "Inverno";
					} elseif (($fecha >= 321) && ($fecha <= 621)) {
						$estacion = "Primavera";
					} elseif (($fecha >= 622) && ($fecha <= 922)) {
						$estacion = "Verán";
					} else{
						$estacion = "Outono";
					};
			?>
			<div class="resultado">
				<p class="titulo">Resultado</p>
				<p>Fecha <?= $dia . "/" . $mes?></p>
				<p>Estación: <?= $estacion?></p>
				<p><a href="index.php">Volver al index</a></p>

			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>