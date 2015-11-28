<?php
	//VERSION 1.5 VALIDAR.PHP
	//recibe los parametros
	//del formulario en la pagina index.php
	$Goperacion=$_POST['Operacion'];
	$Gnumero1=$_POST['Num1'];
	$Gnumero2=$_POST['Num2'];


	class Operaciones{//
		//Declararemos los miembros de
		//la clase Operaciones, los podemos declarar
		//como Public o Protected
		public $operacion;
		public $respuesta;
			
		public function imprimir(){
			echo $this->respuesta;
		}
		//Funcion que calcula la suma y
		//retorna el resultado
		public function suma($numero1,$numero2){
			$this->num1 = $numero1;
			$this->num2 = $numero2;
			$respuesta=$numero1+$numero2;
			return $respuesta;
				
		}
		//Funcion que calcula la resta y
		//retorna el resultado
		public function resta($numero1,$numero2){
			$respuesta=$numero1-$numero2;
			return $respuesta;
		}
		//Funcion que calcula la multiplicacion y
		//retorna el resultado	
		public function multiplicacion($numero1,$numero2){
			$respuesta=$numero1*$numero2;
			return $respuesta;
		}

	}
	//se crea una clase ejemplo que hereda
	//las operaciones de la clase Operaciones
	class Ejemplo extends Operaciones{
		public function llamarOperacion($numero1,$numero2,$operacion){
			$this->numero1=$numero1;
			$this->numero2=$numero2;
			switch ($operacion){
				    case "Suma":
						return $this->suma($numero1,$numero2);
						break;
				    case "Resta":
						return $this->resta($numero1,$numero2);
						break;
				    case "Multiplicacion":
						return $this->multiplicacion($numero1,$numero2);
						break;						
					default:
						return "0";
			}
		}
	}
	//se crea el objeto
	//de la clase ejemplo
	$Ejercicio=new Ejemplo();	
	$solucion=$Ejercicio->llamarOperacion($Gnumero1,$Gnumero2,$Goperacion);
	
	//Redirecciona al index con la resupuesta
	header ("Location: index.php?solucion=$solucion");
?> 
