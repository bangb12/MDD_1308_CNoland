<?php

class signupmodel extends CI_Model{

    public function __constract(){
        
    }
    public function nothing(){
        $wat ="<h3>momma why</h3>";
        return $wat->result();
    }
    public function signup(){
        include('database.php');
        $username=$_POST['username'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
        $email=$_POST['email'];
        mysql_query("INSERT INTO member(username, password, firstname, email)VALUES('$username', '$password', '$firstname', '$email')");
        header("location: signup.php?registration=success");
        mysql_close($con);
    }
}
?>