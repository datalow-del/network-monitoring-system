<?php
$conn = new mysqli("localhost","root","","login");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                          }
session_start();

$user_check="adel";

$sql="select * from user where username='$user_check'";

$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$login_session=$row['username'];

if(!isset($login_session)){

mysqli_close($connection); // Closing Connection

header('Location:login.php'); // Redirecting To Home Page

}
