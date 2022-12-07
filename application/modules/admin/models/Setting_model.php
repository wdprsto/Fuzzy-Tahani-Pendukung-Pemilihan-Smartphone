<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
    public $user_id;

    public function __construct()
    {
        parent::__construct(); 

        $this->user_id = get_current_user_id();
    }

    public function get_profile()
    {
        $id = $this->user_id;
        $user = $this->db->where('adm_id', $id)->get('tb_admin');

        return $user->row();
    }

    public function update_profile($data)
    {
        $id = $this->user_id;
		$this->db->where('adm_id', $id)->update('tb_admin', $data);
        return true;
    }
}
