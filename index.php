<?php
	if (empty($_GET['solucion'])) {
		$solucion="";
	}else{ 
		$solucion=$_GET['solucion'];
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>EJERCICIO CALCULADORA HERENCIA</title>
	</head>
	<body >
		
		<center><font face="Verdana, Geneva, sans-serif" size="+3" style="font-weight:bold">Calculadora con Herencia</font>
			<br>
			<font face="Verdana, Geneva, sans-serif" color="#FF0000"></font>
			<br>
			<table  frame ="box" style="width:35%">
				<form name='formulario con herencia' method='post' action='validar.php'>
					<tr>
						<td align="left" colspan=2 >Numero 1:</td>
						<td align="Left" colspan=2  >Numero 2:</td>
					</tr>
					<tr>
						<td colspan=2><input type='text' name='Num1'></td>
						<td colspan=2> <input type='text' name='Num2'></td>
					</tr>
					<tr>
						<td align="left">Seleccione Operacion</td>
						
					</tr>
					<tr>
						<td width="25%" > <input name="Operacion" type="radio" value="Suma">Suma</td>
						<td width="25%" > <input name="Operacion" type="radio" value="Resta">Resta</td>
					</tr>
					<tr>
						<td align="left">Respuesta</td>					
					</tr>
					<tr >
						<td style="outline: thin solid"> <font color=white>&#160</font><?php echo $solucion;?></td>				
					</tr>
 
						<tr>
						<td align="center" colspan=4><input type='submit' name='Registrar' value='Calcular'></td>
					</tr>
				</form> 
			</table>
		</center>
	</body>
</html>
