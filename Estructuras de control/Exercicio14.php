<html>
	<head>
		<title>Exer12</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 12</h2>
		</header>
		<section>
			<article>
				<p>  Dado	 o	 número	 de	 mes,	 devolver	 o	 trimestres	 do	 ano	 que	 lle	 corresponda	
segundo	a	táboa	que	se	mostra	a	continuación.	Comproba	previamente	que	o	número	de	mes	
é	un	valor	entre	1	e	12.	Facer	o	algoritmo	empregando	a	estrutura	switch.</p>	
                    <?php 
                    $rangoI = 43;
                    $rangoS = 90;
                    $cont = 0;
                    $numeroI = $rangoI;
                    while($numeroI <= $rangoS) {
                        if ($rangoI % 2 ==0 ) {
                            $cont++;
                        }
                        $rangoI++;
                    }
                    echo "<p> Numero de pares entre $rangoI e $rangoS e: $cont</p>";
                    ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>