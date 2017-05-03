<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Event_model extends CI_Model {
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
                'name' => $this->input->post('txt_name'),
                'created_at' => date("Y/m/d H:i:s"),        // 創建時間
                'idnumber' => $this->input->post('txt_idnumber'),
                'validate' => $this->input->post('txt_validate'),
                'station' => $this->input->post('txt_station'),
                'birthday' => $this->input->post('txt_birthday'),
                'gender' => $this->input->post('txt_gender'),
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

        // 取得events資料表$id的資料
        public function getDataById($id) {
            $this->db->where('id', $id);
            $query = $this->db->get('events');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

        // update()送至events資料表的內容
        public function update() {
            $id = $this->input->post('txt_hidden');
            date_default_timezone_set("Asia/Taipei");

            $field = array(
                'name' => $this->input->post('txt_name'),
                'updated_at' => date("Y/m/d H:i:s"),        // 更新時間
                'idnumber' => $this->input->post('txt_idnumber'),
                'validate' => $this->input->post('txt_validate'),
                'station' => $this->input->post('txt_station'),
                'birthday' => $this->input->post('txt_birthday'),
                'gender' => $this->input->post('txt_gender'),
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
            $this->db->where('id', $id);
            $this->db->update('events', $field);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // 取得events資料表$id的資料進行刪除
        public function delete($id) {
            $this->db->where('id', $id);
            $this->db->delete('events');
            if ($this->db->affected_rows() > 0) {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>