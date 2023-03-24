<?php
    function callController($controller){
        require_once 'controller/'.callModel($controller).'.php';
    }

    function render($views){
        require_once 'views/'.$views.'.php';
    }
?>