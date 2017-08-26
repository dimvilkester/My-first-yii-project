<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\employeeList\EmployeeList;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="row">
        <div class="col-lg-4">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>This is the About page. You may modify the following file to customize its content:</p>

            <code><?= __FILE__ ?></code>
        </div>

        <div class="col-lg-8">
            <h1>View list employee</h1>

            <?php echo EmployeeList::widget();?>
        </div> 
    </div>
</div>    
