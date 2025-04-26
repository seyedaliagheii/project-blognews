<?php

function inspect($p){
    echo '<pre>';
    var_dump($p);
    echo '</pre>';
}
function inspectAndDie($p){
    echo '<pre>';
    var_dump($p);
    echo '</pre>';
    exit;
}

function basePath($path)
{
    return __DIR__ . '/' . $path;
}

function loadView($path){
    return basePath('views/' . $path . '.view.php');
}