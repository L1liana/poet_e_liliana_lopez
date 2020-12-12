<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<section class="acerca-de">
    <?php $__env->startSection('pintor'); ?>
        <?php echo e($pintor); ?>

    <?php $__env->stopSection(); ?>
    <div class="info-container">
        <?php $__env->startSection('content'); ?>
        <div class="container-all">
            <img src="/img/adolf.jpg" alt="">
            <h2>Biografía</h2>
            <p>Adolf Wölfli fue un hombre trastornado, desequilibrado e incomprendido, pero con un don innato y admirable para el arte. <br>
                Wölfli nació en Berna, Suiza, en 1864. Tuvo una infancia difícil, pues su padre los abandonó cuando tenía 7 años y luego su madre lo dejó con una familia de campesinos, donde aprendió los oficios de la madera y la agricultura. Unos años más tarde fue acusado de «conducta indecente» —se piensa que fue intento de abuso infantil o algún desorden provocado por sus desequilibrios mentales—, por lo que terminó en la cárcel. Al cumplir la condena volvió a cometer el mismo tipo de crimen, por lo que en 1899, las autoridades consideraron que lo mejor era internarlo en el hospital psiquiátrico de Waldau, cerca de Berna, donde estaría hasta el día de su muerte. <br>
                Wölfli sufría de alucinaciones y psicosis, y los doctores del asilo se dieron cuenta de que dándole lápices de colores lo podían mantener tranquilo y sin molestar a los demás internos. Wölfli empezó a dibujar, escribir y componer música a los 35 años; nadie se imaginó que dentro de una mente tan atormentada y en una persona sin preparación artística, hubiera lugar para las obras que sería capaz de crear. <br>
                El doctor Walter Morgenthaler —quien le regalaba colores cada Navidad— se convertiría en el primer coleccionista de su obra, y así, decidió que ésta la debía conocer el mundo al haber sido creada por un artista sin estudios y con problemas mentales. Morgenthaler escribió el libro Ein Geisteskranker als Künstler —Un paciente psiquiátrico como artista—, donde describía a Wölfli y sus logros. <br>
                Wölfli creó una narrativa ilustrada, From the Cradle to the Grave —De la cuna a la tumba— (1908-1912) de casi 3 mil páginas —mediante el uso de textos, dibujos, collage, composiciones musicales y una mitología propia—, a través de la cual replanteó la historia de su infancia. En este libro narra la historia de un niño llamado Doufi, quien viaja por el mundo, y está ilustrado con imágenes de edificios, construcciones, mapas, retratos, animales y plantas, todos inventados por él. <br>
                El trabajo de Wölfli fue controversial para las convenciones de su época debido a la forma, a pesar de que el contenido no era tan polémico. <br>
                Luego escribió Geographic and Algebraic Books —Libros geográficos y algebraicos—(1912-1916), una colección que describe una nueva forma para construir el futuro, y se concentra en la creación de numerosas ilustraciones y notaciones musicales. Sus últimos trabajos los firma con varios sobrenombres, pero el último que utiliza es «St. Adolf ii», confiriéndose a sí mismo una nueva identidad, lograda después de tantos años de trabajo. <br>
                Wölfli falleció en 1930, y 45 años más tarde, Elka Spoerri creó la Fundación Adolf Wölfli para la conservación de su obra, cuyos trabajos se exponen en el Kunstmuseum Bern.
            </p>
        </div>
        <h2 class="sub">Obras más importantes</h2>
        <?php $__env->stopSection(); ?>
        <div class="about-gallery">
        <?php $__env->startSection('obras'); ?>
            <img src="/img/ad1.jpg" alt="">
            <img src="/img/ad2.jpg" alt="">
            <img src="/img/ad3.jpg" alt="">
            <img src="/img/ad4.jpg" alt="">
            <img src="/img/ad5.jpg" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <?php $__env->stopSection(); ?>
    </div>
</section>
<?php $__env->startSection('footer'); ?>
    Copyright:<?php echo e(date('Y')); ?> - Liliana López
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/adolf.blade.php ENDPATH**/ ?>