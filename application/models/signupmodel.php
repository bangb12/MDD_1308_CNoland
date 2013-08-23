<?php

class signupmodel extends CI_Model{

    public function __constract(){
        
    }
    public function signup(){
        //Posts data from the form into variables
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $firstname=$_POST['firstname'];
        //Uses those variables to insert into the database
        $query=mysql_query("INSERT into users(username, password, email, firstname)VALUES('$username', '$password', '$email', '$firstname')");
        $this->load->view('listing');
    }
}
?>