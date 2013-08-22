<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
session_start();
include('login.php');
class Welcome extends login {

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
		$pagename = "Chris Noland's Space";
		$this->load->model('signupmodel','signup');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('loginmodel');
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
				$result = $this->login->index();
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */