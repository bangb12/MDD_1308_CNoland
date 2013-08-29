<?php

class signupmodel extends CI_Model{

    public function __constract(){
        
    }
    public function signup(){
        //Posts data from the form into variables
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username:', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('firstname', 'First Name:', 'trim|required');
        $this->form_validation->set_rules('password', 'Password:', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('emailaddress', 'Email Address:', 'trim|required|valid_email');
       //Checks if form validation found problems, posts to database if everything is okay
       if($this->form_validation->run() == FALSE)
       {
            log_message('error', 'Unable to insert into Datbase, Validation failed');
            $this->load->view("signup");
       }else{
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $email=$_POST['email'];
            $firstname=$_POST['firstname'];
            //Uses those variables to insert into the database
            $query=mysql_query("INSERT into users(username, password, email, firstname)VALUES('$username', '$password', '$email', '$firstname')");
            $this->load->view('listing');
       }
    }
}
?>