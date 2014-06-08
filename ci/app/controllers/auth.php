<?php
    class Auth extends CI_Controller {
        function __construct() { parent::__construct(); }
        
        function forgot() { $this->load->view('auth/forgot'); }
        
        function login() {
            if($this->power_auth_model->login() === FALSE) {
                $this->set_message->error("login");
            }
            
            $this->load->view('auth/login');
        }
        
        function logout() {
            $this->session->set_userdata('authorised', false);
            redirect('dash/index', 'location', 307);
        }
    }