<?php

/* @var $newsList[] array */

?>

<div class="body-content">
    <div class="row">     
        <?php foreach ($newsList as $item): ?>
        <div class="col-lg-6">
            <h2>
                <a href="/">
                    <?php echo $item['title'];?>
                </a>
            </h2>

            <p><?php echo $item['content'];?></p>

            <p><a class="btn btn-default" href="/">Подробнее &raquo;</a></p>
        </div>
        <?php endforeach;?>
    </div>
</div>   