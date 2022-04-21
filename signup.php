<?php
include"connect.php";

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email =  $_POST['email'];
$password = $_POST['password'];
$college_name = $_POST['college_name'];
$gender = $_POST['gender'];

$sql = "insert into users(email,password,full_name,phone,gender,college_name) value('$email','$password','$full_name','$phone','$gender','$college_name')";
if($con->query($sql))
    {
    echo"('you have registered please login')";
    header('Location:index.php');
    }
    else
    {
    echo"alert('Failed')";
    }
?>