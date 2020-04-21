<?php




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


$query = "SELECT * FROM oc_users WHERE username = $user";
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