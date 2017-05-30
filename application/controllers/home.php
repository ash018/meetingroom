<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('common_m');
        $this->load->library('parser');
    }

    public function index() {
        $this->load->view('Company/index');
    }

    public function add() {
        
        $this->load->view('booking_form');
    }

    public function hello() {
        
        #var_dump($userid);
       $this->load->view('hello',$data);
        
        
    }
    
    public function about() {
        $this->load->view('about');
        
    }
    

    public function submit() {
        /*
        $booking_date = $this->input->post('booking_date');
        $booking_time = $this->input->post('booking_time');
        //$booking_start_time  = $booking_date.' '.$booking_time;
        $end_time = $this->input->post('end_time');
        // $booking_end_time = $booking_date.' '.$end_time;
         echo $booking_start_time;
         echo $booking_end_time;
        //exit();
        */
          $save = array(
         
			'user_name'  => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
                        'user_phone' => $this->input->post('user_phone'),
                        'program_title' => $this->input->post('program_title'),
                        'MeetingRoomName' => $this->input->post('MeetingRoomName'),
                        'department' => $this->input->post('department'),
                        'booking_date' => $this->input->post('booking_date'),
                        'booking_time' => $this->input->post('booking_time'),
                        'end_time' => $this->input->post('end_time'),
                        'additional_note' => $this->input->post('additional_note'),

		);
        
        
        
        //echo 'submit page controller';
        $name = array($save['user_name']);
        $email = array($save['user_email']);
      //var_dump($save);
        
       // exit();
        $MeetingRoomName = 'fffff';
        $data = array(
            'MeetingRoomName' => $this->input->post('MeetingRoomName'),
            'user_name'  => $this->input->post('user_name'),
	    'user_email' => $this->input->post('user_email'),
            'user_phone' => $this->input->post('user_phone'),
            'program_title' => $this->input->post('program_title'),
            'department' => $this->input->post('department'),
            'booking_date' => $this->input->post('booking_date'),
            'booking_time' => $this->input->post('booking_time'),
            'end_time' => $this->input->post('end_time'),
            'additional_note' => $this->input->post('additional_note'),
        );
        $this->common_m->insert($data,'Booking');
    }
    
    public function not_booked(){
        $this->load->view('not_booked');
    }
    
     public function has_booked() {
        $this->load->view('has_booked');
    }
    
    public function checkRoom()
    {
         $data = array(
           
            'booking_date' => $this->input->post('booking_date'),
           
        );
         
       $data2['id'] = $this->common_m->checkRoom($data,'Booking');
       $data2['bookdate']= $this->input->post('booking_date');
        
       
       $this->load->view('hello2',$data2);
       //exit();
        
        
       
    }
    
    public function getCheckRoom(){
       
        echo 'ccc';
        $this->load->model('common_m');
        exit();
        $data2 = $this->common_m->checkRoom($data,$table);
       // var_dump($data2);
       // exit();
        $this->load->view('hello',$data2);
    }
}
