<html>
	<head>
		<title>Exer13</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 13</h2>
		</header>
		<section>
			<article>
				<p> Dado	o	número	do	mes	e	o	ano	(catro	díxitos)	dunha	data,	determinar	en	letras	
que	mes	é	e	cantos	días	ten.	Considerar	que	febreiro	ten	28	ou	29	días	se	o	ano	é	bisesto.	Un	
ano	é	bisesto	se	é	múltiplo	de	4,	pero	non	de	100,	e	si	de	400.	Facer	o	algoritmo	empregando	a	
estrutura	switch.</p>	
                <?php
                    $mes = 2;
                    $año = 2022 ;   
                    switch($mes) {
                    case 1:
                    echo "<p>Enerto tiene 31 dias</p>";
                    case 2:
                    echo "<p>Febrero tiene $feb dias</p>";
                    case 3:
                    echo "<p>Marzo tiene 31 dias</p>";
                    case 4:
                    echo "<p>Abril tiene 30 dias</p>";
                    case 5:
                    echo "<p>Mayo tiene 31 dias</p>";
                    case 6:
                    echo "<p>Junio tiene 30 dias</p>";
                    case 7:
                    echo "<p>Julio tiene 31 dias</p>";
                    case 8:
                    echo "<p>Agosto tiene 31 dias</p>";    
                    case 9:
                    echo "<p>Septiembre tiene 30 dias</p>";    
                    case 10:
                    echo "<p>Octubre tiene 31 dias</p>";
                    case 11:
                    echo "<p>Noviembre tiene 30 dias</p>"; 
                    case 12:
                    echo "<p>Diciembre tiene 31 dias</p>";    
                    }
                ?>
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>