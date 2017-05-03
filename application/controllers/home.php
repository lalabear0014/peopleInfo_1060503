<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
        // //get table ci_sessions(table_name)
        // $res = $this->db->get('ci_sessions');
        // //var_dump($res);
        // //將data欄位印出
        // foreach ($res->result() as $item) {
        //     echo $item->data;
        //     echo '<br>';
        // }

        // 讓controller自動尋找url
        
        $this->load->view('template/layout');
		$this->load->view('index');     
	}

    // public function login() {
    //     $this->load->view('template/layout');
	// 	$this->load->view('sessions/login');
		
    // }

    // public function logout() {
    //     $this->load->view('template/layout');
	// 	$this->load->view('sessions/logout');
		
    // }

    // public function signup() {
    //     $this->load->view('template/layout');
	// 	$this->load->view('sessions/signup');		
    // }

    // public function changePassword() {
    //     $this->load->view('template/layout');
	// 	$this->load->view('changePassword');
    // }

    public function add() {
        
        $this->load->view('template/layout');
		$this->load->view('features/add');
    }

    public function test() {
        
        $this->load->library('pagination');
		$page_size=10;

        $config['base_url'] = site_url('home/test');
        $config['total_rows'] = 100;
        $config['per_page'] = $page_size;
        $config['first_link'] = '首頁';
        $config['next_link'] = '下一頁';
        

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();
        $this->load->view('test', $data);
    }
}
