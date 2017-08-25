<?php
/*
 * @var $this yii\web\View;
 */

use yii\helpers\Html;
use yii\helpers\Url;

use frontend\assets\SliderAsset;

$this->title = 'View Nivo Slider jQuery Plugin';
$this->params['breadcrumbs'][] = $this->title;

SliderAsset::register($this);

$this->registerJsFile('@web/js/slider/script.js', ['depends' => [
    SliderAsset::className()
]]);

?>

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>-->

<div class="body-content">
    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <div id="slider" class="nivoSlider">     
                <img src="/files/slider/megamind.jpg" alt="" />    
                <a href="http://docs.themeisle.com/article/485-getting-started-with-the-nivo-slider-jquery-plugin"><img src="/files/slider/nemo.jpg" alt="" title="#htmlcaption" /></a>     
                <img src="/files/slider/up.jpg" alt="" title="This is an example of a caption" />     
                <img src="/files/slider/walle.jpg" alt="" /> 
            </div> 

            <div id="htmlcaption" class="nivo-html-caption">     
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

        <div class="col-lg-3"></div>
    </div>

    <br>
    <br>

    <div class="row">      
        <div class="col-lg-12">
            <h2>Nivo Slider Settings</h2>
            <hr>
            <p>The Nivo Slider has plenty of settings to fiddle with. Below is an example of the code with all available options and their defaults:</p>
            <p>$('#slider').nivoSlider ({</p> 
            <p>effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'</p>  
            <p>slices: 15,                       // For slice animations</p>  
            <p>boxCols: 8,                       // For box animations</p>  
            <p>boxRows: 4,                       // For box animations</p>  
            <p>animSpeed: 500,                   // Slide transition speed</p>  
            <p>pauseTime: 3000,                  // How long each slide will show</p>  
            <p>startSlide: 0,                    // Set starting Slide (0 index)</p>  
            <p>directionNav: true,               // Next & Prev navigation</p>  
            <p>controlNav: true,                 // 1,2,3... navigation</p>  
            <p>controlNavThumbs: false,          // Use thumbnails for Control Nav</p>  
            <p>pauseOnHover: true,               // Stop animation while hovering</p>  
            <p>manualAdvance: false,             // Force manual transitions</p>  
            <p>prevText: 'Prev',                 // Prev directionNav text</p>  
            <p>nextText: 'Next',                 // Next directionNav text</p>  
            <p>randomStart: false,               // Start on a random slide</p>  
            <p>beforeChange: function(){},       // Triggers before a slide transition</p>  
            <p>afterChange: function(){},        // Triggers after a slide transition</p>  
            <p>slideshowEnd: function(){},       // Triggers after all slides have been shown</p>  
            <p>lastSlide: function(){},          // Triggers when last slide is shown</p>  
            <p>afterLoad: function(){}           // Triggers when slider has loaded</p>  
            <p>});</p>
            <hr>
            <a class="btn btn-info" href="<?php echo Url::home() ?>">Вернуться на главную</a>
        </div>
    </div>                                 
</div>