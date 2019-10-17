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
        <?php echo $__env->make('parts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="header">
                <h2>
                    All Employees 
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employee->employeeID); ?> </td>
                                <td><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></td>
                                <td><?php echo e($employee->designation); ?></td>
                                <td><?php echo e($employee->phone); ?></td>                                
                                <td><a href="<?php echo e(route('employee.show', $employee->id)); ?>"><i class="material-icons">remove_red_eye</i></a></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ems.test/resources/views/employee/employees.blade.php ENDPATH**/ ?>