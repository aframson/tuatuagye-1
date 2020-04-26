<?php


include 'db.php';


extract($_POST);
 
// cean data before insert 


$str_address = $str1.' , '.$str2;


    
    $fname = mysqli_real_escape_string($con,$fname);
    $lname = mysqli_real_escape_string($con,$lname);
    $cname = mysqli_real_escape_string($con,$cname);
    $country = mysqli_real_escape_string($con,$country);
    $str_address = mysqli_real_escape_string($con,$str_address);
    $pcode = mysqli_real_escape_string($con,$pcode);
    $city = mysqli_real_escape_string($con,$city);
    $email = mysqli_real_escape_string($con,$email);
    $phone = mysqli_real_escape_string($con,$phone);
    $coup = mysqli_real_escape_string($con,$coup);

    
    


    if(mysqli_query($con,"INSERT INTO 
    ttg_billingdetails(fname,lname,cname,country,straddress,pcode,city,email,phone,coupon)
      VALUES($fname,$lname,$cname,$country,$str_address,$pcode,$city,$email,$phone,$coup)
       ")){
          echo 'done';
       }else{
             echo "There is an error with the server ";
    }