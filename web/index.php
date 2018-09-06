<?php
include '../controller/index/page.php';
if(isset($_GET['c'])){
    $class_name = $_GET['c'];
}else{
    $class_name = 'news';
}
if(isset($_GET['m'])){
    $method = $_GET['m'];
}else{
    $method = 'index';
}

$o = new $class_name;
$o -> $method();