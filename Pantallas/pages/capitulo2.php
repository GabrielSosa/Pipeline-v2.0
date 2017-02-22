<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Prototipo Pipeline v0.1</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Formulas Cap. 1</a>
                        </li>
                        <li>
                            <a href="capitulo2.php"><i class="fa fa-dashboard fa-fw"></i> Formulas Cap. 2</a>
                        </li>
                        <li>
                            <a href="capitulo4.php"><i class="fa fa-dashboard fa-fw"></i> Formulas Cap. 4</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulas Capitulo 2</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form>
           <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Valor Futuro de Cantidad Compuesta</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor Presente</label></td>
										 <td><input  id="valor_presente" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Tasa de interés</label></td>
										 <td><input id="tasa_interes" type="text" class="form-control col-xs-6"></td>

									</tr><tr>
										<td><label>Periodo de tiempo</label></td>
										 <td><input id="periodo_tiempo" type="text" class="form-control col-xs-6"></td>
									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_futuro_cantidad_compuesta();">Calcular</button></td>
										 <td><input id="valor_futuro_compuesta" type="text" class="form-control col-xs-3" ></td>

									</tr>
								</table>
								  	
                               
                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor Presente de Inversion Inicial</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Valor futuro</label></td>
                                         <td><input id ="valor_futuro" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_2" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id = "periodo_tiempo_2" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    
                                </table>
                                 
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="valor_presente_inversion_inicial();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id ="valor_presente_inicial" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    
                               
                            </div>
                </div>
                
              
        </div>
                               
        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor Presente de Serie Uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Valor anual</label></td>
                                         <td><input id="valor_anual" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_3" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_3" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick= "valor_presente_serie_uniforme();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="valor_serie_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor Anual Uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Valor Presente</label></td>
                                         <td><input id="valor_presente_2" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Tasa de interes</label></td>
                                         <td><input id="tasa_interes_4" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Periodo de Tiempo</label></td>
                                         <td><input id="periodo_tiempo_4" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="valor_anual_uniforme();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="valor_anu_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor Anual de Serie Uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Valor futuro</label></td>
                                         <td><input id ="valor_futuro_2"type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_5" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_5" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="valor_anual_serie_uniforme();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id= "valor_anu_serie_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor Futuro de Serie Uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Valor Anual</label></td>
                                         <td><input id="valor_anual_2" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_6" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_6" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="valor_futuro_serie_uniforme();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="valor_futu_serie_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Flujo de Efectivo Año</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Cantidad Base</label></td>
                                         <td><input id="cantidad_base" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_7" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Gradiente</label></td>
                                         <td><input id="gradiante" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="flujo_efectivo_anio();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="flujo_efec_anio" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Gradiente Aritmetico</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_8" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Gradiente</label></td>
                                         <td><input id="gradiante_2" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_7" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="gradiente_aritmetico();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="gradiente_arit" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Serie Anual Uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_9" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Gradiente</label></td>
                                         <td><input id="gradiante_3" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_8" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="serie_anual_uniforme();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="serie_anu_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>

        <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Factor de Gradiente Aritmetico</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Periodo de tiempo</label></td>
                                         <td><input id="periodo_tiempo_10" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                    <tr>
                                        <td><label>Gradiente</label></td>
                                         <td><input id="gradiante_4" type="text" class="form-control col-xs-6"></td>

                                    </tr><tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_9" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                                </table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
                                <table class="table"> 
                                    <tr>
                                         <td><button onclick="factor_gradiente_aritmetico();" class="btn btn-primary">Calcular</button></td>
                                         <td><input id="factor_gra_uniforme" type="text" class="form-control col-xs-3"></td>

                                    </tr>
                                </table>
                                    

                            </div>
                </div>
                
              
        </div>
           </form>
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
            <!-- /.row -->
 
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
     <script type="text/javascript">
        function valor_futuro_cantidad_compuesta(){
            var valor_presente=parseFloat(document.getElementById("valor_presente").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo").value);

            document.getElementById("valor_futuro_compuesta").value = Math.round(valor_presente*Math.pow(tasa_interes+1,periodo_tiempo)*100)/100;

        }
        function valor_presente_inversion_inicial(){
            var valor_futuro=parseFloat(document.getElementById("valor_futuro").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_2").value);

            document.getElementById("valor_presente_inicial").value=Math.round((valor_futuro/Math.pow(tasa_interes+1,periodo_tiempo)*100))/100;
        }
        function valor_presente_serie_uniforme(){
            var valor_anual=parseFloat(document.getElementById("valor_anual").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_3").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_3").value);
            if (tasa_interes!=0){
                document.getElementById("valor_serie_uniforme").value= Math.round((valor_anual*(Math.pow((1 + tasa_interes), periodo_tiempo) - 1)/(Math.pow((1 + tasa_interes),periodo_tiempo)*periodo_tiempo))*100)/100;
            }else{
                document.getElementById("valor_serie_uniforme").value="La tasa de interés debe ser diferente a cero.";
            }
        }

        function valor_anual_uniforme(){
            var valor_presente=parseFloat(document.getElementById("valor_presente_2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_4").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_4").value);
            document.getElementById("valor_anu_uniforme").value= Math.round((valor_presente*((tasa_interes * Math.pow((tasa_interes + 1), periodo_tiempo))/(Math.pow((1 + tasa_interes),periodo_tiempo) - 1)))*100)/100;

        }   

        function valor_anual_serie_uniforme(){
            var valor_futuro= parseFloat(document.getElementById("valor_futuro_2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_5").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_5").value);
            document.getElementById("valor_anu_serie_uniforme").value= Math.round((valor_futuro*(tasa_interes/(Math.pow((1 + tasa_interes),periodo_tiempo) - 1)))*100)/100;

        }

        function valor_futuro_serie_uniforme(){
            var valor_anual= parseFloat(document.getElementById("valor_anual_2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_6").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_6").value);
            document.getElementById("valor_futu_serie_uniforme").value= Math.round((valor_anual*((Math.pow((1 + tasa_interes),periodo_tiempo) - 1)/tasa_interes))*100)/100;

        }

    
        function flujo_efectivo_anio(){
            var cantidad_base= parseFloat(document.getElementById("cantidad_base").value);
            var gradiante=parseFloat(document.getElementById("gradiante").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_7").value);
            document.getElementById("flujo_efec_anio").value= Math.round((cantidad_base + (periodo_tiempo - 1) * gradiante)*100)/100;

    }

    

        function gradiente_aritmetico(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_7").value);
            var gradiante=parseFloat(document.getElementById("gradiante_2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_8").value);
            document.getElementById("gradiente_arit").value= Math.round((gradiante / tasa_interes * (((Math.pow((tasa_interes + tasa_interes),periodo_tiempo) - 1)/ tasa_interes * Math.pow((1 + tasa_interes),periodo_tiempo))-(periodo_tiempo/Math.pow((1 + tasa_interes),periodo_tiempo))))*100)/100;

        }

        function serie_anual_uniforme(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_8").value);
            var gradiante=parseFloat(document.getElementById("gradiante_3").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_9").value);
            document.getElementById("serie_anu_uniforme").value = Math.round((gradiante * ((1/tasa_interes)-(periodo_tiempo/Math.pow((1 + tasa_interes),periodo_tiempo) - 1)))*100)/100;

        }

        function factor_gradiente_aritmetico(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_9").value);
            var gradiante=parseFloat(document.getElementById("gradiante_4").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_10").value);
            document.getElementById("factor_gra_uniforme").value= Math.round((gradiante * ((1/tasa_interes)*(((Math.pow((1 + tasa_interes),periodo_tiempo) - 1) / tasa_interes) - periodo_tiempo)))*100)/100;

        }


</script>
</body>

</html>
