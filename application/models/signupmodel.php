<?php

class signupmodel extends CI_Model{

    public function __constract(){
        
    }
    public function signup(){
        $data = array(
            $username=$_POST['username'],
            $password=md5($_POST['password']),
            $email=$_POST['email'],
            $firstname=$_POST['firstname']
        );
        var_dump($data);
        $this->db->insert('users', $data);
        $this->load->view('listing');
    }
}
?>