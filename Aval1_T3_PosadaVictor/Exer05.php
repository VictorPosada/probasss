<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio05</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 5</p>
				<p> Dado	 o	 día,	 mes	 e	 ano,	 determinar	 se	 é	 unha	 data	 correcta.	 Considerar	 s	 anos	bisestos	 e	 que	 o	 día,	mes	 e	 ano	 indicados	 son	 correctos.	 Por	 exemplo:	 se	 se	 indica	 o	 32	 de	xaneiro	de	2016	indicar	que	a	data	é	incorrecta	porque	se	introduciu	mal	o	día.</p>
			</div>
			<?php
            $valida = "Fecha valida";
            $dia = 30;
            $mes = 4;
            $ano = 2003;
            $bisiesto = false;
            if ((($ano % 4) == 0) && (($ano % 400) != 0)) {
                $bisiesto= true;
            }

            switch($mes){
                case '1':
                case '3':
                case '5':
                case '7':
                case '8':
                case '10':
                case '12':
                    if (($dia > 31) || ($dia < 1)){
                        $valida = "Dia incorrecto";
                    }
                    break;
                case '4':
                case '6':
                case '9':
                case '11':
                    if (($dia > 30) || ($dia < 1)){
                        $valida = "Dia incorrecto";
                    }
                    break;
                case '2':
                    if ($bisiesto) {
                        if (($dia > 28) || ($dia < 1)){
                            $valida = "Dia incorrecto";
                        }
                    } elseif (!$bisiesto){
                        if (($dia > 29) || ($dia < 1)){
                            $valida = "Dia incorrecto";
                        }
                    }
                    break;
                default : 
                    $valida = "Mes incorrecto";
            };


			?>
			<div class="resultado">
                <p>Fecha: <?= $dia . "/" . $mes . "/" . $ano?></p>
				<p><?= $valida ?></p>
                <p><a href="index.php">Volver al index</a></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>