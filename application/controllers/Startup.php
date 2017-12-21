<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_login_model','add_model',TRUE);
//     $this->load->model("Home");
    }

    public function index() {
        $this->load->view('Admin-login/master/Header');
        $this->load->view('Admin-login/Login_page');
        $this->load->view('Admin-login/master/foter');
    }

    public function forget_password() {
        $this->load->view('Admin-login/master/Header');
        $this->load->view('Admin-login/pages-recoverpw');
        $this->load->view('Admin-login/master/foter');
    }

    public function new_account_create() {
        $this->load->view('Admin-login/master/Header');
        $this->load->view('Admin-login/pages-register');
        $this->load->view('Admin-login/master/foter');
    }

    public function lock_screen() {
        $this->load->view('Admin-login/master/Header');
        $this->load->view('Admin-login/pages_lock_screen');
        $this->load->view('Admin-login/master/foter');
    }

    public function login() {
        $this->load->view('Admin-login/master/Header');
        $this->load->view('Admin-login/Login_page');
        $this->load->view('Admin-login/master/foter');
    }
     public function registration() {
         $data = array();

        $data['user_name'] = $this->input->post('user_name', true);
        $data['user_number'] = $this->input->post('user_number', true);
        $data['user_email'] = $this->input->post('user_email', true);
        $data['user_password'] = $this->input->post('user_password', true);
        $data['user_repassword'] = $this->input->post('user_repassword', true);
       
        $this->add_model->save_user_info($data);
        echo $this->session->flashdata('successd');
//     $this->load->view('admin-login/pages-register');
        $this->load->view('Master_page/header');
        $this->load->view('Master_page/maincontent');
        $this->load->view('Master_page/foter');
     }
     

}
