<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
session_start();
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		ob_start();
		$pagename = "Chris Noland's Space";
		$this->load->model('signupmodel','signup');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('loginmodel', 'login');
		$this->load->model('viewmodel','views');
		if(!empty($_GET["action"])){
			if($_GET["action"]=="register"){
			    $this->load->view("signup");
			}
			if($_GET["action"]=="home"){
			    $this->load->view("listing");
			}
			if($_GET["action"]=="login"){
			    $this->load->view("loginview");
			}
			if($_GET["action"]=="checklogin"){
				$result = $this -> validate_credentials();
				if(count($result)>0){
				    $this->load->view('listing');
				    
				}else{
				    $this->load->view("loginview");
				    echo "<center>Login Error</center>";
				}
			    }
			if($_GET["action"]=="logout"){
			    $this->loginmodel->logout();
			    $this->load->view('listing');
			}
		} else {
		$this->load->view('listing');
        }
	}
	function validate_credentials()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('loginview');
        }else{
            $this->load->view('listing');
        }

    }
    function check_database($password)
    {
        $username = $this->input->post('username');
        $result = $this->loginmodel->login($username, $password);
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

///////////////Login and signup - functions////////////////

	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */