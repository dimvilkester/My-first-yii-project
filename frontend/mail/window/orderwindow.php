<?php

/* @var $windowList[] array */

?>

<div class="body-content">
    <div class="row">
        <div class="col-lg-6">
            <h1>Новый заказ окна от <?php echo $windowList['name']; ?></h1>
            <hr>
            <p>Ширина: <?php echo $windowList['width']; ?></p>
            <p>Высота: <?php echo $windowList['height']; ?></p>
            <p>Количество камер: <?php echo $windowList['camera']; ?></p>
            <p>Общее количество створок: <?php echo $windowList['leaf']; ?></p>
            <p>Количество поворотных створок: <?php echo $windowList['turnLeaf']; ?></p>
            <p>Цвет: <?php echo $windowList['color']; ?></p>
            <p>Наличие подоконника: <?php echo $windowList['windowSill']; ?></p>
            <p>Email заказчика: <?php echo $windowList['email']; ?></p>
            <p>Имя заказчика: <?php echo $windowList['name']; ?></p>
        </div>
    </div>
</div>  