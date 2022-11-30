<html>
	<head>
		<title>Exer16</title>
		<link href="base.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>			
		<header>
			<h1>Módulo de IAW<h1>
            <h2>Operadores</h2>
		</header>
		<section>
			<article>
				<p></p>
				<p> 	
                    <?php 
                        $num= rand(1,10);
                        echo(($num % 2) == 0)?("<p>Par</p>"):("<p> Impar </p>");
                        if ($num >= 9){
                            echo "<p> Sobresaliente </p>";
                        }   elseif ($num >= 7) {
                            echo "<p> Notable </p>";
                        }   elseif ($num >= 5) {
                            echo "<p> Bien </p>";
                        }

    
                        echo $num
                    ?>
                </p>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>