<html>
    <head>
        <meta charset="UTF-8">
        <title>Exer 20</title>
    </head>
    <body>
		<h2>Exercicio 20: Dado un número M e un rango, atopar cantos
		múltiplos de M hai no rango de números enteiros.</h2>
		
        <?php
	    $rangoI = 1;
	    $rangoS = 12;
	    $valor = 4;
	    $cont = 0;

	    //Alternativa 1: empregamos rangoI como variable de control do bucle
	    for ( ; $rangoI <= $rangoS; $rangoI++) {
	        if ($rangoI % $valor == 0) {
	            $cont++;
	        }
	    }
	    echo "O número de múltiplos de $valor é: " . $cont;


	    //Alternativa 2: comprobamos que rangoI sexa inferior a rangoS para contar os múltiplos

	    /*//Devolve que o rango non é correcto
	        $rangoI = -50;
	        $rangoS = 30;
	        */
	        /*//Devolve que o rango non é correcto
	        $rangoI = 50;
	        $rangoS = 30;
	        */
	        /*
	        $rangoI = 20;
	        $rangoS = 30;
	        */
	        $multi = 5;
	        $multiplos = 0;
	        
	        if (($rangoI < $rangoS) && ($rangoI >= 0) && ($multi > 1)) {
	            for ($i = $rangoI; $i <= $rangoS; $i++) {
	                if ($i % $multi == 0) {
	                    $multiplos++;
	                }
	            }
	            echo "O número de múltiplos de $multi entre $rangoI e $rangoS son: $multiplos";
	        } else {
	            echo "O rango indicado non é correcto.";
	        }

    ?>
	</body>
</html>