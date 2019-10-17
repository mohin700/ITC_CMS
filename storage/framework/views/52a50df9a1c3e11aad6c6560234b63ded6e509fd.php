<?php if( auth()->user()->role->slug === 'admin' ): ?>
    <?php echo $__env->make('parts.admin.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif( auth()->user()->role->slug === 'editor' ): ?>
    <?php echo $__env->make('parts.editor.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif( auth()->user()->role->slug === 'viewer' ): ?>
    <?php echo $__env->make('parts.viewer.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
<?php endif; ?><?php /**PATH /var/www/html/ems.test/resources/views/parts/leftmenu.blade.php ENDPATH**/ ?>