<?php
/* @var array $list frontend\models\Employee */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\employeeList\EmployeeList;

$this->title = 'List employee';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?php echo EmployeeList::widget(['max' => 3]);?>
        </div>
        <div class="col-lg-12">
            <hr>
            <a class="btn btn-info" href="<?php echo Url::home() ?>">Вернуться на главную</a>
        </div>
    </div>
</div>