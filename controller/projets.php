<?php
    function callModel($model){
        require_once 'model/'.$model.'.php';
    }

    function feedbackModel($feedbackModel){
        render($feedbackModel);
    }
?>