<html>
	<head>
		<title>Exer05</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 5</h2>
		</header>
		<section>
			<article>
				<p>Dado o día, mes e ano, determinar se é unha data correcta.</p>
				<p> 	
                    <?php
                        $dia = 29;
						$mes = 2;
						$ano = 900;
				
						if ($ano > 1){
							
							if ($mes >= 1 || $mes <= 12 ) {
								$bisiesto = (($ano%4 == 0 && $ano % 100 <> 0) || $ano % 400 == 0);
							
								if (($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) 
									&& ($dia <= 31)) {
									echo "<p>Data correcta</p>\n";
								} elseif (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && ($dia <= 30)) {
									echo "<p>Data correcta</p>\n";
								} elseif ($mes == 2 && $bisiesto && $dia <= 29) {
									echo "<p>Data correcta</p>\n";
								} elseif ($mes == 2 && !$bisiesto && $dia <= 28) {
									echo "<p>Data correcta</p>\n";
								} else {
									echo "<p>Data incorrecta</p>\n";
								}	
							} else {
								echo "<p>Data incorrecta</p>\n";
							}	
						} else {
							echo "<p>Data incorrecta</p>\n";
						}
				
						//OUTRA SOLUCIÓN
						/*
						if ($ano > 1) {
							switch ($mes) {
								case 1:
								case 3:
								case 5:
								case 7:
								case 8:
								case 10:
								case 12:
									if ($dia >= 1 && $dia <= 31) {
										echo "<p>Data correcta</p>\n";
									} else {
										echo "<p>Data incorrecta</p>\n";
									}
									break;
								case 4:
								case 6:
								case 9:
								case 11:
									if ($dia >= 1 && $dia <= 30) {
										echo "<p>Data correcta</p>\n";
									} else {
										echo "<p>Data incorrecta</p>\n";
									}
									break;
								case 2:
									$bisiesto = ($ano%4 == 0 && $ano % 100 <> 0) || $ano % 400 == 0);
									if (($dia >= 1 && $dia <= 29 && $bisiesto) || ($dia >= 1 && $dia <= 29 && !$isiesto)) {
										echo "<p>Data correcta</p>\n";
									} else {
										echo "<p>Data incorrecta</p>\n";
									}
									break;
								default:
									echo "<p>Mes incorrecto</p>\n";
							}
						} else {
							echo "<p>Ano incorrecto</p>\n";
						}
				
						*/	
                    ?>	
                </p>
			</article>
		</section>
		<footer>
			<p>IES de Teis</p>
		</footer>
	</body>
</html>