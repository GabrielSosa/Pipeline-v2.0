<?php

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
                       
                         <!-- Interes -->
                       
                        <li>
                            <a href="#"><i class="fa fa-fw"></i>Interes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#interes_simple">Simple</a>
                                </li>                    
                                <li>
                                    <a href="#interes_generado">Generado</a>
                                </li>
                                <li>
                                    <a href="#interes_compuesto">Compuesto</a>
                                </li>
                                
                            </ul>

                        </li>
                        
                        <!-- Tasas -->
                        
                        
                              <li>
                            <a href="#"><i class="fa  fa-fw"></i>Tasas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#tasa_interes">Tasa de Interes</a>
                                </li>
                                <li>
                                    <a href="#tasa_rendimiento">Tasa de rendimiento</a>
                                </li>
                                <li>
                                    <a href="#interesn17">Tasa de interes Norminal</a>
                                </li>
                                <li>
                                    <a href="#tasa_anual20">Tasa de interes anual efectiva</a>
                                </li>
                          
                                 <li>
                                    <a href="#tasa_anual21">Tasa de interes efectiva por periodo</a>
                                </li>
                                 <li>
                                    <a href="#tasa_anual22">Tasa de interes anual efectiva para tasa nominal</a>
                                </li>
                                  <li>
                                    <a href="#efectiva">Tasa efectiva correspondiente por PC</a>
                                </li>
                                
                            </ul>

                        </li>
                     
                     <!-- flujos -->
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Flujos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#Flujo_efectivo_neto">Flujo de efectivo neto</a>
                                </li>
                                <li>
                                    <a href="#efectivo_añon">Flujo de efetivo en el año n</a>
                                </li>                                                    
                            </ul>

                        </li>
                      <!--valores  -->   
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Valores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#valor_presente">Valor Presente</a>
                                </li>
                                <li>
                                    <a href="#valor_futuro">Valor futuro</a>
                                </li>
                                <li>
                                    <a href="#valor_anual10"> Valore presente para valor anual uniforme</a>
                                </li>
                                <li>
                                    <a href="#valor_futuro12"> Valore futuro de serie anual uniforme</a>
                                </li>           
                                <li>
                                    <a href="#valor_presente9">Valor anual uniforme</a>
                                </li> 
                                  <li>
                                    <a href="#anual_uniforme">Serie de valor anual uniforme</a>
                                </li> 
                                 <li>
                                    <a href="#valor_anual15">Serie anual uniforme (valor anual)</a>
                                </li> 
                                 <li>
                                    <a href="#Gradiente14">Gradiente aritmetico para los años presente</a>
                                </li> 
                                <li>
                                    <a href="#factor16">Factor gradiente aritmetico, valor futuro</a>
                                </li>                                           <li>
                                    <a href="#final">Valor futuro al final del 1 año</a>
                                </li>                  
                            </ul>

                        </li>
                    </ul>
                </div>
               
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CALCULADORA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
     
       
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_interes">Tasa de Interes</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes1" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="monto1"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
               
               
       <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_generado">Interes Generado</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Saldo Pagado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="saldo2" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="monto2"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>          
                
       <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_rendimiento">Tasa de rendimento</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Interes Generado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes_gene3" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="monto3"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>   
                   
                               
        <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_simple">Interes Simple</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="monto4" ></td>

									</tr>
									<tr>
										<td><label>Periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos4"></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes4"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>  
                   
             <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_compuesto">Interes compuesto</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="monto5" ></td>

									</tr>
									<tr>
										<td><label>Periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos5"></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes5"></td>

									</tr>
									<tr>
										<td><label>Interes acumulado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interesA5"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado5"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                        <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="Flujo_efectivo_neto">Flujo de efectivo neto</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Entrada efectivo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="e_efectivo6" ></td>

									</tr>
									<tr>
										<td><label>Salida efectivo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="s_efectivo6"></td>

									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado6"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>   
                   
         <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_futuro">Valor futuro</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Inversion inicial</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="inversion_inicial7" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes7"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo7"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado7"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
 
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_presente8">Valor presente (inversion inicial)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor futuro</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_futuro8" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes8"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo8"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado8"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                    <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_presente9">Valor presente (De serie uniforme )</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anula uniforme</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_anual9" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes9"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo9"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado9"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
     <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="anual_uniforme">Valor anual uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anula uniforme</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_anual10" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes10"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo10"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado10"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                   <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="serie_anual_uniforme">Serie de Valor anual uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor futuro</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="futuro11" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes11"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo11"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado11"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                        
                    <!-- /.panel .chat-panel -->
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_futuro12">Valor Futuro (de la serie uniforme) </div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anual</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_anual12" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes12"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo12"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado12"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
         <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->    
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="efectivo_añon">Flujo de efectivo en año n</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiente13" ></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo13"></td>

									</tr>


								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado13"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form> 
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->   
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="Gradiente14">Gradiente aritmetico</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiente14" ></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes14"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo14"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado12"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
        </form>
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_anual15">Serie anual uniforme (valor anual)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiente15" ></td>

									</tr>
									<tr>
										<td><label>Periodo de tiempo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo15"></td>

									</tr>
									<tr>
									<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo15"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado15"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>       
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="factor16">Factor gradiente aritmetico, valor futuro</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiente16" ></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes16"></td>

									</tr>
									<tr>
									<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo16"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado16"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
          <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
            <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interesn17">Tasa de interes nominal</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Interes por periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes17" ></td>

									</tr>
							
									<td><label>Cantidad de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo17"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado17"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                            <!-- aca comienza el div con el recuadro copienlo y peguenlo para        las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="efectiva">Tasa fectiva correspondiente por PC</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Tasa de interes nominal</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes18" ></td>

									</tr>
									<tr>
										<td><label>Frecuencia de composicion</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="frecuencia18"></td>

									</tr>
									<tr>
									<td><label>Periodo de tiempo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo18"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado18"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                            <!-- aca comienza el div con el recuadro copienlo y peguenlo para        las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="final">Valor futuro al final de 1 año</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor presente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="presente19" ></td>

									</tr>
									<tr>
										<td><label>Interes acumulado durante el año</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes19"></td>

									</tr>
									<tr>
									<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo19"></td>
									</tr>
									<tr>
									<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes19"></td>
									</tr>
									<tr>
									<td><label>Valor presente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="presente19"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado19"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
     		<!-- aca comienza el div con el recuadro copienlo y peguenlo para    las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual20">Tasa de interes anual efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos20" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes20"></td>

									</tr>
					
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado20"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form> 
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para    las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual21">Tasa de interes efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos21" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes21"></td>

									</tr>
					
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado21"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                               <!-- aca comienza el div con el recuadro copienlo y peguenlo para         las difernetes formulas -->                   
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual22">Tasa de interes anual efectiva (para tasa nominal)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos22" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes22"></td>

									</tr>
					
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="resultado22"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                                                                                             
                                                                              
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

</body>

</html>
?>