@extends('layouts.app')
@section('page_heading','')
@section('content')

{!! Form::open(['route' => 'introduccion.store','method'=>'POST']) !!}
{!! Form::hidden('etapa_id',$etapa,['id'=>'etapa_id']) !!}
	<style type="text/css" media="screen">
		.preguntas{
			font-family: 'Shadows Into Light Two', cursive; font-size:16px; 
			font-size: 32px; 
			font-weight: bold; 
			display: block; 
			padding-right: 100px;
		}
		.boton{
			text-align: center;
			display: block; 
			padding-right: 100px;
		}
	</style>
	 {{ csrf_field() }}	
	<section class="preguntas" >
		{{ $mensaje }}
	</section>

	<section>
		<div class="form-group boton" >
			<button type="submit" class="btn btn-lg btn-success" > <b>Continuar</b>  </button>
		</div>
	</section>
{!! Form::close() !!}
@stop