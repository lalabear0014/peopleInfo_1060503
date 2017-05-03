<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Events extends CI_Controller {

        public function __construct() {
            parent:: __construct();
            $this->load->model('event_model','em');
        }

        public function index() {
            // $this->load->model("event_model");
            // $data["records"] = $this->event_model->getData();
            $data['records'] = $this->em->getData();
            $this->load->view('template/header');
            $this->load->view("events/index", $data);
            $this->load->view('template/footer');
        }

        public function show() {
            $this->load->view('template/header');
            $this->load->view("events/show", $data);
            $this->load->view('template/footer');
        }

        public function add() {
            $data['records'] = $this->em->getData();
            $this->load->view('template/header');
            $this->load->view("events/add", $data);
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
            $this->load->view("events/edit", $data);
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
    }
?>