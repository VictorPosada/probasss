<html>
	<head>
		<title>Exer01</title>
		<link href="estilos.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 1</h2>
		</header>
		<section>
			<article>
				<p>Atopar a hora do	seguinte segundo.</p>
				<p> 	
                    <?php
                       $horas = 23;
					   $minutos = 59;
					   $segundos = 59;
					   echo "Dada a hora $horas h $minutos min $segundos seg </BR>";
					   if (($horas >= 0 && $horas <= 23) 
						   && ($minutos >= 0 && $minutos <= 59) 
						   && ($segundos >= 0 && $segundos <= 59  )) {
						   $segundos++;		
						   if ($segundos == 59) {
							   $segundos = 0;
							   $minutos++;
						   }
						   if ($minutos == 60) {
							   $minutos = 0;
							   $horas++;
						   }
						   if ($horas == 24) {
							   $horas = 0;
						   }
						   echo "<p>O seguinte sg corresponde coa hora: $horas h $minutos min $segundos seg</p>\n";
					   } else {
						   echo "<p>ERRO: Non se pode realizar o cálculo -> A hora é incorrecta</p>\n";	
					   }	
                    ?>	
                </p>
			</article>
		</section>
		<footer>
			<p>IES de Teis</p>
		</footer>
	</body>
</html>