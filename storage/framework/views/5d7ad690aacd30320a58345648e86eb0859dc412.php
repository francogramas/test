<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Test Capere.1</title>    
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset("assets/stylesheets/themes/base/jquery-ui.css")); ?>" />    
    <link rel="stylesheet" href="<?php echo e(asset("assets/stylesheets/styles.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("assets/stylesheets/estilos.css")); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <table>
                    <tr>                    
                        <td><img src="/images/logoPeq.png" alt=""></td>
                        <td><h3>Test Capere.1</h3> </td>
                    </tr>
                </table>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Nuevo Usuario</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo e(url('/logout')); ?>"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>    
     <div id="page-wrapper1">
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $__env->yieldContent('page_heading'); ?></h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
            <div class="row">
                <?php echo $__env->make('partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- /#page-wrapper -->
        </div>
    
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    
    <?php echo Html::script('assets/scripts/jquery-ui.min.js'); ?>

    <?php echo Html::script('js/dropdown.js'); ?>


</body>
</html>
