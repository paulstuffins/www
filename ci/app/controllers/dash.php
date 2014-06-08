<?php
    class Dash extends CI_Controller {
        function __construct() {
            parent::__construct();
            
            if($this->session->userdata('authorised') != true) { redirect('auth/login', 'location', 307); }
        }
        
        function index() { $this->load->view('dash/index'); }
    }