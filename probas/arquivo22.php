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
				<ul>
                    <?php 
                        echo "<li> Max: " . max(-19, -3, -9, -39) . "</li>\n";
						echo "<li> Max en valor absoluto: " . abs(max(-19, -3, -9, -39)) . "</li>\n";
						echo "<li> Max valor absoluto: " . max(abs(-19), abs(-3), abs(-9), abs(-39)) . "</li>\n";
                    ?>
                </ul>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>