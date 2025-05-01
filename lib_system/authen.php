<?php
session_start();
require("./connect.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."'"; 

$query = mysqli_query($connect, $sql) or die("ERR Query!"); 
if($data_user = mysqli_fetch_array($query)) { 
    $_SESSION['uid'] = $data_user['uid ']; 
    $_SESSION['username'] = $data_user['username']; ;
    $_SESSION['role'] = $data_user['role']; 
    header("location: ./dashboard.php");

 } else{ 
    
    header("location: ./index.php");
 }
    

?>