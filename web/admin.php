<?php
if(isset($_GET['p'])){
    $middle = $_GET['p'];
}else{
    $middle = 'admin';
}
include '../controller/admin/'.$middle.'.php';
//c代表类,f代表类的方法,p代表你要访问哪个php
if(isset($_GET['c'])){
    $class_name = $_GET['c'];
}else{
    $class_name = 'index';
}
if(isset($_GET['f'])){
    $method = 'action'.$_GET['f'];
}else{
    $method = 'actionindex';
}
$page = new $class_name();

$page -> $method();

