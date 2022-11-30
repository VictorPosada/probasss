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
				<p>Enunciado exercicio.</p>
				<p> 	
                    <?php
                    $nomeUser = 'Manuel';
                    define("AULA", 25);
                    const ANDAR = 'primeiro';
                    print "O alumno $nomeUser está na aula AULA que está no andar ANDAR </br>";
                    print "O alumno $nomeUser está na aula AULA que está no andar ANDAR \n</br>\n";
                    print "O alumno $nomeUser está na aula " . AULA .  " que está no andar " . ANDAR . "\n</br>\n";
                    ?>	
                </p>
			</article>
		</section>
		<footer>
			<p>IES de Teis</p>
		</footer>
	</body>
</html>