<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function getData() {
            $query = $this->db->get('users');
            if ($query->num_rows() > 0) {
                return $query->result();
            }else {
                return false;
            }
        }

        public function validate($data) {
            $this->db->from('users');
            $this->db->where('user_name', $data['username']);
            $this->db->where('password', $data['password']);            
            $query = $this->db->get();
            return ($query->num_rows() == 1);
        }

        public function getDataByName($name) {
            $this->db->where('user_name', $name);
            $query = $this->db->get('users');
            if ($query->num_rows() > 0) {
                return $query->row();
            }
            else {
                return false;
            }
        }

        public function updatePwd() {
            $name = $this->input->post('txt_hidden');
            date_default_timezone_set("Asia/Taipei");

            $newpwd = $this->input->post('NewPassword');
            $confirmpwd = $this->input->post('ConfirmPassword');
            
            if ($newpwd == $confirmpwd) {
                $field = array(
                    'password' => hash('sha256', $this->input->post('NewPassword')),
                    'updated_at' => date('Y/m/d H:i:s')        // 更新時間
                );
                $this->db->where('user_name', $name);
                $this->db->update('users', $field);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }
                else {
                    return false;
                }
            } 
        }

    }
?>