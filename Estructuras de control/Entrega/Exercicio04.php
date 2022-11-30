<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio04</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 4</p>
				<p>  Deseña	un	algoritmo	que	avalíe	a	puntuación	obtida	no	lanzamento	de	tres dado en	base	a	cantidade	de	seis	obtidos,	de	acordo	ao	seguinte:</p>
			</div>
			<?php
            $cont = 0;
            for ($i = 1; $i <= 3; $i++) {
                $dado = rand(0, 6);
                if ($dado == 6) {
                    $cont++;
                };
            };
            switch($cont){
                case '0':
                    $prezo = "Perdeu";
                    break;
                case '1':
                    $prezo = "Bronce";
                    break;
                case '2':
                    $prezo = "Prata";
                    break;
                case '3':
                    $prezo = "Ouro";
                    break;
            }
			?>
			<div class="resultado">
				<p>Resultado <?= $prezo ?> </p>

			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>