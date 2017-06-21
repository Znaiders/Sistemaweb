<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="1tOKyGnhjAEQHXHB3Y3tMiGDYNW1urJL4z2RHT8J">

    <title>Laravel </title>

    <!-- Styles -->
    <link href="http://tecnologico.com/css/app.css" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="http://tecnologico.com/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://tecnologico.com/css/EstiloFondo/estilofondo.css">


    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"1tOKyGnhjAEQHXHB3Y3tMiGDYNW1urJL4z2RHT8J"};
    </script>
    <link media="all" type="text/css" rel="stylesheet" href="http://tecnologico.com/css/bootstrap.min.css">

      <link media="all" type="text/css" rel="stylesheet" href="http://tecnologico.com/css/EstiloFondo/estilofondo.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand " href="http://tecnologico.com">
                        Residencia Profesional
                    </a>
                      <a href="#" onclick="mostrarResidente()" class="navbar-brand">Residente</a>
                      <a href="#" onclick="mostrarProyecto()"class="navbar-brand">Proyecto</a>
                      <a href="#"onclick="mostrarEmpresa()" class="navbar-brand">Empresa</a>


                </div>

                <div class="collapse navbar-collapse navbar-inverse " id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    esnaider <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="http://tecnologico.com/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="http://tecnologico.com/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="1tOKyGnhjAEQHXHB3Y3tMiGDYNW1urJL4z2RHT8J">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>

            </div>

<div class="container">

 <div id="empresa" style='display:none' >
   
   
   
   
   
    </div>
    </div>


<div class="container">

 <div id="residente" style='display:block' >
<br> <br><br>  <br>
     <div class="" ></div>
