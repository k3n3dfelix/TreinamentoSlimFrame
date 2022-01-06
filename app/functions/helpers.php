<?php 

function dd($data){
    print_r($data);
    die();
}

function path(){
    $vendorDir = dirname(dirname(__FILE__));
    return dirname($vendorDir);
}