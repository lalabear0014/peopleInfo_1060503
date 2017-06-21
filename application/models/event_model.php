<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Event_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->model('event_model', 'em');
            $this->load->model('user_model', 'um');
            $this->load->model('message_model', 'mm');
        }

        // 取得events資料表資料
        public function getData() {
            // 最新更新時間往上放
            // $this->db->order_by('created_at', 'desc');
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                return $query->result();
            }else {
                return false;
            }
        }

        // submit()送至events資料表的內容
        public function submit() {
            date_default_timezone_set("Asia/Taipei");

            $field = array(
                'user_name' => $this->input->post('hidden_user_name'),                
                'event_name' => $this->input->post('txt_event_name'),
                'hash_event_name' => hash('md5', $this->input->post('txt_event_name')),
                'created_at' => date('Y/m/d H:i:s'),        // 創建時間
                'idnumber' => $this->input->post('txt_idnumber'),
                'validate' => $this->input->post('rd_validate'),
                'station' => $this->input->post('txt_station'),
                'birthday' => $this->input->post('txt_birthday'),
                'gender' => $this->input->post('rd_gender'),
                'education' => $this->input->post('txt_education'),
                'experience' => $this->input->post('txt_experience'),
                'phone' => $this->input->post('txt_phone'),
                'contact' => $this->input->post('txt_contact'),
                'email' => $this->input->post('txt_email'),
                'address' => $this->input->post('txt_address'),
                'process' => $this->input->post('txt_process'),
                'assess' => $this->input->post('txt_assess'),
                'use' => $this->input->post('txt_use'),
                'money' => $this->input->post('txt_money'),
                'effect' => $this->input->post('txt_effect')
            );
            $this->db->insert('events', $field);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // 取得events資料表$event_id的資料
        public function getDataById($event_id) {
            $this->db->where('event_id', $event_id);
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

        // 取得events資料表$hash_event_name的資料
        public function getDataByHashName($hash_event_name) {
            $this->db->where('hash_event_name', $hash_event_name);
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

        // 取得events資料表$user_name的資料
        public function getDataByName($user_name) {
            $result = $this->um->getDataByName($user_name);
            $this->db->where('user_name', $user_name);
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                if ($result[0]->role == 1) {
                    return $query->row();
                }
                else {
                    return $this->em->getData();
                }
            }
            else {
                return false;
            }
        }

        // update()送至events資料表的內容
        public function update() {
            $event_id = $this->input->post('hidden_event_id');
            date_default_timezone_set("Asia/Taipei");

            $field = array(
                'updated_at' => date('Y/m/d H:i:s'),        // 更新時間
                'idnumber' => $this->input->post('txt_idnumber'),
                'validate' => $this->input->post('rd_validate'),
                'station' => $this->input->post('txt_station'),
                'birthday' => $this->input->post('txt_birthday'),
                'gender' => $this->input->post('rd_gender'),
                'education' => $this->input->post('txt_education'),
                'experience' => $this->input->post('txt_experience'),
                'phone' => $this->input->post('txt_phone'),
                'contact' => $this->input->post('txt_contact'),
                'email' => $this->input->post('txt_email'),
                'address' => $this->input->post('txt_address'),
                'process' => $this->input->post('txt_process'),
                'assess' => $this->input->post('txt_assess'),
                'use' => $this->input->post('txt_use'),
                'money' => $this->input->post('txt_money'),
                'effect' => $this->input->post('txt_effect')
            );
            $this->db->where('event_id', $event_id);
            $this->db->update('events', $field);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // 取得events資料表$id的資料進行刪除
        public function delete($event_id) {
            $this->db->where('event_id', $event_id);
            $this->db->delete('events');
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // 取得events資料表的資料進行分頁
        public function page($username, $role) {
            // $this->load->model('user_model', 'um');
            // $data['users'] = $this->um->getData();
            
            $config['base_url'] = base_url('events/index/'.$username);
            // 每頁?筆資料
            $config['per_page'] = 5;
            $page = $this->uri->segment(4);
            
            $this->db->where('user_name', $username);
            $query1 = $this->db->get('events', $config["per_page"], $page);
            $this->db->where('user_name', $username);
            $query2 = $this->db->get('events');
            
            // 從資料表抓取每頁資料數
            $data['records'] = $query1->result();
            // 從資料表抓取所有資料數
            $config['total_rows'] = $query2->num_rows();
            
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
            $data['links'] = explode('&nbsp;', $str_links );

            return $data;
        }

        public function page_keyword($keyword, $username, $role) {
            $config['base_url'] = base_url('events/search/'.$username);
            // 每頁?筆資料
            $config['per_page'] = 5;
            $page = $this->uri->segment(4);
            
            if ($role == 1) { $this->db->where('user_name', $username); }
            $this->db->like('event_name', $keyword);
            $this->db->or_like('station', $keyword);
            $query1 = $this->db->get('events', $config["per_page"], $page);

            if ($role == 1) {$this->db->where('user_name', $username); }
            $this->db->like('event_name', $keyword);
            $this->db->or_like('station', $keyword);
            $query2 = $this->db->get('events');

            // 從資料表抓取每頁資料數
            $data['records'] = $query1->result();
            // 從資料表抓取所有資料數
            $config['total_rows'] = $query2->num_rows();
            
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
            $data['links'] = explode('&nbsp;', $str_links );

            return $data;
        }

        public function showMsg($hash_event_name) {
            $data['records'] = $this->em->getDataByHashName($hash_event_name);
            $data['users'] = $this->um->getData();

            $config["base_url"] = base_url('events/show/'.$hash_event_name);
            $config["per_page"] = 5;
            $page = $this->uri->segment(4);
            $this->db->like('hash_event_name', $hash_event_name);
            $query1 = $this->db->get('messages', $config["per_page"], $page);
            $data["results"] = $query1->result();
            $this->db->like('hash_event_name', $hash_event_name);
            $query2 = $this->db->get('messages');
            $config["total_rows"] = $query2->num_rows();
            
            $config['full_tag_open'] = '<u class="pagination">';
            $config['full_tag_close'] = '</u>';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><span><b>';
            $config['cur_tag_close'] = '</b></span></li>';
            $this->pagination->initialize($config);         
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links );

            return $data;
        }

    }
?>