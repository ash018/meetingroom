<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('common_m');
        $this->load->helper('url');
        $this->load->library('parser');
    }

    public function index() {
        
        $this->load->view('check');
    }

    
}
