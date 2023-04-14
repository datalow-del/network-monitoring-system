<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if($_SERVER["REQUEST_METHOD"] == "POST") {    
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password,"login");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (empty($_POST['username']) || empty($_POST['password']))
 {
               $error = "Username or Password is invalid";
 }
 
else{
             $user=$_POST["username"];
             $pass=$_POST["password"];
             $user = stripslashes($user);
             $pass = stripslashes($pass);
             $user  = mysqli_real_escape_string($conn, $_POST["username"]);
             $pass = mysqli_real_escape_string($conn, $_POST["password"]);
    
            $sql  = "SELECT id from id WHERE username='$user' AND password='$pass'";
            $result=$conn->query($sql);
            $count=mysqli_num_rows($result);
            if ($count==1)
            {
             $_SESSION['login_user']=$user;
             chdir('var/www/html/test');
             header("location:home.php"); 
            }
            else{
                    $error="fsdfdsf";
                } 
$conn->close();
}
}
}
