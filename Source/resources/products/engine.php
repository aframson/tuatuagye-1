<?php
//start session to get user info
//its very likey at this point the user has already visited home and started a session
//session_start();
if (empty($_SESSION['username'])){
    $_SESSION['username_remote_addr'] = $_SERVER['REMOTE_ADDR'];
}







//if (isset($_POST['requesting'])){


function begin()
{
    
}   



function cart(){

if (isset($_POST['page'])){
    
    $product_id = $_POST['page'];

    
  /*    $query = "SELECT * FROM oc_product ORDER BY product_id ";
         $result = mysqli_query($connect, $query);
            if (!$result) {
        echo mysqli_error($connect) ;
   // exit();
}
     while ($row = mysqli_fetch_array($result)) {
    $output .= ' ';
    
    
}
  */           
}

}

 /** cart ends here 
    ***********************/

/**********
 * product description
 **************/


function get_descrip(){
      
      $dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '>##e(a}T%5P';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
      
if (!empty($_POST['product_id'])){
$id = $_POST['product_id'];


$query = "SELECT * FROM oc_product_description WHERE product_id = $id";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo mysqli_error($connect) ;
                   // exit();
                }
                     while ($row = mysqli_fetch_array($result)) {
                            echo html_entity_decode($row['description']);
                     }
  
}
else echo "the product id didn't come";


}

/**********
 * product name
 **************/

function get_name(){
      
      $dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '>##e(a}T%5P';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
      
if (!empty($_POST['product_id'])){
$id = $_POST['product_id'];


$query = "SELECT * FROM oc_product_description WHERE product_id = $id";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo mysqli_error($connect) ;
                   // exit();
                }
                     while ($row = mysqli_fetch_array($result)) {
                            echo html_entity_decode($row['name']);
                     }
  
}
else echo "the product id didn't come";


}





/**********
 * product ttg_price
 **************/

function get_ttg_price(){
      
      $dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '>##e(a}T%5P';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
      
if (!empty($_POST['product_id'])){
$id = $_POST['product_id'];


$query = "SELECT * FROM oc_product_special WHERE product_id = $id";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo mysqli_error($connect) ;
                   // exit();
                }
                     while ($row = mysqli_fetch_array($result)) {
                            echo html_entity_decode($row['price']);
                     }
  
}
else echo "the product id didn't come";


}





/**********
 * product image
 **************/

function get_image(){
      
      $dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '>##e(a}T%5P';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
      
if (!empty($_POST['product_id'])){
$id = $_POST['product_id'];


$query = "SELECT * FROM oc_product_image WHERE product_id = $id";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo mysqli_error($connect) ;
                   // exit();
                }
                    $image_count = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);
        

                     while ($row = mysqli_fetch_array($result)) {
                         echo '
                         <div class="owl-item">
                  <div class="pt" data-imgbigurl="http://tuatuagye.com/upload/image/'.html_entity_decode($row["image"]).'"><img
                    src="http://tuatuagye.com/upload/image/'.html_entity_decode($row["image"]).'" alt=""></div> 
                   </div>
                        ';
                        
                     }
}
else echo "the product id didn't come";


}



/**********
 * login
 **************/

function ttg_login(){

include './config/db.php';

 $user  = $_POST['username']   ;
 $paswword  = $_POST['password']   ;
 $keepMeSignedIn  = $_POST['keepMeSignedIn']   ;


$query = "SELECT * FROM oc_user WHERE username = $user";
                    $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo '<script> console.log('.mysqli_error($connect).');</script>';
                   // exit();
                }
                    $row = mysqli_fetch_array($result);
        

                     while ($row = mysqli_fetch_array($result)) {
                         $_SESSION['username'] =$row['user'];
                         $_SESSION['name'] =$row['firstname'];
                     
}
                echo 1;
}


function ttg_register(){
include '../config/db.php';
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


 $user  = mysqli_real_escape_string($connect, $_POST['user_'])   ; 
 echo $user; /*
 $paswword  = $_POST['pass_']   ;
 $lastname  = $_POST['lastname_']   ;
 $phone  = $_POST['phone_']   ;
 $email  = $_POST['email_']   ;
 $confirm_pass  = $_POST['confirm_pass']   ;
 $terms  = $_POST['terms_']   ;

 if (!empty($user)){
     $isValid = true;
     $query = "SELECT * FROM ttg_user WHERE username = $user";
               $result = mysqli_query($connect, $query);
                    if (!$result) {
                   echo '<script> console.log('.mysqli_error($connect).');</script>';    // exit();
                }
                else { $row = mysqli_fetch_array($result);
                    echo "username" . $row['username'] . "already exist";
                        $isValid = false;
                     }
            while($isValid){
                 $query = "INSERT INTO ttg_user username = $user";
                 $result = mysqli_query($connect, $query);
                       if (!$result) {
                   echo '<script> console.log('.mysqli_error($connect).');</script>';    // exit();
                }
                echo "successful";
            }
 }
*/
    
}


