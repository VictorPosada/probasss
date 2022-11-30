<html>
	<head>
		<title>Exer10</title>
	</head>
	<body>			
		<header>
			<h1>Estructuras de control<h1>
            <h2>Exercicio 10</h2>
		</header>
		<section>
			<article>
				<p>Un	 negocio	 ten	 dous	 tipos	 de	 cliente:	 cliente	 xeral	 (X)	 e	 cliente	 afiliado	 (A).	
Acepta	 dúas	 formas	 de	 pago:	 ao	 contado	 (C)	 e	 en	 prazos	 (P).	 Crea	 un	 scripts	 que	 dada	 a	
Boletín de prácticas
Bol.	Estruturas	Control - IES	Teis
cantidade	da	compra	se	obteña	a	cantidade	do	desconto	ou	a	cantidade	do	recargo	e	o	total	a	
pagar	segundo	a	seguinte	táboa:</p>		
                    <?php 
                        $precio= 200;
                        $cliente= 'A';
                        if ($cliente == 'A') {
                            $descuento = 0.2;
                            $prazo = 0.05;
                            echo "Cliente Afiliado. ";
                            echo "Para un porducto de ${precio}€ tiene un descuento de " . $precio * $descuento .
                            "€ , precio final = " . $precio - $precio * $descuento . "€ o pago en prazos será de "
                            . $precio * $prazo . "€ por prazo";
                        }   else {
                            $descuento = 0.15;
                            $prazo = 0.1;
                            echo "Cliente General. ";
                            echo "Para un porducto de ${precio}€ tiene un descuento de " . $precio * $descuento .
                            "€ , precio final = " . $precio - $precio * $descuento . "€ o pago en prazos será de "
                            . $precio * $prazo . "€ por prazo";
                        };
                        echo '<p></p>';
                        $numeje = 10;
						echo '<a href=Exercicio' . ($numeje - 1) . '.php>Prev </a>';
						echo '<a href=Exercicio' . ($numeje + 1) . '.php>Next </a>';
                        
                        $tipo='X';
                        $pago='P';
                        $compra=200;
                        //$tipo = strtolower($tipo);
                        switch(strtolower($tipo)) {
                            case 'x':
                                switch(strtoupper($pago)){
                                    case 'C':
                                        $compra = $compra - ($compra * 0.15);
                                        break;
                                    case 'P':
                                        $compra = $compra + ($compra * 0.10);
                                        break;
                                }
                                break;
                            case 'a':
                                switch(strtoupper($pago)){
                                    case 'C':
                                        $compra = $compra - ($compra * 0.20);
                                        break;
                                    case 'P':
                                        $compra = $compra + ($compra * 0.05);
                                        break;
                                }
                                break;
                            }
                        echo $compra;
                    ?>
                
                    
			</article>
		</section>
		<footer>
            <p>&copy; IES de Teis</p>
		</footer>
	</body>
</html>