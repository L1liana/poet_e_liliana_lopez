<?php if(isset($user) and is_object($user)): ?>
    <?php
        $title='Modificación de un Poeta';
        $boton = 'Actualizar';
        $id = $user->Poet_code;
        $First_name = $user->First_name;
        $Surname = $user->Surname;
        $Address = $user->Address;
        $Postcode = $user->Postcode;
        $Telephone_number = $user->Telephone_number;
    ?>
<?php else: ?>
    <?php
        $title='Dar de alta un nuevo poeta';
        $boton = 'Dar de alta';
        $id = '';
        $First_name = '';
        $Surname = '';
        $Address = '';
        $Postcode = '';
        $Telephone_number = '';
    ?>
<?php endif; ?>
<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="alta">
        <a href="<?php echo e(action('Crud@create')); ?>">Agregar un nuevo Poeta</a>
    </div>
<section class="form-register">
<form action="<?php echo e(isset($user) ? action('Crud@update') :action('Crud@store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php if(isset($user) and is_object($user)): ?>
        <input type="hidden" name="id" value="<?php echo e($id); ?>">
    <?php endif; ?>
    <h4><?php echo e($title); ?></h4>
    <label for="First_name"> First Name </label>
    <input class="controls" type="text" name="First_name" value="<?php echo e($First_name); ?>" placeholder="Ingrese su primer Nombre">
    <br>
    <label for="Surname"> Surname </label>
    <input class="controls" type="text" name="Surname" value="<?php echo e($Surname); ?>" placeholder="Ingrese su Apellido">
    <br>
    <label for="Address"> Address </label>
    <input class="controls" type="email" name="Address" value<?php echo e($Address); ?> placeholder="Ingrese su Correo">
    <br>
    <label for="Postcode"> Postcode </label>
    <input class="controls" type="text" name="Postcode" value="<?php echo e($Postcode); ?>" placeholder="Ingrese su Codigo Postal">
    <br>
    <label for="Telephone_number"> Telephone number </label>
    <input class="controls" type="text" name="Telephone_number" value="<?php echo e($Telephone_number); ?>" placeholder="Ingrese su Número Telefonico">
    <input class="botons" type="submit" value="<?php echo e($boton); ?>">
</form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\poets\resources\views/crud/altaUsuario.blade.php ENDPATH**/ ?>