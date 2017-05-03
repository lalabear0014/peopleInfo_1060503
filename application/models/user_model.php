<?php
    class User_model extends CI_Model {
        public function getData() {
            $query = $this->db->get('usertable');
            return $query->result();
        }
    }
?>