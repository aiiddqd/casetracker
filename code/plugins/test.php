<?php

// dd(2);

Eventy::addAction('test', function(){

    echo 1;
});

Eventy::addAction( 'plugins_loaded', function(){

    Eventy::action('test2');
    // dd(33);
});

