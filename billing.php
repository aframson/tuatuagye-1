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


/*
    // Connect to database
$server_name = "localhost";
$user_name = "root";
$password = "";
$db = "login";
$conn = mysqli_connect($server_name, $user_name, $password, $db);
// Checking if login button is clicked or not
if (isset($_POST['dsubmit'])) {
// Assigning values to variables fetched from URL
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
} else {
echo "invalid username or password!!!";
}
// Close the statement
$stmt->close();
}
// Close the connection
mysqli_close($conn);