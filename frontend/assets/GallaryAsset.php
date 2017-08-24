<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class GallaryAsset extends AssetBundle 
{
    public $css = [
        'css/gallary/style.css',        
    ];
    
    public $js = [
        'js/isotope/jquery.isotope.js',        
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

