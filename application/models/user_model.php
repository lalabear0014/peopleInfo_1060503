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
            $this->db->where('name', $data['username']);
            $this->db->where('password', $data['password']);            
            $query = $this->db->get();
            return ($query->num_rows() == 1);
        }
        
    }
?>