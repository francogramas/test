@extends('layouts.app')
@section('page_heading','')
@section('content')

{!! Form::open(['route' => 'test.store','method'=>'POST']) !!}
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
	
	{!! Form::hidden('user_id',$user_id,['id'=>'user_id']) !!}
	{!! Form::hidden('evaluacion_id',$evaluacion_id,['id'=>'evaluacion_id']) !!}
	{!! Form::hidden('estado_id',$estado_id,['id'=>'estado_id']) !!}
	{!! Form::hidden('pregunta_id',$pregunta{'id'},['id'=>'pregunta_id']) !!}
	{!! Form::hidden('respuesta_id',null,['id'=>'respuesta_id']) !!}	
	
	<section>
		Su progreso en el test...
		@include('widgets.progress', array('class'=> 'success', 'animated'=> true, 'value'=>$valorBarra))		
	</section>

	<section class="preguntas" >
		{{ $pregunta{'pregunta'} }}
	</section>
	<section>
		<img src={{ $preguntaimagen{'imagen_id'} }} {{ $mostrar }} {{ $mostrar }} >
	</section>
	<section>		
			<table>
				<tbody>
					@foreach ($respuestas as $respuesta)
						<tr>
							<td>
								<button type="submit" class="respuestas" name= {{ "agregar".$respuesta->id }} value={{ $respuesta->id  }} > <i class="fa item-pregunta"><span class="respuesta"> {{ $respuesta->respuesta }}</span> </i> </button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>		
	</section>	

{!! Form::close() !!}

@stop