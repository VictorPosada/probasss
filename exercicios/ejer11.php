<html>
	<head>
		<title>Exer01</title>
		<link href="base.css" rel="stylesheet" type="text/css"/>
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
                        echo $_SERVER['SERVER_NAME'];
                        echo "<br>"; 
                        echo $_SERVER['SERVER_ADDR'];
                        echo "<br>";
                        echo $_SERVER['DOCUMENT_ROOT'];
                        echo "<br>";
                        echo $_SERVER['SERVER_PORT'];
                        echo "<br>";
                        echo $_SERVER['PHP_SELF'];
                        echo "<br>";
                        echo $_SERVER['REMOTE_ADDR'];
                        echo "<br>";
                        echo $_SERVER['REMOTE_PORT'];
                    ?>
                </p>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>