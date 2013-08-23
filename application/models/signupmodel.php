<?php

class signupmodel extends CI_Model{

    public function __constract(){
        
    }
    public function signup(){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $firstname=$_POST['firstname'];
        $query=mysql_query("INSERT into users(username, password, email, firstname)VALUES('$username', '$password', '$email', '$firstname')");
        $this->load->view('listing');
    }
}
?>