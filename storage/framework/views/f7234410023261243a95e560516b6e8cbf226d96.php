<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<section class="acerca-de">
    <?php $__env->startSection('pintor'); ?>
        <?php echo e($pintor); ?>

    <?php $__env->stopSection(); ?>
    <div class="info-container">
        <?php $__env->startSection('content'); ?>
            <div class="container-all">
                <img src="/img/ed.jpg" alt="">
                <h2>Biografía</h2>
                <p>(Loten, Noruega, 1873 - Ekely, cerca de Oslo, id., 1944) Pintor y grabador noruego. La estilización de la figura, la prolongación de las líneas y, en ocasiones, el intenso dramatismo y la intensidad cromática, hicieron del estilo pictórico del noruego Edvard Munch uno de los modelos estéticos del expresionismo de las primeras décadas del siglo XX. <br>
                    Edvard Munch <br>
                    Sufrió muy joven la pérdida de sus seres queridos, y el espectro de la muerte, que llenó su niñez, lo acompañaría durante toda su vida, convirtiéndose en uno de los temas recurrentes en sus obras. En 1885 llevó a cabo el primero de sus numerosos viajes a París, donde conoció los movimientos pictóricos más avanzados y se sintió especialmente atraído por el arte de Paul Gauguin y Henri de Toulouse-Lautrec. No tardó en crear un estilo sumamente personal, basado en acentuar la fuerza expresiva de la línea, reducir las formas a su expresión más esquemática y hacer un uso simbólico, no naturalista, del color, y de ahí su clasificación como pintor simbolista. <br>
                    De 1892 a 1908 vivió en Alemania, sobre todo en Berlín, aunque hizo frecuentes viajes a Noruega y París. En Berlín presentó en 1892 una exposición que tuvo que ser retirada por el escándalo que suscitó y que dio pie a la creación de la Secesión Berlinesa. En Noruega contó pronto entre sus amistades con importantes personalidades políticas y literarias y tuvo particular afinidad con el realismo social del dramaturgo Henrik Ibsen, para quien realizó los escenarios y el vestuario de la obra Peer Gynt en 1896. <br>
                    En 1908 Edvard Munch, después de una tormentosa relación sentimental y víctima del alcohol, sufrió una grave enfermedad nerviosa, por lo que tuvo que ser recluido en el psiquiátrico del doctor Jacobsen, en Copenhague, del que salió completamente restablecido. En 1908 volvió definitivamente a Noruega, donde recibió algunos encargos oficiales (pinturas del paraninfo de la Universidad de Oslo) y pasó sus últimos años en soledad. Munch legó a la ciudad de Oslo todas las obras que conservó hasta su muerte, acaecida en 1944. <br>
                    El grito (1893), de Edvard Munch <br>
                    La obra de Edvard Munch se caracteriza por un sentido trágico de la vida y de la muerte, propio de toda la literatura escandinava de Henrik Ibsen a August Strindberg. A pesar de que sus primeras pinturas recibieron la influencia de los impresionistas, pues conoció bien la obra de Gauguin y Van Gogh, en seguida se inclinó por la idea de plasmar los sentimientos, por exteriorizar las sensaciones de angustia y soledad del ser humano. Su etapa de madurez está impregnada de ese "sentimiento trágico" que tanto caracterizó a los románticos, pero extraído del contexto propio del Romanticismo y llevado a sus últimas consecuencias, otorgándole un valor "absoluto", como algo de lo que el hombre no se puede liberar. <br>
                    En la pintura de Munch aparece el rostro del mundo alimentado por esas fuerzas desconocidas que forman parte también de la condición humana. Su ambicioso proyecto titulado El friso de la vida (1893-1918), al que pertenecen sin duda sus cuadros más representativos, refleja los sentimientos y las obsesiones humanas. Veintidós de esas pinturas fueron expuestas, en 1902, en la muestra del grupo berlinés Sezession. La mayoría de ellas refleja la desilusión del fin de siglo y la imagen del hombre como víctima. <br>
                    Su obra anterior a 1908 está muy vinculada a este ciclo que, de algún modo, concibió como si se tratara de un poema de amor, de vida y de muerte. Así El beso (1892) o La cámara de muerte (1894), ambas en la Nasjonalgalleriet de Oslo, donde alude al drama acontecido durante su infancia: la muerte de su madre y su hermana. Los personajes reflejan su sufrimiento, pero formalmente están unidos por una línea serpenteante que recorre toda la superficie del cuadro. No hay sombras, sólo colores planos y pronunciados contornos que marcan el ritmo visual, un medio idóneo para expresar la angustia del espíritu. <br>
                    Sin embargo, su obra más emblemática es El grito (1893, Nasjonalgalleriet, Oslo), una de las pinturas que más intensamente han reflejado el horror y la angustia del ser humano. La figura que se halla en primer término expresa un terror inconmensurable. La angustia por la soledad, la desesperación por no encontrar un sentido a la vida y su relación con los abismos quedan intensamente reflejados en la obra del pintor noruego.
                </p>
            </div>
        <h2 class="sub">Obras más importantes</h2>
        <?php $__env->stopSection(); ?>
        <div class="about-gallery">
            <?php $__env->startSection('obras'); ?>
                <img src="/img/ed1.jpg" alt="">
                <img src="/img/ed2.jpg" alt="">
                <img src="/img/ed3.jpg" alt="">
                <img src="/img/ed4.jpg" alt="">
                <img src="/img/ed5.jpg" alt="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/edvar.blade.php ENDPATH**/ ?>