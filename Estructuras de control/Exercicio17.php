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
                    $num = 1230;
                    $cociente = $num;
                    $rdo = 0;
                    $cadea = "";
                    while($cociente != 0) {
                        $dixito = $cociente % 10;
                        $cociente = floor($cociente / 10);
                        $rdo = ($rdo * 10) + $dixito;
                        $cadea .= $dixito;
                    }
                    echo "<ul>\n
                            <li>Número: $num</li>\n
                            <li>Inverso : $rdo</li>\n
                            <li>Inverso : $cadea</li>
                        </ul>\n"
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>