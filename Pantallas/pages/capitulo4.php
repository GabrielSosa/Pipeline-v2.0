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
                <a class="navbar-brand" href="index.php">Prototipo Pipeline v0.1</a>
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
                            <a href="capitulo1.php"><i class="fa fa-dashboard fa-fw"></i> Formulas Cap. 1</a>
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
                    <h1 class="page-header">Formulas capitulo 4</h1>
                </div>
                <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
           <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
            <form>
            <div class="row">
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Tasa de Interes Nominal</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Tasa de Interes</label></td>
										 <td><input id="ti_tasa" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Numero de Periodos</label></td>
										 <td><input id="ti_p" type="text" class="form-control col-xs-6"></td>

									</tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Nominal();">Calcular</button></td>
										 <td><input id="ti_cal" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
           </form>

            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
            <!-- /.row -->
      <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Tasa de Interes Efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Frecuencia de Composición</label></td>
										 <td><input id="te_m" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Periodo de Tiempo</label></td>
										 <td><input id="te_t" type="text" class="form-control col-xs-6"></td>

									</tr><tr>
										<td><label>tasa interés efectiva Anual </label></td>
										 <td><input id="te_r" type="text" class="form-control col-xs-6"></td>

									</tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Efectiva()">Calcular</button></td>
										 <td><input id="te_calc" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                        <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >valor futuro con una tasa efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de Periodos de Capitalización por Año</label></td>
										 <td><input id="vf_m" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Tasa de Interés Efectiva por Periodo de Composición </label></td>
										 <td><input id="vf_i" type="text" class="form-control col-xs-6"></td>

									</tr><tr>
										<td><label>Monto Principal</label></td>
										 <td><input id="vf_p" type="text" class="form-control col-xs-6"></td>

									</tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary " onclick="Valor_Futuro()">Calcular</button></td>
										 <td><input id="vf_calc" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                        <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Tasa Interes Anual Efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label> Tasa para un Periodo de Composición</label></td>
										 <td><input id="t_pc" type="text" class="form-control col-xs-6"></td>

									</tr>
                                    <tr>
                                        <td><label> Número de Periodos de Capitalización o Composición por Año</label></td>
                                         <td><input id="t_pc_m" type="text" class="form-control col-xs-6"></td>

                                    </tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Interes_anual_Efectiva()">Calcular</button></td>
										 <td><input id="t_pc_calc" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                        <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Tasa de Interés Efectiva por Periodo de Composición </div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Periodo de Composición</label></td>
										 <td><input id="tie_pc_m" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Tasa para un Periodo de Composición</label></td>
										 <td><input id="tie_pc_i" type="text" class="form-control col-xs-6"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TI_Efectiva_Por_Pc();">Calcular</button></td>
										 <td><input id="tie_pc_calc" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                        <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div >Tasa de Interes Efectiva para Capitalizacion Continua Anual </div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Tasa Anual Nominal</label></td>
										 <td><input id="ta_nom" type="text" class="form-control col-xs-6"></td>

									</tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TIE_Para_Capitalizacion_Continua()">Calcular</button></td>
										 <td><input id="ta_nom_calc" type="text" class="form-control col-xs-3"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
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
        //tasa de interes nominal
    function Tasa_Nominal(){
// donde: r =tasa de interes 
//        n= numero de periodos
        var t=document.getElementById("ti_tasa").value/100;
        var n=document.getElementById("ti_p").value;
        document.getElementById("ti_cal").value= t*n;

    }

    // Tasa de interes efectiva
    function Tasa_Efectiva(){
// t es periodo de tiempo (solicitar al usuario) t se cancela de la formula segun el libro
//m es frecuencia de composición (solicitar al usuario)
//r es tasa interés nominal anual (Solicitar al usuario)
        var t=document.getElementById("te_t").value;
        var m=document.getElementById("te_m").value;
        var r=document.getElementById("te_r").value/100;
        document.getElementById("te_calc").value= r/m;

    }


    //valor futuro con una tasa efectiva
    function Valor_Futuro(){
/*
M es numero de periodos de capitalización por año (Solicitar al usuario)
i = tasa de interés efectiva por periodo de composición (Solicitar al usuario)
P es el monto principal
 */
     var p=document.getElementById("vf_p").value;

     var m=document.getElementById("vf_m").value;
     var i=document.getElementById("vf_i").value/100;
     var r=Math.pow(1+i,m);
    document.getElementById("vf_calc").value= parseFloat(p)+r;

    }

    function Tasa_Interes_anual_Efectiva(){
        /*
i es la tasa para un periodo de
composición.

 */
         var i=document.getElementById("t_pc").value/100;
          var m=document.getElementById("t_pc_m").value;
        var ia=Math.pow(1+parseFloat(i),parseInt(m) )-1;
        document.getElementById("t_pc_calc").value= ia;
    }
//tasa de interés fectiva por periodo de composición
    // esta formula es para cuando se conoce el valor de ia(tasa de interes anual efectiva)
   
    function TI_Efectiva_Por_Pc(){
        var ia=document.getElementById("tie_pc_i").value/100;
        var m=document.getElementById("tie_pc_m").value;
        
        var i=Math.pow(1+parseFloat(ia), 1/parseInt(m)) -1;
        document.getElementById("tie_pc_calc").value= i;
    

    }
/*
pc=periodo de composicion
i es la tasa para un periodo de
composición.


 */     
       
    

    //tasa de interes efectiva para capitalizacion continua anual
    function TIE_Para_Capitalizacion_Continua(){
        // r = tasa anual nominal
        var ia=document.getElementById("ta_nom").value/100;
         var i=Math.pow(Math.E,ia)-1;
         document.getElementById("ta_nom_calc").value= i;
    }



    </script>

</body>

</html>
