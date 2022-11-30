<html>
	<head>
		<title>Exer21</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 21</h2>
		</header>
		<section>
			<article>
                    <?php
                        $numero = 14;
                        $cont = 0;
                        for ($i = 2; $i < $numero; $i++) {
                            if ($numero % $i == 0) {
                                $cont++;
                            };
                        };
                        if ($cont == 0) {
                            echo "$numero es primo";
                        } else {
                            echo "$numero no es primo";
                        }

                        $numero = 11;
                        $primo = true;
                        for ($i = 2; $i < $numero; $i++) {
                            if ($numero % $i == 0) {
                                $primo = false;
                                break;
                            }
                        }
                        if ($primo) {
                            echo "$numero es primo";
                        } else {
                            echo "$numero no es primo";
                        }

                        $i = 2;
                        $primo = true;
                        $numero = 11;
                        do {                      
                            if ($numero % $i == 0) {
                                    $primo = false;
                            }
                            $i++;
                        } while ($primo && ($i < $numero));

                        if ($primo) {
                            echo "$numero es primo";
                        } else {
                            echo "$numero no es primo";
                        }
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html> 