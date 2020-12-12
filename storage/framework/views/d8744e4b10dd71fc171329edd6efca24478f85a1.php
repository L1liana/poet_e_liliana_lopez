<?php if(isset($user) and is_object($user)): ?>
    <?php
        $title='Modificación de un Usuario';
        $boton = 'Actualizar';
        $id = $user->idUsuario;
        $Usuario = $user->Usuario;
        $password = $user->password;
        $key = $user->key;
    ?>
<?php else: ?>
    <?php
        $title='Alta de Usuario';
        $boton = 'Dar de alta';
        $id = '';
        $Usuario = '';
        $password = '';
        $key = '';
    ?>
<?php endif; ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<section class="acerca-de">
    <?php $__env->startSection('pintor'); ?>

    <?php $__env->stopSection(); ?>
    <div class="info-container">
        <?php $__env->startSection('content'); ?>
        <form action="<?php echo e(isset($user) ? action('Crud@update') :action('Crud@store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php if(isset($user) and is_object($user)): ?>
                <input type="hidden" name="id" value="<?php echo e($id); ?>">
            <?php endif; ?>
            <label for="usuario"> Usuario</label>
            <input type="text" name="usuario" value="<?php echo e($Usuario); ?>">
            <br>
            <label for="clave"> Password</label>
            <input type="password" name="clave" value="<?php echo e($password); ?>">
            <br>
            <label for="llave"> Key</label>
            <input type="text" name="llave" value="<?php echo e($key); ?>">
            <br>
            <input type="submit" value="<?php echo e($boton); ?>">
        </form>
        <?php $__env->stopSection(); ?>
    </div>
        <div class="about-gallery">

        </div>
</section>
<?php $__env->startSection('footer'); ?>
    Copyright:<?php echo e(date('Y')); ?> - Liliana López
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/crud/altaUsuario.blade.php ENDPATH**/ ?>