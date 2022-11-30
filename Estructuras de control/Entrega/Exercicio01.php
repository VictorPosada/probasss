<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio01</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 1</p>
				<p>Dada a hora, minuto e segundo, atopar a hora do seguinte segundo.</p>
			</div>
			<?php
				$segundo = 39;
				$minuto = 58;
				$hora = 23;
				$segundos = $segundo;
				$minutos = $minuto;
				$horas = $hora;

				if (($segundo + 1) == 60) {
					$segundo = 0;
					$minuto++;
				}

				if ($minuto == 60) {
					$minuto = 0;
					$hora++;
				}

				if ($hora == 24) {
					$hora = 0;
				}
			?>
			<div class="resultado">
				<p class="titulo">Resultado</p>
				<p>Hora inicial= <?= $horas . ":" . $minutos . ":" . $segundos ?></p>
				<p>Hora final= <?= $hora . ":" . $minuto . ":" . $segundo ?></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>