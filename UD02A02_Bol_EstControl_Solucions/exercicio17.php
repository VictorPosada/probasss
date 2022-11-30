<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 17</title>
    </head>
    <body>
		<h2>Exercicio 17: Dado un número devolva o inverso do número.</h2>
		
        <?php
        $numero = 234235230;
        $cociente = abs($numero);
        $inverso = 0;
        $cadea = "";

        while ($cociente != 0) {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $inverso = ($rdo * 10) + $dixito;
        }

        if ($n < 0) {
            $inverso *= -1;
        }

        echo "<p>O inverso do número ($numero) é: " . $rdo . "</p>\n";
        
        $cociente = abs($numero);
        do {
            $dixito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $cadea .= $dixito; //$cadea = $cadea . $dixito
        } while ($cociente != 0);

        if ($n < 0) {
            $cadea = "-" . $cadea;
        }
        echo "<p>O inverso do número ($numero) é: " . $cadea . "</p>\n";
    ?>
	</body>
</html>