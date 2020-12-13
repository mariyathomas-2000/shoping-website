<?php
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
session_start();
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$contact=$_POST['contact'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$signup_query="insert into signup(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";
$signup_submit=mysqli_query($con,$signup_query) or die(mysqli_error($con));
echo "successfully inserted";
?>
        

