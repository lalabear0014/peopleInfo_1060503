<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Message_model extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        // 取得messages資料表資料
        public function getData() {
            // 最新更新時間往上放
            // $this->db->order_by('created_at', 'desc');
            $query = $this->db->get('messages');
            if ($query->num_rows() > 0) {
                return $query->result();
            }else {
                return false;
            }
        }

        // submit()送至messages資料表的內容
        public function submit() {
            date_default_timezone_set("Asia/Taipei");

            $field = array(
                'event_id' => $this->input->post('hidden_event_id'),        
                'user_name' => $this->input->post('hidden_user_name'),        
                'info' => $this->input->post('txt_info'),
                'created_at' => date('Y/m/d H:i:s')        // 創建時間
            );
            $this->db->insert('messages', $field);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // 取得messages資料表$id的資料
        public function getDataById($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('messages');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

        // 取得messages資料表$event_id的資料
        public function getDataByEventId($event_id) {
            $this->db->where('event_id', $event_id);
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

    }
?>