<div class="col-lg-12 " >
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" style="background:#000000;">
           <div id="page-wrapper" class="col-lg-12 " style="background:#ECF0F1;
         margin-top:20px;margin-bottom:20px;">


		
                       <div class="row" >
                           <div class="col-lg-6"  style=" ">
                               <h3 class="page-header ">Datos del Residente</h3>
                           </div>
                           <!-- /.col-lg-12 -->
                       </div>
                       <!-- /.row -->
                       <!--Columna 1-->


                       <div class="row" >


                           <div class="col-lg-12" >
                               <div class="panel panel-default">
                                   <div class="panel-heading col-lg-12">
                                       Formulario de registro
                                   </div>
                                   <div class="panel-body ">
                        <div class="row" >

                            <div class="col-lg-12" style="background:#E9F7EF;" >

                                   <!--Aqui va el codigo-->

                                   <form  class="form col-lg-12"  >
                                                                    
                                     <!--Iniciamos la fila 1--> 
                                       <div   class="row ">
                                          <div class="col-lg-12">
                                              <div class="form-group col-lg-4">
                                           <label for="full_name_id" class="control-label input-lg ">Nombre</label>
                                           <input type="text"  style="width: 100%;" class="form-control input-lg" id="full_name_id" name="full_name" placeholder="Nombre del residente" required />
                                       </div>
                                       
                                       <div class="form-group  col-lg-4" style="" > <!-- State Button -->
                                           <label for="state_id" class=" control-label input-lg " >Carreras</label>
                                           <select style="width: 100%;" class="input-group form-control input-lg"  id="state_id">
                                               <option value="Banco" >Carrera:</option>
                                               <option value="Ing.Sistemas">Ing.Sistemas Compuatcionales</option>
                                               <option value="Ing.Informatica">Ing.Informatica</option>
                                           </select>
                                       </div>

                                       <div class="form-group col-lg-4" style=""> <!-- Street 2 -->

                                           <label for="street2_id"  class="control-label input-lg">Domicilio Actual:</label>

                                           <input type="text" style="width: 100%;"   class="form-control input-lg " id="street2_id" name="street2" placeholder="Introduce tu Domicilio" required />
                                       </div>
                                          </div>
                                           
                                       </div>
                                        <!--Termina la fila 1--> 
                                        <!--Inicia la fila 2-->
                                        <div class="row">
                                            <div class="col-lg-12" >
                                                    <div class="form-group col-lg-4">
                                           <label for="full_name_id"  class="control-label input-lg ">Numero de control</label>
                                           <input type="text" style="width: 100%;"  class="form-control input-lg"  id="full_name_id" name="full_name" placeholder="Numero de control" />
                                       </div>
                                       <div class="form-group col-lg-4">
                                           <label for="full_name_id"  class="  control-label input-lg">No.seguro</label>
                                           <input type="text" style="width: 100%;" class=" form-control input-lg" id="full_name_id" name="full_name" placeholder="Numero de seguro social" />
                                       </div>

                                       <div class="form-group col-lg-4">
                                           <label for="full_name_id" class="control-label input-lg">Ciudad </label>
                                           <input type="text" style="width: 100%;"  class="form-control input-lg" id="full_name_id" name="full_name" placeholder="Nombre de la ciudad" />
                                       </div>
                                            </div>
                                        </div>  
                                        <!--Termina la fila 2-->
                                        <!--Inicia  la fila 3-->  
                                      <div class="row">
                                            <div class="col-lg-12" >
                                                
                                       <div class="form-group col-lg-6">
                                         <br>
                                           <label for="full_name_id"  class=" col-lg-3 control-label input-lg">Celular </label>
                                           <input type="text" style="width: 100%;" class="form-control input-lg col-lg-3" id="full_name_id" name="full_name" placeholder="Celular"/>
                                       </div>

                                       <div class="form-group col-lg-6 ">
                                       
                                       <br>
                                           <label for="full_name_id"  class="col-lg-3 control-label input-lg" >email </label>
                                           <input type="email"  style="width: 100%;" class=" col-lg-3 form-control input-lg" id="full_name_id" name="full_name" placeholder="email"/>
                                       </div>
                                       
                                                                             
                                                
                                            </div>
                                        </div>
                                        <!--Termina la fila 3-->
                                         <!--Inicia la fila 4-->
                                         
              <div class="row"><br>
      <div class="col-md-12 col-md-offset-0"  >
                      <label for="full_name_id" class=" control-label input-lg ">Nombre del Proyecto</label>
                  <div  style="height: 3em; overflow: auto; border: gray solid 1px; ">
                       <textarea class="  input-sm form-control" style="width: 100%;" rows="2" ></textarea></div>
                   
                                           
                                                 </div>
                                             </div>
                                          <!--Termina la fila 4-->
                                          <!--Inicia la fila 5-->
                                           <div class="row"><br>
      <div class="col-md-12 col-md-offset-0"  >
                                          
                                           <div  class="form-group  col-lg-6" style="" ><br> <!-- State Button -->
                                           <label for="state_id" class=" control-label input-lg " >Opciones</label>
                                           <select style="width: 100%;" class="input-group form-control input-lg"  id="state_id">
                                             
                                               
                                               <option value="Banco proyectos">Banco de proyectos</option>
                                               
                                               <option value="Propuesta propia">Propuesta Propia</option>
                                               
                                                <option value="Trabajador">Trabajador</option>
                                                
                                               
                                           </select>
                                       </div>
                                            <div class=" col-lg-6 form-group"> <!-- Street 2 -->
                                              <br>
                                               <label for="street2_id" class="control-label input-lg">Periodo Proyectado</label>
                                               <input style="width: 100%;" type="date" class="form-control input-lg" id="street2_id" name="street2" placeholder="Periodo">
                                           </div>
                                          </div>
                                             </div>
                                       <!--Termina la fila 5-->
                                             

                                   
                                          
                                          
                                        
                                           
                                           

                                <div class="form-group col-lg-12"> <br><!-- Submit Button -->
<br>
<br>

       
                                           <button type="submit" style="width: 100px; "  class="btn btn-primary">Registrar</button>
                                       </div>
                                       
                                   </form>




                           </div>


                           <!-- /.col-lg-12 -->
                       </div>
                       <!-- /.row -->
                   </div>
                   <!-- /#page-wrapper -->

              </div>
              <!-- /#wrapper -->
             </div><!--Fin del bloque naranja-->
            <!-- /#page-wrapper -->


        </div><!--Fin del row-->
         <!-- /#wrapper -->


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div><!--fIN DEL CONTAINER ANARANJADO-->
    
     </div>
    </div>
     </div>

       
        </div>
 
   
  <script src="Myscripts/hola.js" >
    </script>
    <!-- Scripts -->
    <script src="http://tecnologico.com/js/app.js"></script>
</body>
</html>
