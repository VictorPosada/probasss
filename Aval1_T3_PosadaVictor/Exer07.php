<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio07</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 7</p>
				<p>	Determinar	se	un	número	é	capicúa	ou	non.</p>
			</div>
			<?php
                $num = 1331;
                $cociente = $num;
                $rdo = 0;
                $cadea = "";
                while($cociente != 0) {
                    $dixito = $cociente % 10;
                    $cociente = floor($cociente / 10);
                    $rdo = ($rdo * 10) + $dixito;
                    $cadea .= $dixito;
                }
                if ($cadea == $num){
                    $resultado = " é capicua";
                } else {
                    $resultado = " non é capicua";
                };

			?>
			<div class="resultado">
				<p> O numero <?= $num . $resultado?></p>
				<p><a href="index.php">Volver al index</a></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>