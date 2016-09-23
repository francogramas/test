<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">        
        <div class="col-sm-4">           
           <img src="/images/logo_texto.png" alt="" width="100%">
           <img src="/images/fondoEmprender.png" alt="" width="100%">                      
        </div>
        <div class="col-sm-4">
           <img src="/images/logo_sena.png" alt="" width="100%">                       
        </div>       
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form  role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>                    
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">                            
                            <div class="col-md-10">
                            <label for="email" class="control-label">Correo Electrónico</label>
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">                            
                            <div class="col-md-10">
                                <label for="password" class="control-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
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
                                        <a class="btn btn-info" href="<?php echo e(url('/register')); ?>">Nuevo usuario</a>
                                    </div>
                                </div>                                

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>