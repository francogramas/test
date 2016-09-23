<?php if(count($errors)>0): ?>
	<div class="alert alert-warning" role="alert">
	    <strong>Error!</strong>
	    <ul>
	    	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	    		<li><?php echo e($error); ?></li>
	    	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	    	
	    </ul>
	</div>
<?php endif; ?>

<?php if(Session::has('update')): ?>
	<div class="alert alert-success" rol="alert">
		<strong> <?php echo Session::get('update'); ?> </strong>
	</div>
<?php endif; ?>

<?php if(Session::has('save')): ?>
	<div class="alert alert-success" rol="alert">
		<strong> <?php echo Session::get('save'); ?>  </strong>
	</div>
<?php endif; ?>

<?php if(Session::has('delete')): ?>
	<div class="alert alert-success" rol="alert">
		<strong><?php echo Session::get('delete'); ?> </strong>
	</div>
<?php endif; ?>

<?php if(Session::has('inicial')): ?>
	<div class="alert alert-warning" rol="alert">
		<strong><?php echo Session::get('inicial'); ?> </strong>
	</div>
<?php endif; ?>