<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('parts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="theme-blue-grey">
    <!-- Page Loader -->
    <?php echo $__env->make('parts.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <?php echo $__env->make('parts.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php echo $__env->make('parts.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><?php echo $__env->yieldContent('page-head', 'DASHBOARD' ); ?></h2>
            </div>
  
            <?php echo $__env->yieldContent('main-content-area'); ?>
        </div>  
    </section>

    <?php echo $__env->make('parts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH /var/www/html/ems.test/resources/views/layouts/app.blade.php ENDPATH**/ ?>