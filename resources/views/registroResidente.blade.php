
@extends('layouts.app')

@section('content')

<br><br><br><br><br><br><br><br>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {!!Html::style('css/bootstrap.min.css')!!}
      {!!Html::style('css/EstiloFondo/estilofondo.css')!!}

  <script type="text/javascript">
function mostrarResidente(){
document.getElementById('residente').style.display = 'block';
document.getElementById('empresa').style.display = 'none';
document.getElementById('proyecto').style.display = 'none';

}


function mostrarEmpresa(){
document.getElementById('empresa').style.display = 'block';
document.getElementById('residente').style.display = 'none';
document.getElementById('proyecto').style.display = 'none';


}

function mostrarProyecto(){
document.getElementById('proyecto').style.display = 'block';
document.getElementById('residente').style.display = 'none';
document.getElementById('empresa').style.display = 'none';

}
</script>




 <div class="container" style="margin-top: -100px;">

        <div class="row">

            <div class="col-md-3"><br>
                <p class="lead">Actividades</p>
                <div class="list-group">
                    <a href="#" onclick="mostrarResidente()" class="list-group-item active">Datos del residente</a>
                    <a href="#" onclick="mostrarProyecto()"class="list-group-item">Proyecto</a>
                    <a href="#"onclick="mostrarEmpresa()" class="list-group-item">Empresa</a>
                </div>
            </div>
        </div>
     </div>

<div id="residente" style='display:block' >

  <!--Residente-->
<div class="container">
   <div class="fromResidente">
    <div class="title"><h3>Datos del Residente</h3></div>




        <div class="form-group">
          {!!Form::label('Nombre:')!!}
          {!!Form::textArea('NombreResidente',null,['class'=>'small-textarea ','rows'=>'1','placeholder'=>'Introduce tu nombre'])!!}
        </div>


        <div class="form-group">
          {!!Form::label('Carrera:')!!}
         {!!Form::select('OpcionCarrera', ['sistemas' => 'Ing.sistemas', 'informatica' => 'Ing.informatica']);!!}
        </div>

        <div class="form-group">
          {!!Form::label('Domicilio:')!!}
          {!!Form::textArea('Domicilio',null,['class'=>'small-textareaDomicilio ','rows'=>'2','placeholder'=>'Introduce tu domicilio'])!!}
        </div>


         <div class="form-group">
          {!!Form::label('Numero de control:')!!}
          {!!Form::text('NoControl',null,['class'=>'small-textareaDomicilio ','placeholder'=>'Introduce el No.Control'])!!}
        </div>

         <div class="form-group">
          {!!Form::label('Numero de seguro social:')!!}
          {!!Form::text('NoSegSocial',null,['class'=>'small-textareaDomicilio ','placeholder'=>'Introduce el No de seguro social'])!!}
        </div>

          <div class="form-group">
          {!!Form::label('Ciudad')!!}
          {!!Form::text('Ciudad:',null,['class'=>'small-textareaDomicilio ','placeholder'=>'Introduce la ciudad'])!!}
        </div>

        <div class="form-group">
          {!!Form::label('Telefono Celular:')!!}
          {!!Form::text('Telefono',null,['class'=>'small-textareaDomicilio ','placeholder'=>'Introduce telefono celular'])!!}
        </div>


            <div class="form-group">
              {!!Form::label('Email')!!}
               {!!Form::email('email', null, ['class' => 'small-textareaDomicilio ','placeholder'=>'Introduce email'])!!}
              </div>




  </div>
</div>
</div>



  <div class="container ">

<div id="proyecto" style='display:none'>

<!--Empresa-->


   <div class="fromResidente">
    <div class="title"><h3>Datos del Proyecto</h3></div>

      <table>
        <tr>

          <td><div class="form-group">
          {!!Form::label('Nombre del proyecto:')!!}
          {!!Form::textArea('NombreProyecto',null,['class'=>'form-control input-sm','rows'=>'3','placeholder'=>'Titulo del proyecto'])!!}
        </div>
        </td>


        </tr>
        <tr>

          <td>
             <div class="form-group">
          {!!Form::label('Opcion elegida:')!!}
         {!!Form::select('OpcionProyecto', ['Banco' => 'Banco de Proyectos', 'Propuesta' => 'Propuesta propia','Trabajador'=>'Trabajador']);!!}
        </div>
          </td>
        </tr>

        <tr>
          <td>


        <div class="form-group">
          {!!Form::label('Periodo Proyectado:')!!}
          {!!Form::text('Periodo',null,['class'=>'small-textareaDomicilio ','placeholder'=>'Periodo'])!!}
        </div>
          </td>

        </tr>
        <tr>
          <td>

          </td>
        </tr>

      </table>






</div>
</div>

</div>

<div class="container">
<div id="empresa" style='display:none'>

