<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio08</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 8</p>
				<p>Crear un algoritmo que indique se un número é perfecto ou non. Dise que un número é perfecto se a suma dos seus divisores é igual ao número</p>
			</div>
			<?php
				$numero = rand(0, 9);
				$suma = 0;
				$resultado= "";
                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i == 0) {
                        $suma = $suma + $i;
                    };
                };
				if ($numero == $suma) {
					$resultado = " e perfecto";
				} else {~
					$resultado = " non e perfecto";
				};
			?>
			<div class="resultado">
				<p> O numero <?= $numero . $resultado?></p>
				<p> a suma dos seus divisores e <?= $suma ?>
				<p><a href="index.php">Volver al index</a></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>