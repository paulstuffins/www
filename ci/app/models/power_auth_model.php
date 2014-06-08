<?php
    class Power_auth_model extends CI_Model {
        public function __construct() { parent::__construct(); }
        
        public function login() {
            if(filter_input_array(INPUT_POST)) {
                $identity = filter_input(INPUT_POST, 'identity');
                $password = filter_input(INPUT_POST, 'password');
                
                if($identity != false || $password != false) {
                    $sql = "SELECT * FROM users WHERE username = ?";
                    $login = $this->db->query($sql, array($identity));
                    
                    if ($login->num_rows() == 1) {
                        $row = $login->row();
                        
                        if (password_verify($password, $row->password ) == "1") {
                            $this->session->set_userdata('authorised', true);
                            redirect('dash/index', 'location', 307);
                        } else { return false; }
                    } else { return false; }
                } else { return false; } 
            }
        }
    }