<?php

function dd($data){
    var_dump($data);
    die;
}


function redirectTo($link) {

    header('Location: '.$link);
    exit();
}