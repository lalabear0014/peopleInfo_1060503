<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Events extends CI_Controller {

        public function __construct() {
            parent:: __construct();
            $this->load->model('event_model','em');
        }

        public function search_keyword() {
            $keyword = $this->input->post('keyword');
            $data['records'] = $this->em->search($keyword);
            $this->load->view('template/header');
            $this->load->view('events/index', $data);
            $this->load->view('template/footer');
        }

        public function index() {
            // $this->load->model("event_model");
            // $data["records"] = $this->event_model->getData();
            $data['records'] = $this->em->getData();
            $this->load->view('template/header');
            $this->load->view('events/index', $data);
            $this->load->view('template/footer');
        }

        public function show($id) {
            $data['records'] = $this->em->getDataById($id);
            $this->load->view('template/header');
            $this->load->view('events/show', $data);
            $this->load->view('template/footer');
        }

        public function add() {
            $data['records'] = $this->em->getData();
            $this->load->view('template/header');
            $this->load->view('events/add', $data);
            $this->load->view('template/footer');
        }

        public function submit() {
            $result = $this->em->submit();
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record added successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to add record');
            }
            redirect(base_url('events/index'));
        }

        public function edit($id) {
            $data['records'] = $this->em->getDataById($id);
            $this->load->view('template/header');
            $this->load->view('events/edit', $data);
            $this->load->view('template/footer');
        }

        public function update() {
            $result = $this->em->update();
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record updated successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to update record');
            }
            redirect(base_url('events/index'));
        }

        public function delete($id) {
            $result = $this->em->delete($id);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record deleted successfully');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Fail to delete record');
            }
            redirect(base_url('events/index'));
        }

        public function upload() {
            if (!empty($_FILES)) {
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $fileNameElement = explode('.', $fileName);
                $targetPath = getcwd().'/uploads/';
                $targetFile = $targetPath.$fileNameElement[0].date('YmdHis').'.'.$fileNameElement[1];
                move_uploaded_file($tempFile, $targetFile);
                // if you want to save in db,where here
                // with out model just for example
                // $this->load->database(); // load database
                // $this->db->insert('file_table',array('file_name' => $fileName));
            }
            redirect(base_url('events/show'));
        }

    }
?>