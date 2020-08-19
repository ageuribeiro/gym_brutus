<?php
    $this->get('/', function(){
        (new \app\controller\TestController)->index();
    });

    $this->get('/about', function(){
        echo 'Page About Test';
    });

    $this->get('/gym', function(){
        echo 'Page Gym';
    });

    $this->get('/category', 'testController@seta');
?>