<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
//     $this->load->model("Home");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('Admin-login/Login_page');
    }

    public function home() {
        $this->load->view('Master_page/header');
        $this->load->view('Pages/maincontent');
        $this->load->view('Master_page/foter');
    }

    public function Customer_page() {
        $this->load->view('Pages/Customer_List');
    }

    public function Database_page() {
        $this->load->view('Pages/Database');
    }

    public function check_login() {
        $user_email = $this->input->post('user_email', true);
        $user_password = $this->input->post('user_password', true);
        //echo '----'.$email_address.'-----'.$password;
        //exit();


        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($user_email, $user_password);
        // echo '<pre>';
        // print_r($result);
        if ($result) {
//           $data = array();
            $data['user_email'] = $result->user_email;
            $data['user_password'] = $result->user_password;
            redirect("welcome/home");
        } else {
            $sdata = array();
            $sdata['exception'] = "Sorry!!! User name or password is invalid!";
            $this->session->set_userdata($sdata);
            redirect("startup/index");
        }
    }
    public function product_add(){
        $data = array();

        $data['product_name'] = $this->input->post('product_name', true);
        $data['product_quntity'] = $this->input->post('product_quentity', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $this->load->model('admin_login_model', 'al_model', true);
        $this->al_model->save_product($data);
        echo $this->session->flashdata('successd');
//     $this->load->view('admin-login/pages-register');
        redirect("welcome/home");
         
    }

}
