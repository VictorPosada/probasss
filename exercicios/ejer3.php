<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ejercicio de selectores</title>
	</head>
	<body>
		<header>
			<h1>Módulo IAW</h1>
		</header>
		<main>
            <?php echo"<table border='1'>
				<thead>
					<tr>
						<th rowspan='2'>HORARIO</th>
						<th colspan='5'>2º ASIR</th>
					</tr>
					<tr>
						<th scope='col'>Lunes</th>
						<th scope='col'>Martes</th>
						<th scope='col'>Miercoles</th>
						<th scope='col'>Jueves</th>
                        <th scope='col'>Viernes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope='row'>08:10-09:00</th>
						<td rowspan='2'>ASXBD</td>
						<td rowspan='3'>SRI</td>
						<td rowspan='2'>SAD</td>
						<td rowspan='3'>ASO</td>
                        <td rowspan='3'>ASO</td>
					</tr>
					<tr>
						<th scope='row'>09:00-09:50</th>
					</tr>
					<tr>
						<th scope='row'>09:50-10:40</th>
						<td rowspan='2'>ASO</td>
						<td rowspan='2'>IAW</td>
					</tr>
					<tr>
						<th scope='row'>10:40-11:30</th>
						<td>ASO</td>
						<td>IAW</td>
						<td>ASXBD</td>
					</tr>
                    <tr>
						<th scope='row'>11:30-12:00</th>
						<td colspan='5'>RECREO</td>
					</tr>
                    <tr>
						<th scope='row'>12:00-12:50</th>
						<td>EIE</td>
						<td>ASO</td>
						<td>IAW</td>
						<td>IAW</td>
                        <td>ASXBD</td>
					</tr>
                    <tr>
						<th scope='row'>12:50-13:40</th>
						<td rowspan='3'>SRI</td>
						<td rowspan='2'>EIE</td>
						<td rowspan='2'>SRI</td>
						<td rowspan='2'>SAD</td>
                        <td rowspan='2'>IAW</td>
					</tr>
                    <tr>
						<th scope='row'>13:40-14:30</th>
					</tr>
                    <tr>
						<th scope='row'>14:30-15:20</th>
					</tr>
				</tbody>
			</table>";
            ?>
		</main>
		<footer>
        </footer>
	</body>
</html>
