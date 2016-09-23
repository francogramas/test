<?php $__env->startSection('page_heading',''); ?>
<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'prueba.store','method'=>'POST']); ?>

<?php echo Form::hidden('etapa_id',$etapa,['id'=>'etapa_id']); ?>

<?php echo Form::hidden('user_id',$user_id,['id'=>'user_id']); ?>

<?php echo Form::hidden('estado_id',1,['id'=>'estado_id']); ?>


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
	</style>
	<section class="preguntas" >
		<?php echo e($pregunta); ?>

	</section>
	<section class="respuestas">
		<div class="form-group" >
			<button type="submit" class="respuestas" ><i class="fa item-pregunta"><span class="respuesta"> <?php echo e($respuesta1); ?> </span> </i> </button>
		</div>
		<div class="form-group" >
			<button type="submit" class="respuestas" > <i class="fa item-pregunta"><span class="respuesta"> <?php echo e($respuesta2); ?> </span> </i> </button>			
		</div>		
		<div class="form-group" >
			<button type="submit" class="respuestas" > <i class="fa item-pregunta"><span class="respuesta"> <?php echo e($respuesta3); ?> </span> </i> </button>			
		</div>
	</section>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>