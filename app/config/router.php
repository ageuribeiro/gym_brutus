<?php
    $this->get('/', function(){
        echo 'Page Home';
    });

    $this->get('/home/', function(){
        echo 'Page Home';
    });

    $this->get('/about', function(){
        echo 'Page About Test';
    });

    $this->get('/gym', function(){
        echo 'Page Gym';
    });
?>