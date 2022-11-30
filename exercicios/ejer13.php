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
                        $var2 = 10 ;
                        $tipo = gettype($var2);
                        echo "<p>Segunda variable: $var2</p>";
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
                        $var3 = 5.2 ;
                        $tipo = gettype($var3);
                        echo "<p>Tercera variable: $var3</p>";
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
                        $var4 = "Hola mundo";
                        $tipo = gettype($var4);
                        echo "<p>Cuarta variable: $var4</p>";
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
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>