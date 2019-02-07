<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $usernam = $_POST['username'];
 $passwor = $_POST['password'];
 
 require_once('dbConnect.php');
 
 $sql = "select * from admin where username='$usernam' and password='$passwor'";
 
 $check = mysqli_fetch_array(mysqli_query($conn,$sql));
 if(isset($check)){
include ("dashboard.php");
 }
 else{
 echo "Invalid Username or Password";
 }
 
 }
 else{
 echo "error try again";
 }
 
?>
