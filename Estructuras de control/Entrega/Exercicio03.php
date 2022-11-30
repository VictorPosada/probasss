<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio03</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 3</p>
				<p> Unha	empresa	estableceu	diferentes	prezos	para	o	seus	produtos,	segundo	a	súa	calidade:</p>
			</div>
			<?php
            $tipo = 1;
            $calidade = 1;
				switch($tipo) {
                    case 1:
                        switch($calidade){
                            case '1':
                                $prezo = 5000;
                                break;
                            case '2':
                                $prezo = 4500;
                                break;
                            case '3':
                                $prezo = 4000;
                                break;
                        }
                        break;
                    case 2:
                            switch($calidade){
                                case '1':
                                    $prezo = 4500;
                                    break;
                                case '2':
                                    $prezo = 4000;
                                    break;
                                case '3':
                                    $prezo = 3500;
                                    break;
                            }
                            break;
                    case 3:
                            switch($calidade){
                                case '1':
                                    $prezo = 4000;
                                    break;
                                case '2':
                                    $prezo = 3500;
                                    break;
                                case '3':
                                    $prezo = 3000;
                                    break;
                            }
                            break;
                    }
			?>
			<div class="resultado">
				<p>Tipo: <?= $tipo ?> </p>
                <p>Calidad: <?= $calidade ?></p>
                <p>Prezo: <?= $prezo ?></p>
			</div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>