<!-- Ir Arriba -->
<div class="go-top">
    <span class="fas fa-angle-up"></span>
</div>

<!-- Menu de Navegacion -->
<header id="header">
    <?php $__env->startSection('menu'); ?>
    <nav class="menu">
        <div class="logo-box">
            <h1><a href="#">Pintores</a></h1>
            <span class="btn-menu"><i class="fas fa-bars"></i></span>
        </div>

        <div class="list-container">
            <ul class="lists">
                <li><a href="/" class="active">Login</a></li>
                <li><a href="<?php echo e(action('Controlador@adolf')); ?>">Adolf Wolfli</a></li>
                <li><a href="<?php echo e(action('Controlador@edvar')); ?>">Edvard Munch</a></li>
                <li><a href="<?php echo e(action('Controlador@t')); ?>">Theodore gericault</a></li>
                <li><a href="<?php echo e(action('Controlador@l')); ?>">Leonardo Da Vinci</a></li>
                <li><a href="<?php echo e(action('Controlador@o')); ?>">Louis Wain</a></li>
                <li><a href="<?php echo e(action('Controlador@v')); ?>">Vincent van Gogh</a></li>
            </ul>
        </div>
    </nav>
    <?php echo $__env->yieldSection(); ?>
</header>
    </body>
    </html>
<?php /**PATH C:\laragon\www\pintores\resources\views/includes/navbar.blade.php ENDPATH**/ ?>