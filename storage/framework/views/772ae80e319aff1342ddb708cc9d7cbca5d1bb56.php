<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<section class="acerca-de">
    <?php $__env->startSection('pintor'); ?>

    <?php $__env->stopSection(); ?>
    <div class="info-container">
        <?php $__env->startSection('content'); ?>
        <div>
            <a href="<?php echo e(action('Crud@create')); ?>">Agregar un nuevo usuario</a>
        </div>
        <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Password</th>
                        <th scope="col">Llave</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->idUsuario); ?></td>
                        <td><?php echo e($user->Usuario); ?></td>
                        <td><?php echo e($user->password); ?></td>
                        <td> <?php echo e($user->key); ?></td>
                        <td><a href="<?php echo e(action('Crud@show',['id'=>$user->idUsuario])); ?>">actualizar</a></td>
                        <td><a href="<?php echo e(action('Crud@destroy',['id'=>$user->idUsuario])); ?>">borar</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        <?php $__env->stopSection(); ?>
        <div class="about-gallery">

    </div>
</section>
<?php $__env->startSection('footer'); ?>
    Copyright:<?php echo e(date('Y')); ?> - Liliana López
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/crud/showUsuarios.blade.php ENDPATH**/ ?>