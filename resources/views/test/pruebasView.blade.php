@extends('layouts.app')
@section('page_heading','')
@section('content')
{!! Form::open(['route' => 'prueba.store','method'=>'POST']) !!}
{!! Form::hidden('etapa_id',$etapa,['id'=>'etapa_id']) !!}
{!! Form::hidden('user_id',$user_id,['id'=>'user_id']) !!}
{!! Form::hidden('estado_id',1,['id'=>'estado_id']) !!}

	<style type="text/css" media="screen">		
		.preguntas{
			font-family: 'Shadows Into Light Two', cursive; font-size:16px; 
			font-size: 36px; 
			font-weight: bold; 
			display: block; 
			padding-right: 100px;
		}
		.respuestas {
			font-family: 'Shadows Into Light Two', cursive; font-size:16px; 
			font-size: 26px; 
			font-weight: bold;
			background-color: transparent;
			border:none; 
		}
		.respuesta{
			font-family: 'Shadows Into Light Two', cursive; font-size:16px; 
			font-size: 26px; 
			font-weight: bold;
		}
		
		.boton{
			text-align: center;
			display: block; 
			padding-right: 100px;
		}
		.item-pregunta:before{			
			content: "\f096";
			opacity: 0.3;
    		top: -20px;
			-webkit-transition: all 2s ease ;
     		-moz-transition: all 2s ease ;
       		-o-transition: all 2s ease ;
      		-ms-transition: all 2s ease ;
          	transition: all 2s ease ;
			
		}

		.item-pregunta:hover:before {
			content: "\f046" ;
			opacity: 1;
    		top: 0px;
			-webkit-transition: all 2s ease;
     		-moz-transition: all 2s ease ;
       		-o-transition: all 2s ease ;
      		-ms-transition: all 2s ease ;
          	transition: all 2s ease ;
			
		}
	</style>
	
	 {{ csrf_field() }}
	<section class="preguntas" >
		{{ $pregunta }}
	</section>
	<section class="respuestas">
		<div class="form-group" >
			<button type="submit" class="respuestas" ><i class="fa item-pregunta"><span class="respuesta"> {{ $respuesta1 }} </span> </i> </button>
		</div>
		<div class="form-group" >
			<button type="submit" class="respuestas" > <i class="fa item-pregunta"><span class="respuesta"> {{ $respuesta2 }} </span> </i> </button>			
		</div>		
		<div class="form-group" >
			<button type="submit" class="respuestas" > <i class="fa item-pregunta"><span class="respuesta"> {{ $respuesta3 }} </span> </i> </button>			
		</div>
	</section>
{!! Form::close() !!}
@stop