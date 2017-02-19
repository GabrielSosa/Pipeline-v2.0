<!DOCTYPE html>
<html>
<head>

<title></title>

</head>
<body>
    <?php
        
    	/*$V_Futuro cantidad que se debe el dia de hoy
        $V_Presente cantidada original
        $I_Acumulado interes total acumulado */
        function interes( $V_Futuro, $V_Presente)
            {
                $I_Acumulado=$V_Futuro - $V_Presente;
                return $I_Acumulado;
            }
       
    
    
         
    	/*
        $V_Presente cantidada original
        $I_Acumulado interes total acumulado 
        $r interes pagado  con respecto auna unidad de tiempo específica se expresa como porcentaje %*/
        function tasaInteres( $I_Acumulado,  $V_Presente)
        {
            $r=($I_Acumulado / $V_Presente)*100;
            return $r;
        }
    
    
        	/*$V_Futuro cantidad que se debe el dia de hoy
        $V_Presente cantidada original
        $I_Generado interes ganado desde la perspectiva de un ahorrador*/
        function interesGenerado( $V_Futuro,  $V_Presente)
            {
                $I_Generado=interes( $V_Futuro,$V_Presente);
                return  $I_Generado;
                
            }
    
    
        /*
        $V_Presente cantidada original
        $I_Acumulado interes total acumulado 
        $Ts_Ren El interés generado durante un periodo específico de tiempo se expresa %*/
    
        function tasaRendimiento( $I_Acumulado,  $V_Presente)
        {
            $Ts_Ren=tasaInteres($I_Acumulado, $V_Presente);
            return $Ts_Ren;
        }
    
    
    
        /*
        $V_Presente cantidada original
        $n numero de periodos
        $r tasa de interes expresada en decimal
        $I_Simple interes generado se mantiene fijo el valor presente en los n periodos*/
   
        function interesSimple( $V_Presente, $n,  $r)
        {
            $I_Simple=$V_Presente*$n*$r;
            return $I_Simple;
        }
    
    
       
        /*
        $V_Presente cantidada original
        $n numero de periodos
        $r tasa de interes expresada en decimal
        $I_Compuesto interes generado se le suma a la cantidada original o $V_Presente cada periodo y genera nuevo interes
        */
        function interesCompuesto( $V_Presente, $n,  $r)
        {
            $I_Compuesto=valorFuturo($V_Presente, $n, $r) - $V_Presente;
            return $I_Compuesto;
        }
    
    
         /*
        $V_Presente cantidada original
        $n numero de periodos
        $r tasa de interes expresada en decimal
        $V_Futuro cantidad final a los $n periodos a una tasa $r se calcula con interes compuesto*/
        function valorFuturo( $V_Presente, $n,  $r)
        {
            $V_Futuro=$V_Presente*pow((1+$r),$n);
            return $V_Futuro;
        }
    
    
        /*
        $En_Efec_Ne entradas totales de efectivo
        $Sa_Efec_Ne salidas totales de efectivo
        $Flujo_E_Ne flujo neto de efectivo
        */
        function flujoEfectivoNeto( $En_Efec_Ne , $Sa_Efec_Ne )
        {
            $Flujo_E_Ne=$En_Efec_Ne - $Sa_Efec_Ne;
            return $Flujo_E_Ne;
        }
    
       
        
  
    ?>
</body>
</html>
