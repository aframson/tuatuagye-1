<?php
//start session to get user info
//its very likey at this point the user has already visited home and started a session
//session_start();
if (empty($_SESSION['username'])) {
    $_SESSION['username_remote_addr'] = $_SERVER['REMOTE_ADDR'];
}







//if (isset($_POST['requesting'])){


function begin()
{
}



function cart()
{

    if (isset($_POST['page'])) {

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


function get_descrip()
{

    $dbhost = 'localhost';
    $dbuser = 'vxkgn0fmfwww';
    $dbpass = '>##e(a}T%5P';
    $dbname = "TuaTuaGye Data";
    $connect  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];


        $query = "SELECT * FROM oc_product_description WHERE product_id = $id";
        $result = mysqli_query($connect, $query);
        if (!$result) {
            echo mysqli_error($connect);
            // exit();
        }
        while ($row = mysqli_fetch_array($result)) {
            echo html_entity_decode($row['description']);
        }
    } else echo "the product id didn't come";
}

/**********
 * product name
 **************/

function get_name()
{

    $dbhost = 'localhost';
    $dbuser = 'vxkgn0fmfwww';
    $dbpass = '>##e(a}T%5P';
    $dbname = "TuaTuaGye Data";
    $connect  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];


        $query = "SELECT * FROM oc_product_description WHERE product_id = $id";
        $result = mysqli_query($connect, $query);
        if (!$result) {
            echo mysqli_error($connect);
            // exit();
        }
        while ($row = mysqli_fetch_array($result)) {
            echo html_entity_decode($row['name']);
        }
    } else echo "the product id didn't come";
}





/**********
 * product ttg_price
 **************/

function get_ttg_price()
{

    $dbhost = 'localhost';
    $dbuser = 'vxkgn0fmfwww';
    $dbpass = '>##e(a}T%5P';
    $dbname = "TuaTuaGye Data";
    $connect  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];


        $query = "SELECT * FROM oc_product_special WHERE product_id = $id";
        $result = mysqli_query($connect, $query);
        if (!$result) {
            echo mysqli_error($connect);
            // exit();
        }
        while ($row = mysqli_fetch_array($result)) {
            echo html_entity_decode($row['price']);
        }
    } else echo "the product id didn't come";
}





/**********
 * product image
 **************/

function get_image()
{

    $dbhost = 'localhost';
    $dbuser = 'vxkgn0fmfwww';
    $dbpass = '>##e(a}T%5P';
    $dbname = "TuaTuaGye Data";
    $connect  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (!empty($_POST['product_id'])) {
        $id = $_POST['product_id'];


        $query = "SELECT * FROM oc_product_image WHERE product_id = $id";
        $result = mysqli_query($connect, $query);
        if (!$result) {
            echo mysqli_error($connect);
            // exit();
        }
        $image_count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);


        while ($row = mysqli_fetch_array($result)) {
            echo '
                         <div class="owl-item">
                  <div class="pt" data-imgbigurl="http://tuatuagye.com/upload/image/' . html_entity_decode($row["image"]) . '"><img
                    src="http://tuatuagye.com/upload/image/' . html_entity_decode($row["image"]) . '" alt=""></div> 
                   </div>
                        ';
        }
    } else echo "the product id didn't come";
}



/**********
 * login
 **************/

function ttg_login()
{

    include './config/db.php';

    $user  = $_POST['username'];
    $paswword  = $_POST['password'];
    $keepMeSignedIn  = $_POST['keepMeSignedIn'];


    $query = "SELECT * FROM oc_user WHERE username = $user";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        echo '<script> console.log(' . mysqli_error($connect) . ');</script>';
        // exit();
    }
    $row = mysqli_fetch_array($result);


    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['username'] = $row['user'];
        $_SESSION['name'] = $row['firstname'];
    }
    echo 1;
}


function ttg_register()
{
    include '../config/db.php';
    $connect  = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


    $user = htmlspecialchars(strip_tags($_POST['user_']));
    $fname = htmlspecialchars(strip_tags($_POST['firstname_']));
    $lname = htmlspecialchars(strip_tags($_POST['lastname_']));
    $phone = htmlspecialchars(strip_tags($_POST['phone_']));
    $email = htmlspecialchars(strip_tags($_POST['email_']));
    $pasword = htmlspecialchars(strip_tags($_POST['pass_']));
    $confirm_pass = htmlspecialchars(strip_tags($_POST['confirm_pass']));

    $user = mysqli_real_escape_string($connect,$user);
    $fname = mysqli_real_escape_string($connect,$fname);
    $lname = mysqli_real_escape_string($connect,$lname);
    $email = mysqli_real_escape_string($connect,$email);
    $phone = mysqli_real_escape_string($connect,$phone);
    $pasword = mysqli_real_escape_string($connect,$pasword );
    $confirm_pass = mysqli_real_escape_string($connect, $confirm_pass );


    if ( !empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($pasword) && !empty($confirm_pass) &&   !empty($user) )    {
       
        //eheck email
        $at = strrpos($email, "@"); $dotcom = strrpos($email, ".com");
            //password match
        //check username 
        $query = "SELECT username FROM ttg_user WHERE username=? ";
        // $stmt->bind_param("s", $user); 
        $stmt = mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare( $stmt, $query)) {
            echo "<script> sql error please check the stmt</script>";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($user == $row['username']) {
                    echo "username already exist "; exit;
                } 
            }
        } $query ="";

             //check email
           if ($at > 0  && $dotcom > 0){
        $query = "SELECT email FROM ttg_user WHERE email=? ";
        // $stmt->bind_param("s", $user); 
        $stmt = mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare( $stmt, $query)) {
            echo "<script> sql error please check the stmt</script>";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($email == $row['email']) {
                    echo "email already exist ";
                } else  echo $row['email'] . "this users";
            }
        }  $query = "";   }  exit;
    

 } else echo "Please enter all the data";

}


/*always break code down to smaller components that way its easier to set them up and easy to debug if sth go wrong
atm moment i'm tryna clean the registeration post so i don't get sql injections, the easier way to do that in php
is to use prepared statement*/


//to save time i do a query prepared statement of inputed values and inside them into db and if username or email is inserted
//into dabase the i drop the time where username is equael to this username and reset the form fields
//it would be beter if the password analysis match is already change right after the username and email has been validated
//but first prepared a query statement and insert all data into database

