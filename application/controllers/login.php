<?

class login extends CI_Controller{
    
    function index()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('loginview');
        }else{
            redirect('listing', 'refresh');
        }

    }
    function check_database($password)
    {
        $username = $this->input->post('username');
        $result = $this->user->login($username, $password);
        
        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
    function validate_credentials()
    {
        $this->load->model('membermodel');
        $query = $this->membermodel->validate();
        if($query){
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            
            $this->session->set_userdata($data);
            redirect('success');
        }
    }
    function create_members()
    {
       $this->load->library('form_validation');
       
       $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
       $this->form_validation->set_rules('firstname', 'Name', 'trim|required');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
       $this->form_validation->set_rules('emailaddress', 'Email Address', 'trim|required|valid_email');
       
       if($this->form_validation->run() == FALSE)
       {
        $this->load->view("signup");
       }else{
        $this->load->model('membermodel');
        if($query = $this->membermodel->create_member()){
            $this->load->view('listing');
        }else{
            $this->load->view('signup');
        }
        
       }
    }
    
}

?>