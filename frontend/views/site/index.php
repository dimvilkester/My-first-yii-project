<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My first Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have subscribe to newsletter.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['newsletter/subscribe'])?>">Subscribe to newsletter</a></p>
        <p><a class="btn btn-info" href="<?php echo Url::to(['flmng/time'])?>">What's time</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Register employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-info" href="<?php echo Url::to(['employee/register'])?>">Register employee</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Update employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['employee/update'])?>">Update employee</a></p>
            </div>
            <div class="col-lg-4">
                <h2>To order Window</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-default" href="<?php echo Url::to(['window/order'])?>">To order Window</a></p>
            </div>
        </div>
        
        <div class="row">
                <div class="col-lg-4">
                <h2>Gallary</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-danger" href="<?php echo Url::to(['gallary/index'])?>">Enjoy Gallary!</a></p>
            </div>
        </div>
    </div>
</div>
