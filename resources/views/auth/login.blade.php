@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
           <h3> Bievenido al test Caper1</h3>
        </div>
        <div class="col-sm-4">
            <h3>Informacion de Apoyo-Logos</h3>
        </div>
        <div class="col-sm-4">
              <div">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                            
                            <div class="col-md-10">
                            <label for="email" class="control-label">Correo Electrónico</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                            <div class="col-md-10">
                                <label for="password" class="control-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuerdar cuenta
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary">Ingresar</button>
                                    </div>
                                    <div class="col-sm-4">
                                        <a class="btn btn-info" href="{{ url('/register') }}">Nuevo usuario</a>
                                    </div>
                                </div>                                

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>          
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h4>Si hay algo mas que infomar va acá</h4>    
        </div>        
    </div>
</div>
@endsection
