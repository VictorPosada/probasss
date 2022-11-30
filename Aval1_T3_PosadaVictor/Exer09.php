<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Víctor Posada-Exercicio09</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
			<div class="enunciado">
				<p class="titulo" >Exercicio 9</p>
				<p>Crear un algoritmo que mostre a táboa de multiplicar completa desde o número 1 ao 10.</p>
			</div>
			<div class="resultado">
                <?php            
                    for ($i = 1; $i <= 10; $i++){
                        echo "<p>Tabla del $i</p>";
                        for ($h = 1; $h < 10; $h ++) {
                            echo "<li>$i * $h = " . ($i * $h) . "</li>";
                        }
                    }
                ?>
				<p><a href="index.php">Volver al index</a></p>
            </div>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>

			<p float="right" style="display:inline">9 de novembro de 2022</p>
		</footer>
	</body>
</html>