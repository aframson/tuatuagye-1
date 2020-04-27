<?php   
   
   
  // $connect = mysqli_connect("localhost", "root", "", "passbook");


   class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "api_db";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}


/*i wanna write a clean code with class and db for all my calls 
i also want to remove any unnecessary files i don't need and folders that are no longer in 
use to free the system, i also a read me file to document each progress as i go forward
this job might be shity and my employer might be a turd but i am not. i God a good explanation
of my talents and gifts. millions will be better for it, lots of people will have a diff
ecommernce experience cuz of me, i owe God that */

/**
 * im quickly gonna write a neat auth with forget password and login with google button that actually works
 * and i would move on from there, with well define comments so in future i can improve upon it
 * i think the best way for me to do that is by looking at a real auth written by a senior dev
 * and model mine after but keeping it simple and the lines very short .....!
 */