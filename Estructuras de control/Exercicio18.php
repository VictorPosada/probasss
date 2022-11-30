<html>
	<head>
		<title>Exer12</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 17</h2>
		</header>
		<section>
			<article>
                    <?php 
                    $num = 155;
                    $cociente = $num;
                    $suma = 0;
                    while($cociente != 0) {
                        $dixito = $cociente % 10;
                        $cociente = floor($cociente / 10);
                        $suma = $dixito ** 3 + $suma;
                    }
                    if ($num == $suma) {
                        echo "$num é cubo perfecto";
                    } else {
                        echo "$num non é cubo perfecto ($suma)";
                    };
                    
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>