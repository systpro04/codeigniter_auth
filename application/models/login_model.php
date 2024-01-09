<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function auth_check($data)
    {
        $query = $this->db->get_where('users', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_user($data)
    {

        $insert = $this->db->insert('users', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }
}
