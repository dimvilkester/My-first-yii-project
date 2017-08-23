<?php

/*
 * Example aliases
 * Method actionExampleone() create three new folder (folder_1, folder_2, folder_3) use aliases @folders
 * Method actionExampleorwo() use config app main.php
 *  *   */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasesController extends Controller
{
    public function actionExampleone() {
        
        Yii::setAlias('@files', '/var/www/project/frontend/web/files');
        
        echo '<p>'. Yii::getAlias('@files') .'</p>';
        
        $result = mkdir(Yii::getAlias('@files/folder_1'));
        
        var_dump($result);
        
        $result = mkdir(Yii::getAlias('@files/folder_2'));
        
        var_dump($result);
        
        $result = mkdir(Yii::getAlias('@files/folder_3'));
        
        var_dump($result);

    }
    
    public function actionExampletwo() {
        
        $result = Yii::getAlias('@files');
        echo '<p>'. $result .'</p>';
        
        $result = mkdir(Yii::getAlias('@photos'));
        var_dump($result);

    }
}
