<!-- Page Title -->
<?php $__env->startSection('title', 'Create User'); ?>

<!-- Custom Styles -->
<?php $__env->startPush('custom-style'); ?>
    <!-- Bootstrap Select Css -->
    <link href="<?php echo e(asset('/back/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet"/>


    <!-- Bootstrap DatePicker Css -->
     <link href="<?php echo e(asset('/back/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')); ?>" rel="stylesheet"/>    



<?php $__env->stopPush(); ?>

<!-- Page Heading  -->
<?php $__env->startSection('page-head', 'Add New Employee'); ?>

<!-- Main Content Area -->
<?php $__env->startSection('main-content-area'); ?>

<div class="row clearfix">
    <?php echo $__env->make('parts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Enter Valid Employee Informations</h2>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="<?php echo e(route('employee.update', $employee->id)); ?>" enctype="multipart/form-data" autocomplete="off">
                    <?php echo csrf_field(); ?>


                    <div class="row"> 
                        <div class="col-md-6">
                           <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->employeeID); ?>" name="employeeID" type="text" class="form-control">
                                    <label class="form-label" >Employee ID*</label>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->email); ?>" name="email" type="email" class="form-control" >
                                    <label class="form-label" >Employee Email*</label>
                                </div>
                            </div>  
                        </div>

                    </div>    

                    <div class="row">
                       
                        <div class="col-md-6">
                           <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->phone); ?>" name="phone" type="text" class="form-control">
                                    <label class="form-label" >Phone Number*</label>
                                </div>
                            </div>  
                        </div>

                        <div class="col-md-6">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->designation); ?>" type="text" class="form-control" name="designation" >
                                    <label class="form-label" >Designation*</label>
                                </div>
                            </div>
                            
                        </div>

                    </div>    

                    <div class="row clearfix">

                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->first_name); ?>" type="text" class="form-control" name="first_name" >
                                    <label class="form-label" >First Name*</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input value="<?php echo e($employee->last_name); ?>" type="text" class="form-control" name="last_name" >
                                    <label class="form-label" >Last Name*</label>
                                </div>
                            </div>
                            
                        </div>

                    </div>    

                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->


<?php $__env->stopSection(); ?>


<!-- Custom Scripts -->
<?php $__env->startPush('custom-scripts'); ?>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?php echo e(asset('/back/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>




<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ems.test/resources/views/employee/edit.blade.php ENDPATH**/ ?>