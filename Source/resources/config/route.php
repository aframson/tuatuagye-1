<?php
session_start();



include '../products/engine.php';
//online\Source\resources\products\product.php
$_POST['requesting'] = "true";

$function = $_GET['func'];

if (function_exists($function)){
    $function();
}else{
    echo ' no such fucntion';
}
