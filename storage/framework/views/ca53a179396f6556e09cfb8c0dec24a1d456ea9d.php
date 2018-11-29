<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Inventory Project</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('DataTables-1.10.18/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Inventory Project
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
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
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

        <div class="container">
            <div class="row">
                <?php if(Auth::guest()): ?>
                    <div class="col-md-8 col-md-offset-2">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                <?php else: ?>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="<?php echo e(asset('/')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(asset('/vendor')); ?>">Vendor</a></li>
                                    <li><a href="<?php echo e(asset('/customer')); ?>">Customer</a></li>
                                    <li><a href="<?php echo e(asset('/product')); ?>">Product</a></li>
                                    <li><a href="<?php echo e(asset('/purchase')); ?>">Purchase Order</a></li>
                                    <li><a href="<?php echo e(asset('/sales')); ?>">Sales Order</a></li>
                                    <li><a href="<?php echo e(asset('/stock')); ?>">Stock</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('DataTables-1.10.18/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        } );
    </script>
</body>
</html>
