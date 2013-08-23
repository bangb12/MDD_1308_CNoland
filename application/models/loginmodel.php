<?

class loginModel extends CI_Model{
    
    public function __constract(){
        
    }
    
    public function login($username,$password){ //Passes in username and password from login fields
        //Selects from the database should something match the username and password input
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        //Gets the result of the selection
        $query = $this->db->get();
        //If statement that leads to log in if there is a row, which means something matched.
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return FALSE;
        }
        
    }
    
    public function logout(){
        //Ends the session and unsets all data for the user.
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->view('listing');
    }
}

?>