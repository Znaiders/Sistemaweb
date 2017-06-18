@extends ('welcome')

@section('contenido')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagina web</title>

      {!!Html::style('css/bootstrap.min.css')!!}
      {!!Html::style('css/miEstilo/estilos.css')!!}
       
  </head>
  <body>
   <br><br><br><br>
    <h3>Registrar Proyecto</h3>
  <div class="container">


        @if ($errors->any())

     <div class="alert alert-danger" role="alert">

        <p> Por favor corrige los errores</p>

        <ul>
        @foreach($errors->all() as $error)
      <li>  {{ $error }} </li>
        @endforeach
            </ul>
        @endif
        </div>
      
      <div class= "container form-center">

    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
        <div class="form-group">
          {!!Form::label('Descripcion:')!!}
          {!!Form::textArea('NombreProyecto',null,['class'=>'texto input-sm','rows'=>'2','placeholder'=>'Descripcion del proyecto'])!!}
        </div>
        
    

         <div class="form-group">
          {!!Form::label('file','File')!!}
          {!!Form::file('ProyectoPdf',null,['class'=>'form-control','placeholder'=>'ingresa el nombre','required'])!!}
        </div>      
          {!!Form::submit('Registrar',['class'=>'registro btn btn-primary'])!!}          {!!Form::reset('Borrar',['class'=>'Salir btn','data-dismiss'=>'modal'])!!}

          {!!Form::close()!!}

</div>


</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>

@stop