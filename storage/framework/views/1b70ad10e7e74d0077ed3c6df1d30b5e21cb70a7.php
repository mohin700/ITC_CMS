<!-- Page Title -->
<?php $__env->startSection('title', 'Dashboard'); ?>

<!-- Custom Styles -->
<?php $__env->startPush('custom-style'); ?>

<!-- JQuery DataTable Css -->
<link href="<?php echo e(asset('back/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">
   
<?php $__env->stopPush(); ?>

<!-- Main Content Area -->
<?php $__env->startSection('main-content-area'); ?>
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ALL USERS
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->role->title); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->

<?php $__env->stopSection(); ?>



<!-- Custom Scripts -->
<?php $__env->startPush('custom-scripts'); ?>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo e(asset('back/plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('back/plugins/jquery-datatable/extensions/export/buttons.print.min.js')); ?>"></script>

<!-- Custom Js -->
 <script src="<?php echo e(asset('back/js/pages/tables/jquery-datatable.js')); ?>"></script>

   
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ems.test/resources/views/admin/allusers.blade.php ENDPATH**/ ?>