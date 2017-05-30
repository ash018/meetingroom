<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('form');
                $this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->helper('url');
		$this->load->library('parser');
                
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('Register');
	}
	public function Save()
	{
		
		$this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == false)
		{
			echo 'Please enter correct email.';
			exit;
		}
		
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false)
		{
			
			echo 'Please enter password.';
			exit;
		}
		
		if ($this->form_validation->run() == true)
		{
			
			$email = $this->input->post('email');
			$password = (trim($this->input->post('password')));
			$res = $this->User_Model->Save($email,$password);
                      
			exit;
		}
	}
	public function Login()
	{
		
                
                $this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == false)
		{
			echo 'Please enter correct email.';
			exit;
		}
		
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false)
		{
			
			echo 'Please enter password.';
			exit;
		}
		
		if ($this->form_validation->run() == true)
		{
			
			
                        $email = $this->input->post('email');
			$password = md5(trim($this->input->post('password')));
			$res = $this->User_Model->login($email,$password);
			echo $res; 
			exit;
			
		}
	}
	
	public function bookMeetingRoom()
	{
		$roomID = $this->input->get('rooms');
		$this->User_Model->book_model($roomID);
		
		
		
		$this->load->model('User_Model');
		$this->data['meetingroom'] = $this->User_Model->getRoom();
		$this->load->view('welcome',$this->data);
		
		//$value2 = $this->input->get('value2');
		//echo $roomID;
		//exit();
		
	}
	
	
	public function dashboard()
	{
		$this->load->view('hello');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/User/'); 
	}
	
	
	public function getRoom() {
		
		
		
		$this->load->model('User_Model');
		$this->data['meetingroom'] = $this->User_Model->getRoom();
		//$this->User_Model->getRoom();
		//var_dump($meetingrooms);
		//exit();
		//var_dump();
		//exit();
		//$this->load->view('play_quiz', $this->data);
		
		$this->load->view('welcome',$this->data);
	}
}


?>