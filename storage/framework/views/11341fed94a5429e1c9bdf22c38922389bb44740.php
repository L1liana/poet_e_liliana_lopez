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
                <img src="/img/lo.jpg" alt="">
                <h2>Biografía</h2>
                <p>
                    Louis Wain (1860-1939) fue un dibujante inglés tristemente célebre. Se convirtió en alguien muy conocido gracias a sus ilustraciones de gatos antropomórficos, que alcanzaron gran fama en todos los periódicos británicos de la época. Pero, ¿cómo decide un artista dedicarse casi por entero a inmortalizar gatos? ¿Por qué dedicamos esta primera entrada a Wain? <br>
                    Es cierto que antes de dedicarse a retratar felinos este curioso personaje ya era ilustrador, aunque no era ninguna celebridad. Pero cuando su esposa enfermó de cáncer –tan solo tres años después de la boda– Wain la entretenía con bromas en las que hacía participar a Peter, el gato de la familia. Con unas inocentes bromas en las que el pobre gato se dejaba poner gafas y hacer pequeños shows, a su mujer le surgió la idea a la que nuestro autor debe su fama: gatos con gestos humanos que ríen, practican el golf, conducen, fuman, juegan a las cartas… ¿a quién no le gustan los gatitos graciosos? ¿Creíais que el amor que profesamos los internautas a los felinos era una gran novedad? ¡Ja! El caso es que se convirtieron en el tema recurrente de sus siguientes ilustraciones, y llamaron la atención de toda la sociedad inglesa. Pronto toda Inglaterra se llenó de sus dibujos: en la prensa, en calendarios, tiras cómicas, tarjetas de felicitación… ¡Se hizo tan famoso que hasta H.G. Wells dijo que los gatos ingleses que no se parecen a los de Wain se avergüenzan de sí mismos! <br>
                    Pero la historia no siempre puede mantenerse feliz: la esposa de Wain murió irremediablemente, y éste quedó destrozado por la pérdida. A pesar de haber obtenido gran éxito, no supo sacar partido del momento. Malvendió todas sus ilustraciones, se quedó sin hogar, y no tuvo más remedio que embarcarse en un viaje a Nueva York para buscar fortuna que no sirvió sino para dejarlo más arruinado. Finalmente volvió a su tierra natal, desmoralizado y hundido. <br>
                    A los 57 años todo cambió… pero no a mejor: le diagnosticaron esquizofrenia. Su carácter, antes humilde y agradable, se tornó en agresivo y desconfiado. Vagabundeaba por las calles cuando caía la noche, cambiaba los muebles de sitio en casa de su madre, se encerraba en su habitación para escribir incoherencias que nadie alcanzaba a comprender y cada vez reaccionaba con mayor violencia. Cuando sus hermanas -que lo habían acogido- se dieron cuenta de que ya no podían controlar su agresividad lo ingresaron en el ala de pobres de un hospital mental, donde sería condenado a un destino mucho peor del que ya sufría. <br>
                    Afortunadamente el mismísimo Primer Ministro descubrió su situación y lo trasladó al Hospital Real de Bethlem, donde muchos mininos tenían su hogar en los enormes jardines, y Wain volvió a encontrar su inspiración… pero su arte empezaba a cambiar conforme su enfermedad mental progresaba: <br>
                    Poco tienen que ver éstos nuevos dibujos con sus famosas obras iniciales. Su enfermedad mental grita a través de los lápices de Wain, la percepción del artista y sus ideas quedan marcados por la esquizofrenia cada vez más. Sus gatos muestran ahora una abstracción compleja, son ininteligibles. Las inquietantes expresiones que podemos entrever en algunos trazos son misteriosas, hay algo en ellas que pone los pelos de punta desde su extraña belleza colorista. ¿Percibe nuestro cerebro que algo no anda bien en ése conjunto de líneas y trazos, en ése mundo irreal y vibrante que nos presentan las ilustraciones? <br>
                    Las obras de Wain han sido objeto de muchos estudios acerca de el impacto y evolución de la esquizofrenia y cómo llega ésta a afectar a la mente del ser humano.
                </p>
            </div>
            <h2 class="sub">Obras más importantes</h2>
            <?php $__env->stopSection(); ?>
            <div class="about-gallery">
            <?php $__env->startSection('obras'); ?>
                <img src="/img/lo1.jpg" alt="">
                <img src="/img/lo2.jpg" alt="">
                <img src="/img/lo3.jpg" alt="">
                <img src="/img/lo4.jpg" alt="">
                <img src="/img/lo5.jpg" alt="">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/o.blade.php ENDPATH**/ ?>