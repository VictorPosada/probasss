<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio06</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 6</p>
				<p> Dados	 dous	 números	 determinar	 se	 son amigos. Dous números son amigos se a suma	dos	divisores	de	un	deles	é	igual	ao	outro	e	viceversa.	Por	exemplo,	os	números	220	e 284	son	amigos.</p>
			</div>
			<?php
                $numero1 = 284;
                $numero2 = 220;
                $sumando1 = 0;
                $sumando2 = 0;
                for ($i = 2; $i <= $numero1; $i++) {
                    if ($numero1 % $i == 0) {
                        $sumando1 += $i;
                    };
                };
                for ($i = 2; $i <= $numero2; $i++) {
                    if ($numero2 % $i == 0) {
                        $sumando2 += $i;
                    };
                };
                if ($sumando1 == $sumando2){
                    $resultado = " son amigos";
                } else{
                    $resultado = " non son amigos";
                };
			?>
			<div class="resultado">
				<p> Los numero <?= $numero1 ?> y <?= $numero2 . $resultado ?></p>
				<p><a href="index.php">Volver al index</a></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>