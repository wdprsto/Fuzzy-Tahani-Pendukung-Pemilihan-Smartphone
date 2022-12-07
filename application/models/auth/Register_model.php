<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function register_admin($data)
    {
        $this->db->insert('tb_admin', $data);

        // return $this->db->insert_id();
    }



}
