<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Events extends CI_Controller {

        public function __construct() {
            parent:: __construct();
            $this->load->model('event_model','em');
            $this->load->model('user_model', 'um');
            $this->load->model('message_model','mm');
            $this->load->library('pagination');
        }

        public function index($username) {
            // user_list
            $logined = $this->session->userdata('user');
            $head['role'] = $this->um->getRole($logined);
            $head['records'] = $this->em->getData();
            $head['users'] = $this->um->getDataByName($username, $head['role']);
            $head['show'] = false;

            // pagination
            $keyword = $this->input->post('keyword');
            $data = $this->em->page($keyword, $username, $head['role']);
            // $data['current'] = $this->em->getDataByName($username);      

            $this->load->view('template/header', $head);    // $user['users']
            $this->load->view('events/index', $data);       // $data["records"], $data["links"]
            $this->load->view('template/footer');

            // $this->load->model("event_model");
            // $data["records"] = $this->event_model->getData();
            // $data['records'] = $this->em->getData();
                  
            // $total_rows = $this->em->record_count();
            // $config["total_rows"] = $total_rows;
            // $data["results"] = $this->em->fetch_data($config["per_page"], $page);
        }

        public function show($event_id) {
            // user_list
            $logined = $this->session->userdata('user');
            $head['role'] = $this->um->getRole($logined);
            $head['records'] = $this->em->getData();
            $head['users'] = $this->um->getDataByName($logined, $head['role']);
            $head['show'] = true;

            $data = $this->em->showMsg($event_id);           

            $this->load->view('template/header', $head);
            $this->load->view('events/show', $data);
            $this->load->view('template/footer');
        }

        public function add() {
            // user_list
            $logined = $this->session->userdata('user');
            $head['role'] = $this->um->getRole($logined);
            $head['records'] = $this->em->getData();
            $head['users'] = $this->um->getDataByName($logined, $head['role']);
            $head['show'] = false;
            
            $data['records'] = $this->em->getData();
            $this->load->view('template/header', $head);
            $this->load->view('events/add', $data);
            $this->load->view('template/footer');
        }

        public function submit($username) {
            $result = $this->em->submit();
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record added successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to add record');
            }
            redirect(base_url('events/index/'.$username));
        }

        public function edit($event_id) {
            // user_list
            $logined = $this->session->userdata('user');
            $head['role'] = $this->um->getRole($logined);
            $head['records'] = $this->em->getData();
            $head['users'] = $this->um->getDataByName($logined, $head['role']);
            $head['show'] = false;

            $data['records'] = $this->em->getDataById($event_id);
            $this->load->view('template/header', $head);
            $this->load->view('events/edit', $data);
            $this->load->view('template/footer');
        }

        public function update($username) {
            $result = $this->em->update();
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record updated successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to update record');
            }
            redirect(base_url('events/index/'.$username));
        }

        public function delete($event_id) {
            $result = $this->em->delete($event_id);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record deleted successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to delete record');
            }
            redirect(base_url('events/index'));
        }

        public function upload($event_id) {
            if (!is_dir('uploads/'.$event_id)) {
                mkdir('./uploads/'.$event_id, 777, TRUE);
            }

            if (!empty($_FILES)) {
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = iconv('utf-8','big5', $_FILES["file"]["name"]);
                $fileNameElement = explode('.', $fileName);
                $targetPath = getcwd().'/uploads/'.$event_id.'/';                
                $targetFile = $targetPath.$fileNameElement[0].date('YmdHis').'.'.$fileNameElement[1];
                move_uploaded_file($tempFile, $targetFile);
                // if you want to save in db,where here
                // with out model just for example
                // $this->load->database(); // load database
                // $this->db->insert('file_table',array('file_name' => $fileName));
            }
            redirect(base_url('events/show'));
        }

        public function pdf($event_id) {
            $this->load->library('pdf');
            
            $data['records'] = $this->em->getDataById($event_id);           
            
            $this->load->view('events/pdfreport', $data);
        }

        public function add_msg($event_id) {
            // user_list
            $head['users'] = $this->um->getData();
            $head['records'] = $this->em->getDataById($event_id);
            $head['show'] = false;

            $data['records'] = $this->mm->getDataByEventId($event_id);
            $this->load->view('template/header', $head);
            $this->load->view('events/addmsg', $data);
            $this->load->view('template/footer');
        }

        public function submit_msg($event_id) {
            $result = $this->mm->submit();
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record added messages successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to add message');
            }
            redirect(base_url('events/show/'.$event_id));
        }

    }
?>