<!--Empresa-->

   <div class="fromEmpresa" >
     <!-- <div class="title"><h3>Datos de la Empresa</h3></div>-->
     <div style='text-align: center;'>
       <table   WIDTH="700" align=""  border="0" cellspacing="0" cellpadding="0"> <!-- Lo cambiaremos por CSS -->
        <caption>Empresa</caption>
        <tr>
          <td align="left" >
            {!!Form::label('rcf:')!!}
          </td >
          <td  colspan="5">
             {!!Form::open(['route'=>'Solicitud.store','method'=>'POST'])!!}
           {!!Form::text('RfcEmpresa',null,['class'=>' inputTexto','rows'=>'2','placeholder'=>'Introduce RFC'])!!}
         </td>
              <td></td>
               <td></td>
                <td></td>
                 <td></td>
          </tr>
          <tr>
              <td align="left">
          {!!Form::label('Giro, Ramo o Sector:')!!}
         </td>
              <td colspan="5">
               {!!Form::select('OpcionTipoGiro', ['industrial' => 'Industrial', 'servicios' => 'Servicios','publico'=>'Publico','privado'=>'Privado']);!!}

      </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
              <td align="left" >
          {!!Form::label('Domicilio:')!!}

       </td>
              <td colspan="5"  >
                {!!Form::text('DomicilioEmpresa',null,['class'=>' inputTexto ','rows'=>'2','placeholder'=>'Introduce el domicilio'])!!}
        </td>
              <td></td>
              <td></td>
              <td></td>
<!--Domicilio-->
          <tr>

           <td align="left" >
                       {!!Form::label('Colonia:')!!}
          </td>

          <td >
                       {!!Form::text('Colonia',null,['class'=>'inputTexto ','placeholder'=>'Introduce la colonia'])!!}
          </td>
          <br>

          <td align="left">
                    {!!Form::label('Codigo Postal:')!!}
          </td>
           <td colspan="1">
                {!!Form::text('CodigoPostal',null,['class'=>'inputTexto ','placeholder'=>'Codigo postal'])!!}
           </td>

          <td>


                  {!!Form::label('Fax:')!!}
                </td>
                <td align="left" colspan="1">
                 {!!Form::text('Fax',null,['class'=>'inputTexto  ','placeholder'=>'Fax'])!!}
             </td>
             <td></td>
           </tr><!--Domicilio Final de la fila-->
           <!--Siguiente Fila-->
           <tr>
             <td align="left">
          {!!Form::label('Ciudad:')!!}
             </td>
             <td colspan="1" >
          {!!Form::text('CiudadEmpresa',null,['class'=>'inputTexto','placeholder'=>'Introduce la ciudad'])!!}
             </td>

             <td align="left">

          {!!Form::label('Telefono Celular:')!!}
        </td>
             <td colspan="3">
                {!!Form::text('Telefono',null,['class'=>'inputTexto ','placeholder'=>'Introduce telefono celular'])!!}

             </td>
           </tr>

           <tr>

             <td  class="etiquetas" align="justify" >
          {!!Form::label('Mision de la empresa:')!!}
             </td>
             <td colspan="5" >
          {!!Form::textArea('Mision',null,['class'=>'inputTexto','rows'=>'4','placeholder'=>'Mision de la empresa'])!!}
            </td>
           </tr>
<!--Nombre del titular de la empresa-->
           <tr>

             <td align="left">


          {!!Form::label('Nombre del titular de la empresa:')!!}
             </td>
             <td colspan="1">
                  {!!Form::textarea('NombreTitularEmpresa',null,['class'=>'textarea inputTexto','style'=>'height:59px;width:327px;','rows'=>'1','placeholder'=>'Introduce el nombre completo'])!!}

             </td>
             <td aling="center">



          {!!Form::label('Puesto:')!!}
             </td>

              <td colspan="3">

          {!!Form::text('PuestoTitular',null,['class'=>'inputTexto ','placeholder'=>'Introduce el cargo','style'=>'height:59px;width:100%;'])!!}

              </td>
           </tr>
<!--Nombre del asesor externo-->
           <tr>
             <td  aling="center">
          {!!Form::label('Nombre del asesor externo:')!!}
             </td>
                <td colspan="1">

                   {!!Form::text('NombreAsesorExterno',null,['class'=>'inputTexto ','placeholder'=>'Introduce el nombre','style'=>''])!!}
                </td>



      <td>
          {!!Form::label('Puesto:')!!}

      </td>

      <td colspan="3">

          {!!Form::text('PuestoAsesorExterno',null,['class'=>'inputTexto ','placeholder'=>'Introduce el cargo'])!!}


      </td>

           </tr>

           <tr>
             <td class="etiquetas">
               {!!Form::label('Nombre de la persona que firmara el acuerdo de trabajo')!!}
             </td>
             <td colspan="1">

          {!!Form::text('NombrePersonaAcuerdo',null,['class'=>'inputTexto ','placeholder'=>'Introduce el nombre','style'=>'height:70px;width:327px;'])!!}
             </td>

             <td>
                {!!Form::label('Puesto:')!!}
             </td>

             <td colspan="3">
                {!!Form::text('PuestoEncargado',null,['class'=>'inputTexto ','placeholder'=>'Introduce el puesto','style'=>'height:70px;width:100%;'])!!}
             </td>

           </tr>
        </table>

         </div>



        <br><br>
        <div class="form-group">
           {!!Form::submit('Registrar Empresa',['class'=>'registro btn btn-primary'])!!}
           {!!Form::reset('Cancelar',['class'=>'Salir btn','data-dismiss'=>'modal'])!!}

           {!!Form::close()!!}
</div>



  </div>
</div>
</div>



</div>

   @if(count($errors)>0)
<div class="errores alert alert-danger pull-left " id="errores">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>

</div>
@endif
@endsection
