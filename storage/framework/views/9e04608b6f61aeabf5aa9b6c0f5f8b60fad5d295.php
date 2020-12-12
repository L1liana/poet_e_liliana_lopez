<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('iside'); ?>
##parent-placeholder-3779ca410884c58202c9bbbf8c7cbb9bec8b9803##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Poetas</h1>
    <div class="u">
        <a href="<?php echo e(action('Crud@create')); ?>">Agregar un nuevo Poeta</a>
    </div>
    <div id="main-container">
        <table class="lol">
            <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Telephone number</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $poet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->Poet_code); ?></td>
                    <td><?php echo e($user->First_name); ?></td>
                    <td><?php echo e($user->Surname); ?></td>
                    <td><?php echo e($user->Address); ?></td>
                    <td><?php echo e($user->Postcode); ?></td>
                    <td><?php echo e($user->Telephone_number); ?></td>
                    <td><a href="<?php echo e(action('Crud@show',['id'=>$user->Poet_code])); ?>"><img src="/img/r.png"></a></td>
                    <td><a href="<?php echo e(action('Crud@destroy',['id'=>$user->Poet_code])); ?>"><img src="/img/e.png"></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\poets\resources\views/crud/showUsuarios.blade.php ENDPATH**/ ?>