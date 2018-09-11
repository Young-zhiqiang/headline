<?php
if(isset($_GET['c'])){
    $class_name = $_GET['c'];
}else{
    $class_name = 'dynamic';
}
if(isset($_GET['f'])){
    $method = $_GET['f'];
}else{
    $method = 'index';
}
    include '../controller/wechart/'.$class_name.'.php';
    $p = new $class_name();
    $p -> $method();