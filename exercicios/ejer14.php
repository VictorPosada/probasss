<html>
	<head>
		<title>Exer14</title>
		<link href="base.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Exercicio 14</h2>
		</header>
		<section>
			<article>
				<p>Enunciado exercicio.</p>
				<p> 	
                    <?php 
                        $var1 = true ;
                        $tipo = gettype($var1);
                        echo "<p>Primera variable: $var1</p>";
                        echo "<p>Tipo: $tipo</p>";
                        if (is_numeric($var1)) {
                            echo "<p>Tipo numerico</p>";
                        } else {
                            echo "<p>Tipo no numerico</p>";                   
                        };
                        if (is_scalar($var1)) {
                            echo "<p>Tipo escalable</p>";
                        } else {
                            echo "<p>Tipo no escalable</p>";                   
                        };

                        settype($var1, 'string');
                        $tipo = gettype($var1);
                        echo "<p>Variable modificada: $var1</p>";
                        echo "<p>Tipo: $tipo</p>";
                        if (is_numeric($var1)) {
                            echo "<p>Tipo numerico</p>";
                        } else {
                            echo "<p>Tipo no numerico</p>";                   
                        };
                        if (is_scalar($var1)) {
                            echo "<p>Tipo escalable</p>";
                        } else {
                            echo "<p>Tipo no escalable</p>";                   
                        };
                    ?>
                </p>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>