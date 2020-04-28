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


 /*$terms  = $_POST['terms_']   ;  */
       $user= htmlspecialchars(strip_tags($_POST['user_'] ));
       $fname= htmlspecialchars(strip_tags($_POST['firstname_'] ));
       $lname= htmlspecialchars(strip_tags($_POST['lastname_'] ));
       $phone= htmlspecialchars(strip_tags($_POST['phone_'] ));
       $email= htmlspecialchars(strip_tags($_POST['email_'] ));
       $pasword= htmlspecialchars(strip_tags($_POST['pass_'] ));
       $confirm_pass= htmlspecialchars(strip_tags($_POST['confirm_pass'] ));

        if(/*
    !empty($fname) &&
    !empty($lname) &&
    !empty($email) &&
    !empty($phone) &&
    !empty($pasword) &&
    !empty($confirm_pass) &&  */
    !empty($user) 
                ){
            $stmt = $connect->prepare("SELECT username FROM ttg_user WHERE username=? ");
           $stmt->bind_param("s", $user);       
             if ($stmt->execute()) {
    
                       // echo "username already exist ";
               
                $row = $stmt->fetch();
                    if ($user == $row['username']){
                        echo "username already exist ";
                    }
                        else  echo $row['username']. "this users";
                       
                
                                 }


                }

                else echo "Please enter all the data";

    
}


/*always break code down to smaller components that way its easier to set them up and easy to debug if sth go wrong
atm moment i'm tryna clean the registeration post so i don't get sql injections, the easier way to do that in php
is to use prepared statement*/


/*

$user_name = $_POST['dname'];
$user_password = $_POST['dpass'];
// Prepare the query
$stmt = $conn->prepare("SELECT user_name,user_password FROM login_details WHERE user_name=? and user_password= ?");
// Bind parameters s - string, b - boolean, i - int, etc
$stmt->bind_param("ss", $user_name, $user_password);
// Execute SQL
$stmt->execute();
// Store result
$stmt->store_result();
// Bind the result
$stmt->bind_result($name, $password);
if ($stmt->num_rows == 1) {
// Fetching data
while ($row = $stmt->fetch()) {
echo" <div class="output"> ";
echo"<b>User name:</b>" . $name . "<br/>";
echo "<b>Password:</b>" . $password;
echo"</div>";
}
*/