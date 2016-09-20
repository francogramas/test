<?php $__env->startSection('page_heading',''); ?>
<?php $__env->startSection('content'); ?>

<?php echo Form::open(['route' => 'test.store','method'=>'POST']); ?>

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
	
	<?php echo Form::hidden('user_id',$user_id,['id'=>'user_id']); ?>

	<?php echo Form::hidden('evaluacion_id',$evaluacion_id,['id'=>'evaluacion_id']); ?>

	<?php echo Form::hidden('estado_id',$estado_id,['id'=>'estado_id']); ?>

	<?php echo Form::hidden('pregunta_id',$pregunta{'id'},['id'=>'pregunta_id']); ?>

	<?php echo Form::hidden('respuesta_id',null,['id'=>'respuesta_id']); ?>	
	
	<section>
		Su progreso en el test...
		<?php echo $__env->make('widgets.progress', array('class'=> 'success', 'animated'=> true, 'value'=>$valorBarra), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>		
	</section>

	<section class="preguntas" >
		<?php echo e($pregunta{'pregunta'}); ?>

	</section>
	<section>
		<img src=<?php echo e($preguntaimagen{'imagen_id'}); ?> <?php echo e($mostrar); ?> <?php echo e($mostrar); ?> >
	</section>
	<section>		
			<table>
				<tbody>
					<?php $__currentLoopData = $respuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $respuesta): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<tr>
							<td>
								<button type="submit" class="respuestas" name= <?php echo e("agregar".$respuesta->id); ?> value=<?php echo e($respuesta->id); ?> > <i class="fa item-pregunta"><span class="respuesta"> <?php echo e($respuesta->respuesta); ?></span> </i> </button>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>		
	</section>	

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>