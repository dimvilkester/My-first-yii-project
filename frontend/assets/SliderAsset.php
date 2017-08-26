<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle 
{
    public $css = [
        'css/slider/nivo-slider.css',        
        'css/slider/style.css',        
    ];
    
    public $js = [
        //'js/jquery.1.8.1.js',
        'js/slider/jquery.nivo.slider.pack.js',        
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

