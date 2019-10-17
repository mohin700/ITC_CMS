﻿﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset('back/plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
     <link href="<?php echo e(asset('back/plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo e(asset('back/plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo e(asset('back/css/style.css')); ?>" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">



        <div class="logo">    
            <div class="py-3 text-center">
              <img class="d-block mx-auto mb-4" src="<?php echo e(asset('front/img/logo.png')); ?>" alt="" >
              <hr class="mb-3">
            </div>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo e(route('user.login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="msg">Please Enter Valid Credential</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8">
                            <button class="btn btn-block bg-success waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row clearfix">
            <?php echo $__env->make('parts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('/back/plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('/back/plugins/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('/back/plugins/node-waves/waves.js')); ?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo e(asset('/back/plugins/jquery-validation/jquery.validate.js')); ?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo e(asset('/back/js/admin.js')); ?>"></script>
    <script src="<?php echo e(asset('/back/js/pages/examples/sign-in.js')); ?>"></script>
</body>

</html><?php /**PATH /var/www/html/ems.test/resources/views/login.blade.php ENDPATH**/ ?>