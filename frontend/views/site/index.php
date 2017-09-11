<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use frontend\widgets\employeeList\EmployeeList;

$this->title = 'My first Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have subscribe to newsletter.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['newsletter/subscribe']) ?>">Subscribe to newsletter</a></p>
        <p><a class="btn btn-info" href="<?php echo Url::to(['flmng/time']) ?>">What's time</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Register employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-info" href="<?php echo Url::to(['employee/register']) ?>">Register employee</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Update employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['employee/update']) ?>">Update employee</a></p>
            </div>       
            <div class="col-lg-4">
                <h2>List employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-default" href="<?php echo Url::to(['employee/index']) ?>">View list employee</a></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h1>View list employee</h1>
                
                <?php echo EmployeeList::widget(['max' => 4]);?>
            </div> 
        </div>
        

        <div class="row">
            <div class="col-lg-4">

                <h2>To order Window</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-default" href="<?php echo Url::to(['window/order']) ?>">To order Window</a></p>
            </div>
            <div class="col-lg-4">

                <h2>Gallary</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-danger" href="<?php echo Url::to(['gallary/index']) ?>">Enjoy Gallary!</a></p>
            </div>

            <div class="col-lg-4">
                <h2>View Nivo Slider jQuery Plugin</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-info" href="<?php echo Url::to(['slider/index']) ?>">View Nivo Slider</a></p>
            </div>
        </div>

        <div class="row">
            <div class="jumbotron">
                <h1>Bookshop!</h1>

                <p class="lead">View Bookshop.</p>
            </div>
            
            <div class="col-lg-6">
                <h2>Bookshop</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['bookshop/index']) ?>">View bookshop</a></p>
            </div>
            
            <div class="col-lg-6">
                <h2>Add new book</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-primary" href="<?php echo Url::to(['bookshop/create']) ?>">Add book</a></p>
            </div>
        </div>
        
        <div class="row">           
            <div class="col-lg-6">
                <h2>View list author</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
                
                <p><a class="btn btn-info" href="<?php echo Url::to(['author/index']) ?>">List author</a></p>
            </div>
            
            <div class="col-lg-6">
                <h2>Create new author</h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['author/create']) ?>">Create author</a></p>
            </div>
        </div>
        
        <div class="jumbotron">
            <h1>Store</h1>

            <p class="lead">Main index Store.</p>

            <p><a class="btn btn-lg btn-info" href="<?php echo Url::to(['store/index']) ?>">View Store</a></p>
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <h2>Add new Category</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['category/create']) ?>">Add new Category</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>Add new Product</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['product/create']) ?>">Add new Product</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>Add new Manufacturer</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-success" href="<?php echo Url::to(['manufacturer/create']) ?>">Add new Manufacturer</a></p>
            </div>
        </div> 
        
        <div class="row">
            <div class="col-lg-4">
                <h2>List Category</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>

                <p><a class="btn btn-primary" href="<?php echo Url::to(['category/index']) ?>">View list Category</a></p>
            </div>
        </div>        
    </div>
</div>