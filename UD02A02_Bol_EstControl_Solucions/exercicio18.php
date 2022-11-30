<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 18</title>
    </head>
    <body>
		<h2>Exercicio 18: crear un algoritmo que indique se un número é un
		cubo perfecto ou non.</h2>
		
        <?php
        $numero = 27;
        $cociente = $numero;
        $rdo = 0;

        //Alternativa 1
        while ($cociente != 0) {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $rdo += $dixito ** 3;
        }

        echo "<p>O cubo de ($numero) é: " . $rdo . "</p>\n";
        if ($rdo == $numero) {
            echo "<p>O número $numero é cubo perfecto</p>\n";
        } else {
            echo "<p>O número $numero NON é cubo perfecto</p>\n";
        }
        

        //Alternativa 2
        $cociente = $numero;
        $rdo = 0;
        do {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $rdo += $dixito ** 3;
        } while ($cociente != 0);

        echo "<p>O cubo de ($numero) é: " . $rdo . "</p>\n";
        if ($rdo == $numero) {
            echo "<p>O número $numero é cubo perfecto</p>\n";
        } else {
            echo "<p>O número $numero NON é cubo perfecto</p>\n";
        }
    	?>
	</body>
</html>