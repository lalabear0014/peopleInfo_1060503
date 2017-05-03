<?php
    class Users extends CI_Controller {
        public function showuser() {
            echo "showuser";
            $this->load->database();
            var_dump($this->db);
        }
        public function index() {
            $this->load->model("user_model");
            $data["records"] = $this->user_model->getData();
            $this->load->view("users/index", $data);
        }
    }
?>