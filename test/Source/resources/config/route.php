<?php
//session_start();



include '../products/product.php';
//online\Source\resources\products\product.php



$function = $_GET['func'];

if (function_exists($function)){
    $function();
 //   echo "did the function worked?";
}else{
    echo ' no such function';
}
