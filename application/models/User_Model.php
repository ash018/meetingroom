<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class User_Model extends CI_Model 
{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
    }
	
    public function signin()
	{
		$this->load->view('login');
	}
	
	public function Login($email,$password) 
        {
		
    	
        $qry = $this->db->get_where('users',array('email'=>$email, 'password'=>$password));
        
        if ($qry->num_rows()>0) 
        {
			
			$row= $qry->row();
			$this->session->set_userdata($email); //setting session

			//You can further redirect users to Dashboard by using
			//redirect(base_url().'User/dashboard');
                        $this->load->view('User/dashboard');
			exit;
		}
		else 
		{
			echo 'Incorrect Username or Password';
			exit;
			//redirect(base_url().'index.php/User/'); redirect back to login
		}
    }
	 
	 public function Save($email,$password) 
    {
		
    	
                $sql ="INSERT INTO users (email,password) values ('$email','$password')";
		$result = $this->db->query($sql);
		redirect(base_url().'User/'); 
                //$this->load->view('User/');
        
    }
	
	public function book_model($roomID)
	{
		//echo $roomID;
		//exit();
		$sql = "INSERT INTO booking (mroomID) values ('$roomID')";
		$result= $this->db->query($sql);
		redirect(base_url().'User/dashboard');
	}
	
	public function getRoom()
	{
		$this->db->select("id, Name");
		$this->db->from("meetingroom");
		
		$query = $this->db->get();
		
		//var_dump($query->result());
		//exit();
		
		return $query->result();
		
		//$num_data_returned = $query->num_rows;
		
		/*if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
		*/
	}
	
	
	

}	

?>