<?php
	//VERSION 1.5 DE INDEX.PHP
	if (empty($_GET['solucion'])) {
		$solucion="";
	}else{ 
		$solucion=$_GET['solucion'];
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Estilos/Estilos.css" />	
		<title>CALCULADORA</title>
	</head>
	<body >
		
		<h1>CALCULADORA</h1>
			<br>
			<br>
			<table>
				<form name='formulario' method='post' action='validar.php'>
					<tr>
						<th>Numero 1:</th>
						<th>Numero 2:</th>
					</tr>
					<tr>
						<td><input type='text' name='Num1'></td>
						<td> <input type='text' name='Num2'></td>
					</tr>
					<tr>
						<th colspan=2>Seleccione Operacion</th>
						
					</tr>
					<tr>
						<td> <input name="Operacion" type="radio" value="Suma">Suma</td>
						<td> <input name="Operacion" type="radio" value="Resta">Resta</td>
					</tr>
					<tr>
						<th colspan=2>Respuesta</th>					
					</tr>
					<tr >
						<td colspan=2> <font color=white>&#160</font><?php echo $solucion;?></td>				
					</tr>
					<tr>
						<td colspan=2><input type='submit' name='Registrar' value='Calcular'></td>
					</tr>
				</form> 
			</table>
	</body>
</html>
