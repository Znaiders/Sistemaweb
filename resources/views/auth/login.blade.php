@extends('layouts.app')
@section('content')
<div class="container" ><br><br><br><br>
    <div class="row">
        <div class="col-sm-8 col-md-offset-2" >
            <div class="panel panel-default" >
                <div class="panel-heading"><font size=5 face= "Comic Sans MS, arial, verdad">Ingresar</div></font>
                <div class="panel-body" style="background-color: #81BEF7;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><font size=3>Correo Electronico</label></font>

                            <div class="col-md-6">
                                <input id="email"  style="font-family: Arial; font-size: 14pt; " type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><font size=3>Contraseña</label></font>

                            <div class="col-md-6">
                                <input id="password"  style="font-family: Arial; font-size: 10pt; " type="password" class="form-control" name="password" required />

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <font size=2><strong>{{ $errors->first('password') }}</strong></font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
