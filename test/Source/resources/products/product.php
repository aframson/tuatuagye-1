<?php
//start session to get user info
//its very likey at this point the user has already visited home and started a session
//session_start();
if (empty($_SESSION['username'])){
    $_SESSION['username'] = $_SERVER['REMOTE_ADDR'];
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


$query = "SELECT * FROM data_product_description WHERE product_id = $id";
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


$query = "SELECT * FROM data_product_description WHERE product_id = $id";
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


$query = "SELECT * FROM data_product_special WHERE product_id = $id";
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


$query = "SELECT * FROM data_product_image WHERE product_id = $id";
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
 * header
 **************/

function set_header(){
      
if (!empty($_POST['title'])){
    
$title = $_POST['title'] ;


}
else {$title = "online web store"; }

echo '
   <meta charset="UTF-8">
    <meta name="description" content="Tuatuagye">
    
    Welcome to Tuatuagye, your one stop online store. Shop items and pay in installment. Buy phones, 44 digital TV, freezer, blender, kettle etc.">
    <meta nam="description" content"
    Welcome to Tuatuagye, your one stop online store. Shop items and pay in installment. Buy phones, 44 digital TV, freezer, blender, kettle etc.">
    <meta name="keywords" content="Tuatuagye, BRICH, webapp, javascript">
    <meta name="keywords" content="Tuatuagye, BRICH, webapp, javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuatuagye | '.$title.'</title>

   
       <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/electro.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">  
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link href="css/material-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/materialdemo.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/embedded.css" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PY66NSKPP7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("j", new Date());

        gtag("config", "G-PY66NSKPP7");
    </script>

';


}

