<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<section class="acerca-de">
    <div class="info-container">
        <?php $__env->startSection('content'); ?>
            <h1>Login Exitoso</h1>
    </div>
    <?php $__env->stopSection(); ?>
</section>
<?php $__env->startSection('footer'); ?>
    Copyright:<?php echo e(date('Y')); ?> - Liliana López
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/admon/dash.blade.php ENDPATH**/ ?>