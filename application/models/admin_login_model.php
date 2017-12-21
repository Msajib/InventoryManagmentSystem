<?php

class Admin_Login_Model extends CI_Model {
     function __construct(){
        parent::__construct();
    }
     

    public function select_admin($user_email, $user_password) {
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', $user_password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function save_user_info($data){
     $this->db->insert('admin_user', $data);
    
    }
    public function save_product($data){
        $this->db->insert('product_list', $data);
    }

}



?>