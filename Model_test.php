<?php
    require_once 'include/Model.php';

    $model = new Model();

    $model->awesomeSauce = true;
    $model->weakSauce = false;
    
    echo $model->firstName;
    echo $model->awesomeSauce;
    echo $model->weakSauce;
?>