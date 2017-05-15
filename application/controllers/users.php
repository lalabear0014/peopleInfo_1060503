<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Users extends CI_Controller {

        public function __construst() {
            parent::__construst();
            $this->load->model('user_model');
        }
       
        public function index() {
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                redirect(base_url('events/index'));
            }
            else {
                $this->load->view('template/header');
                $this->load->view('users/login');
                $this->load->view('template/footer');
            }
        }

        public function login() {
            $this->load->model('user_model');
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                $this->session->unset_userdata('user');
                $this->session->session_destroy();
            }

            $Message = array();
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $data = array(
                'username' => $username,
                'password' => $password
            );
            
            if ($this->user_model->validate($data)) {
                date_default_timezone_set("Asia/Taipei");
                $sessionText = array(
                    'user' => $username,
                    'ip_address' => $this->input->ip_address()
                );
                $this->session->set_userdata($sessionText);
                redirect(base_url('events/index'));
            } else {
                $Message['username'] = $username;
                $Message['errorMessage'] = "user account and password isn't correct";
                $this->load->view('template/header');
                $this->load->view('users/login', $Message);
                $this->load->view('template/footer');
            }
        }

        public function logout() {
            $this->session->unset_userdata('user');
            $this->session->sess_destroy();
            redirect(base_url('events/index'));
        }

        public function changePwd($name) {
            $this->load->model('user_model');
            $data['records'] = $this->user_model->getDataByName($name);
            if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                $this->load->view('template/header');
                $this->load->view('users/changepwd', $data);
                $this->load->view('template/footer');
            }
            else {
                $this->load->view('template/header');
                $this->load->view('users/login');
                $this->load->view('template/footer');
            }  
        }

        public function updatePwd() {
            $this->load->model('user_model');
           
            $Message = array();
            $username = trim($_POST['txt_hidden']);
            $password = trim($_POST['OldPassword']);
            $data = array(
                'username' => $username,
                'password' => $password
            );
            
            if ($this->user_model->validate($data)) {
                $result = $this->user_model->updatePwd();
                if ($result) {
                    $this->session->set_flashdata('success_msg', 'Record updated successfully');
                }
                else {
                    $this->session->set_flashdata('error_msg', 'Fail to update record');
                }
                redirect(base_url('events/index'));
            }
            else {
                $Message['username'] = $username;
                $Message['errorMessage'] = "OldPassword isn't correct";
                $this->load->view('template/header');
                $this->load->view('users/changepwd', $Message);
                $this->load->view('template/footer');
            }  
        }

    }
?>