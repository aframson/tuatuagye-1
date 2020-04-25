<?php


include 'db.php';


extract($_POST);
 
// cean data before insert 


$str_address = $str1.' , '.$str2;

    if(mysqli_query($con,"INSERT INTO 
    ttg_billingdetails(fname,lname,cname,country,straddress,pcode,city,email,phone,coupon)
      VALUES($fname,$lname,$cname,$country,$str_address,$pcode,$city,$email,$phone,$coup)
       ")){
          echo 'done';
       }else{
             echo "There is an error with the server ";
    }