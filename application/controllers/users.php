<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Users extends CI_Controller {
        public function __construst() {
            parent::__construst();
            $this->load->library('session');
            $this->load->model('user_model', 'um');
            $this->load->helper('date');
        }
       
        public function index() {
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                redirect(base_url('events/index'));
            }
            $this->load->view('users/login');
        }

        public function loginProcess() {
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                $this->session->unset_userdata('user');
                $this->session->sess_destroy();
            }

            $Message = array();
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $data = array(
                'username' => $username,
                'password' => $password,
            );
            if ($this->um->validate($data)) {
                date_default_timezone_set("Asia/Taipei");
                $sessionText = array(
                    'user' => true,
                    'ip_address' => $this->input->ip_address(),
                    'user_agent' => $this->agent->agent_string(),
                    'last_activity' => date("Y/m/d H:i:s"),
                    'user_data' => $username,
                );
                $this->session->set_userdata($sessionText);

                $sessionData = $this->session->all_userdata();
                $this->um->logSession($sessionData);
                redirect(base_url('events/index'));
            } else {
                $Message['username'] = $username;
                $Message['errorMessage'] = "user account and password isn't correct";
                $this->load->view('users/login', $Message);
            }

        }

        public function logout() {
            $this->session->unset_userdata('user');
            $this->session->sess_destroy();
            redirect(base_url('events/index'));
        }
    }
?>