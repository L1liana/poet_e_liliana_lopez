<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<section class="acerca-de">
<div class="info-container">
    <?php $__env->startSection('content'); ?>
</div>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('form'); ?>
    <div class="skew-arriba"></div>
        <div class="deg-footer"></div>

        <div class="ejeZfooter">
        <div class="footer-content">
        <div class="footer-title">
            <h2>Login</h2>
            <hr>
        </div>
        <div class="formulario-content">
        <form action="" method="post" id="formulario">
            <label for="user">Usurio</label>
            <input type="text" id="user" name="user" placeholder="Ingresar Usuario">

            <label for="pasword">Pasword</label>
            <input type="text" id="pasword" name="pasword" placeholder="Ingresar Pasword">

            <label for="key">Key</label>
            <input type="text" id="key" name="key" placeholder="Ingresar Key">
            <br>
            <input type="submit" value="submit">
        </form>
        </div>
        </div>
        </div>
        </footer>
    <?php $__env->stopSection(); ?>
</section>
<?php $__env->startSection('footer'); ?>
    Copyright:<?php echo e(date('Y')); ?> - Liliana López
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/admon/loging.blade.php ENDPATH**/ ?>