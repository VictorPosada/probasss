<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio15</title>
</head>
<body>
	<h1>Exercicio 15</h1>
	<?php
		$numero = 35;
		$multiplos = 0;
        
        //Alternativa 1
        /*
        $i = 1;

        while($i <= $numeroN) {
            if ($i % 5 == 0) {
                $multiplos++;
            }
            $i++;
        }
        echo "<p>O número de múltiplos ata $numeroN é: $multiplos</p>\n";
        */

        //Alternativa 2
        $i = 0;

        while($i <= $numeroN) {
            $multiplos++;
            $i += 5;
        }
        $multiplos--;
        echo "<p>O número de múltiplos ata $numeroN é: $multiplos</p>\n";

        //Alternativa 3
        /*for ($i = 1; $i <= $numero; $i++) {
			if ($i % 5 == 0) {
				$multiplos++;
			}
		}

		echo "O número de múltiplos ata o valor $numero é $multiplos";*/
		
	?>
</body>
</html>