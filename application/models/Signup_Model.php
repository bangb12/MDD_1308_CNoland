<?php
session_start();
include('connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];
mysql_query("INSERT INTO member(username, password, firstname, email)VALUES('$username', '$password', '$firstname', '$email')");
header("location: signup.php?registration=success");
mysql_close($con);
?>