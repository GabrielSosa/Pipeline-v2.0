<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php 

	function valorFuturoCantidadCompuesta($V_Presente, $i, $n){

		return $V_Presente*pow((1 + $i),$n);

	}

	/*P es inversión inicial, se ingresa en el sistema. (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario)*/


	function valorPresenteInversionInicial($V_Futuro, $i, $n){

		return $V_Futuro/(pow((1 + $i),$n));

	}

	/*F es Valor futura (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario).
	3.*/

	function valorPresenteSerieUniforme($V_Anual, $i, $n){
		if($i <> 0){
			return $V_Anual(pow((1 + $i), $n) - 1)/(pow((1 + $i),$n)*$n);
		} else {
			echo "La tasa de interés debe ser diferente a cero.";
			return 0;
		}

	}

	/*A es Valor anual uniforme (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario).*/

	function valorAnualUniforme($V_Presente, $i, $n){

		return $V_Presente(($i * pow(($i + 1), $n))/(pow((1 + $i),$n) - 1));

	}

	/*P es Valor Presente Uniforme es Valor anual uniforme (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario).*/

	function valorAnualSerieUniforme($V_Futuro, $i, $n){

		return $V_Futuro($i/(pow((1 + $i),$n) - 1));

	}

	/*F es Valor futuro (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario).*/

	function valorFuturoSerieUniforme($V_Anual, $i, $n){

		return $V_Anual((pow((1 + $i),$n) - 1)/$i);

	}

	/*A Valor Anual (Solicitar al usuario)
	i es tasa de interés se ingresa en el sistema. (Solicitar al usuario)
	n es número de años o periodo de tiempo, se ingresa en el sistema. (Solicitar al usuario).*/
	
	function flujoEfectivoAnio($CantidadBase, $n, $Gradiente){

		return $CantidadBase + ($n - 1) * $Gradiente;

	}

	/*Cantidad base es La cantidad base de dinero. (Solicitar al usuario)
	n es periodo de tiempo. (Solicitar al usuario).
	G es el gradiente(solicitar al usuario)*/

	function gradienteAritmetico($n, $Gradiente, $i){

		return $Gradiente / $i * (((pow(($i + $i),$n) - 1)/ $i * pow((1 + $i),$n))-($n/pow((1 + $i),$n)));

	}

	/*n es periodo de tiempo. (Solicitar al usuario).
	G es el gradiente(solicitar al usuario)
	i es interés*/

	function serieAnualUniforme($n, $Gradiente, $i){

		return $Gradiente * ((1/$i)-($n/pow((1 + $i),$n) - 1));

	}

	/*n es periodo de tiempo. (Solicitar al usuario).
	G es el gradiente(solicitar al usuario)
	i es interés(Solicitar al Usuario).*/

	function factorGradienteAritmetico($n, $Gradiente, $i){

		return $Gradiente * ((1/$i)*(((pow((1 + $i),$n) - 1) / $i) - $n));

	}

	/* n es periodo de tiempo. (Solicitar al usuario).
	G es el gradiente(solicitar al usuario)
	i es interés(Solicitar al Usuario).*/

 ?>


</body>
</html>
