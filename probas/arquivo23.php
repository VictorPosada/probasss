<!DOCTYPE html>
<html lang="en">
<head>
	<link href="base.css" rel="stylesheet" type="text/css"/>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$var = true;
		$num1 = 32;
		$num2 = 2;
		echo "<p>" . (($num1 == $num2)?(3 + 3):(2 + 2)) . "</p>";

		$a = 5;
		++$a ;
		echo "<p>$a</p>\n";
	?>
</body>
</html>