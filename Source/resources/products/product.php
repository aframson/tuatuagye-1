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
$dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '>##e(a}T%5P';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


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
