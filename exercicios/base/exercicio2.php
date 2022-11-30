<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ejercicio de selectores</title>
		<link rel="stylesheet" type="text/css" href="./Base.css" media="screen" /> 	
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
		<?php 
			echo "<div class=\"enunciado\">\n",
				"\t\t\t<p class=\"titulo\">Aparece código en PHP?</p>\n",
				"\t\t\t<p class=\"titulo\" >Que tipo de código aparece?</p>\n",
				"\t\t\t<p class=\"titulo\" >Cal é a razón de que apareza a páxina escrita neste código?</p>\n",
				"\t\t</div>\n",
				"\t\t<div class=\"resultado\">\n" ,
				"\t\t\t<p>O servidor web interpreta correctamente os scripts en php</p>\n" ,
				"\t\t\t<p>Non aparece codigo en PHP</p>\n" ,
				"\t\t\t<p>So aparece codigo HTML</p>\n" ,
				"\t\t\t<p>Porque o navegador so entende HTML, e PHP e un linguaxe de servidor</p>\n" ,
			 	"\t\t</div>\n";
			?>
		</main>
		<footer>
			<p float="left" style="display:inline">Víctor Posada Soto</p>
			<p float="right" style="display:inline">14 de marzo de 2022</p>
		</footer>
	</body>
</html>
