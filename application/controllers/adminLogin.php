<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class adminLogin extends CI_Controller{
    
    public function index(){
        $this->load-view('login');
    }
    
    
    public function process(){
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        if ($user=='0157' && $pass=='7510')
        {
             $this->session->set_userdata(array('user'=>$user));  
             $this->load->view('hello');  
        }
        else {
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login', $data);  
        }
    }
}