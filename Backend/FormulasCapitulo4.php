<?php

class capitulo4{
	

//tasa de interes nominal
	function float Tasa_Nominal(float $t, int $n){
// donde: r =tasa de interes 
//		  n= numero de periodos
		return $t*$n;

	}

// Tasa de interes efectiva
	function float Tasa_Efectiva(float $r, int $m){
// t es periodo de tiempo (solicitar al usuario)
//m es frecuencia de composición (solicitar al usuario)
//r es tasa interés nominal anual (Solicitar al usuario)
		return $r/$m;
	}


	//valor futuro con una tasa efectiva
	function float Valor_Futuro(float $p, float $i, int $m){
/*
M es numero de periodos de capitalización por año (Solicitar al usuario)
i = tasa de interés efectiva por periodo de composición (Solicitar al usuario)
P es el monto principal
 */
	return $p+(1+$i)^$m;

	}

	function float Tasa_Interes_anual_Efectiva(float $i, int $m){
		/*
i es la tasa para un periodo de
composición.

 */
		$ia=(1+$i)^$m -1;
		return $ia;
	}
//tasa de interés fectiva por periodo de composición
	// esta formula es para cuando se conoce el valor de ia(tasa de interes anual efectiva)
	function float Tasa_Interes_Efectiva_Por_Pc(float $ia, int $m)){
/*
pc=periodo de composicion
i es la tasa para un periodo de
composición.

 */		
		$i=(1+$ia)^(1/$m) -1;
		return $i;
	
	}

	//tasa de interes efectiva para capitalizacion continua anual
	function float TIE_Para_Capitalizacion_Continua(){
		// r = tasa anual nominal
		return M_E^(0.15)-1;
	}
}

?>