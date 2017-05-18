<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Events extends CI_Controller {

        public function __construct() {
            parent:: __construct();
            $this->load->model('event_model','em');
            $this->load->library('pagination');
        }

        public function search_keyword() {
            $keyword = $this->input->post('keyword');
            $data['records'] = $this->em->search($keyword);
            $this->load->view('template/header');
            $this->load->view('events/index', $data);
            $this->load->view('template/footer');
        }

        public function index() {
            // 分頁
            $config["base_url"] = base_url('events/index');
            // 每頁?筆資料
            $config["per_page"] = 5;
            $page = $this->uri->segment(3);
            // 從資料表抓取每頁資料數
            $query1 = $this->db->get('events', $config["per_page"], $page);
            $data["results"] = $query1->result();
            // 從資料表抓取所有資料數
            $query2 = $this->db->get('events');
            $config["total_rows"] = $query2->num_rows();
            // 分頁呈現方式
            $config['full_tag_open'] = '<u class="pagination">';
            $config['full_tag_close'] = '</u>';
            // 第一頁及最後一頁
            $config['first_tag_open'] = '<li class="page-item">';
            $config['last_tag_open'] = '<li class="page-item">';
            // 前一頁及下一頁
            $config['next_tag_open'] = '<li class="page-item">';
            $config['prev_tag_open'] = '<li class="page-item">';
            // 頁碼
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            // 當前頁面
            $config['cur_tag_open'] = '<li class="active"><span><b>';
            $config['cur_tag_close'] = '</b></span></li>';
            // config初始化
            $this->pagination->initialize($config);         
            
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links );           

            $this->load->view('template/header');
            $this->load->view('events/index', $data);
            $this->load->view('template/footer');

            // $this->load->model("event_model");
            // $data["records"] = $this->event_model->getData();
            // $data['records'] = $this->em->getData();
                  
            // $total_rows = $this->em->record_count();
            // $config["total_rows"] = $total_rows;
            // $data["results"] = $this->em->fetch_data($config["per_page"], $page);
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

        public function page() {
            $config = array();
            $config["base_url"] = base_url('events/index');
            $total_row = $this->em->record_count();
            $config["total_rows"] = $total_row;
            $config["per_page"] = 5;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row;
            $config['cur_tag_open'] = '&nbsp;<a class="current">';
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';

            $this->pagination->initialize($config);
            if ($this->uri->segment(3)) {
                $page = ($this->uri->segment(3)) ;
            }
            else {
                $page = 1;
            }
            $data["results"] = $this->em->fetch_data($config["per_page"], $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links );

            // View data according to array.
            $this->load->view('template/header');
            $this->load->view('events/index', $data);
            $this->load->view('template/footer');         
            
            // $config['base_url'] = site_url('events/page');
            // // 資料庫總數
            // $config['total_rows'] = 200;
            // // 每頁顯示?筆資料
            // $config['per_page'] = $page_size; 

            // $this->pagination->initialize($config);
            // $offset = $this->uri->segment(3);
            // $sql = "select * from users imit $offset, $page_size";
            // echo $sql;

            // $data['links'] = $this->pagination->create_links();
            // $this->load->view('template/header');
            // $this->load->view('events/index', $data);
            // $this->load->view('template/footer');
        }

    }
?>