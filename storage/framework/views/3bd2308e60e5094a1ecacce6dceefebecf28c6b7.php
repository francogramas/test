<?php $__env->startSection('page_heading',''); ?>
<?php $__env->startSection('content'); ?>

<?php echo Form::open(['route' => 'introduccion.store','method'=>'POST']); ?>

<?php echo Form::hidden('etapa_id',$etapa,['id'=>'etapa_id']); ?>

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
	<section class="preguntas" >
		<?php echo e($mensaje); ?>

	</section>

	<section>
		<div class="form-group boton" >
			<button type="submit" class="btn btn-lg btn-success" > <b>Continuar</b>  </button>
		</div>
	</section>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>