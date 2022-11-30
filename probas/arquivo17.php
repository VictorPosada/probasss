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
                        $miv = "5";
                        $tipo = gettype($miv);
                        echo "<p>Valor $miv Tipo $tipo</p>";
                        settype($miv, 'int');
                        $tipo = gettype($miv);
                        echo "<p>Valor $miv Tipo $tipo</p>";

                        if (is_numeric($miv)) {
                            echo "Variable numerica tipo $tipo";
                        }    else {
                            echo "Variable no numerica $tipo";                   
                        }
                    ?>
                </p>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>