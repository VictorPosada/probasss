<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 19</title>
    </head>
    <body>
		<h2>Exercicio 19: Dado un número N, obter a suma de pares e impares
		dos primeiros N números enteiros positivos.</h2>
		
        <?php
        $numero = 51;
        $contP = 0;
        $contI = 0;
        
        //Con isto contamos o número de pares e o número de impares que hai entre 1 e o numero
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $contP++;
            } else {
                $contI++;
            }
        }
    ?>
    <ul>
        <li>Nº de pares: <?= $contP?></li>
        <li>Nº de impares: <?= $contI?></li>
    </ul>

    <?php
        $pares = 0;
        $impares = 0;
        
        /*
        Con esta alternativa, facemos comprobacións previas para asegurarnos que o valor de n é un número e é maior que 0
        Nesta ocasión, ceñímonos ao enunciado e devolvemos a suma dos números pares por un lado, e a suma dos números impares por outro.
        */
        if (is_numeric($n) && $n > 0) {
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                    $pares += $i; //$pares = $pares + $i
                } else {
                    $impares += $i;
                }
            }
            echo "O suma dos pares ata $n é: $pares</br>";
            echo "O suma dos impares ata $n é: $impares</br>";
        } else {
            echo "Non se pode facer a operación pois o valor introducido non é un número ou se o é non é positivo ou > que 0";
        }

    ?>
	</body>
</html>