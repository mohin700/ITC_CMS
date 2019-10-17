<?php if(count($errors)): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="alert alert-danger alert-dismissible">
			    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    	<strong>Worning! </strong> <?php echo e($error); ?>	  
			    </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>	
	</div>	
<?php endif; ?>

<?php if(Session::has('success')): ?>
	<div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-12">
		    <div class="alert alert-success alert-dismissible">
		        <button type="button" class="close" data-dismiss="alert">&times;</button>
		        <strong>Success !!</strong> <?php echo e(Session::get('success')); ?>

		    </div>
		</div>	
	</div>	
<?php endif; ?>

<?php if(Session::has('error')): ?>
	<div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-12">
		    <div class="alert alert-danger alert-dismissible">
		        <button type="button" class="close" data-dismiss="alert">&times;</button>
		        <strong>Worning !!</strong> <?php echo e(Session::get('error')); ?>

		    </div>
		</div>	
	</div>	
<?php endif; ?><?php /**PATH /var/www/html/ems.test/resources/views/parts/message.blade.php ENDPATH**/ ?>