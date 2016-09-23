<?php $__env->startSection('page_heading','Datos de la empresa'); ?>
<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'empresa.store','method'=>'POST']); ?>

<?php echo Form::hidden('user_id',$user_id,['id'=>'user_id']); ?>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="nit">Nit</label>
				<?php echo Form::text('nit',$empresa1{'nit'},['id'=>'nit','required'=>'required','class'=>'form-control','placeholder'=>'Nit']); ?>

			</div>
			<div class="form-group">
				<label for="razonsocial">Razón Social</label>
				<?php echo Form::text('razonsocial',$empresa1{'razonsocial'},['id'=>'nit','required'=>'required','class'=>'form-control','placeholder'=>'Razón Social']); ?>				
			</div>
			<div class="form-group">
				<label for="pais">País</label>
				<?php echo Form::select('paises', $pais1,$empresa1{'pais'}, ['id' => 'paises','class'=>'form-control']); ?>

			</div>
			<div class="form-group">
				<label for="estado">Departamento/estado</label>    		
    			<?php echo Form::select('departamentos',$estados1,$empresa1{'estado'},['id'=>'departamentos','class'=>'form-control']); ?>    				
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
    			<?php echo Form::select('ciudad', $ciudades1,$empresa1{'ciudad'},['id'=>'ciudad','class'=>'form-control']); ?>				
			</div>
			<div class="form-group">
				<label for="direccion">Dirección</label>
				<?php echo Form::text('direccion',$empresa1{'direccion'},['id'=>'direccion','required'=>'required','class'=>'form-control','placeholder'=>'Dirección']); ?>				
			</div>
			<div class="form-group">
				<label for="telefono">Teléfono</label>
				<?php echo Form::text('telefono',$empresa1{'telefono'},['id'=>'telefono','required'=>'required','class'=>'form-control','placeholder'=>'Teléfono']); ?>

			</div>
			<div class="form-group">
				<label for="correo">Correo</label>
				<?php echo Form::email('correo',$empresa1{'correo'},['id'=>'correo','required'=>'required','class'=>'form-control','placeholder'=>'Correo']); ?>

			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" > <?php echo e($texto); ?>  </button>
			</div>
		</div>
	</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>