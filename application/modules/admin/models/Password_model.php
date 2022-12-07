<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

	

    public function count_all_admin_password()
    {
        return $this->db->get('tb_admin')->num_rows();
    }

	
	public function get_all_admin_passwords($id)
	{
		$admin_passwords = $this->db->query("
			SELECT *
			FROM tb_admin
			WHERE adm_id <> '$id' and adm_id <> 'ehumaspnlangsa'
		");
				
		return $admin_passwords->result();
	}

	public function get_password($id)
	{
		$admin_passwords = $this->db->query("
			SELECT *
			FROM tb_admin
			WHERE adm_id = '$id'
		");
				
		return $admin_passwords->result();
	}
	
	public function delete_admin($id)
	{
	
		$this->db->where('adm_id', $id)->delete('tb_admin');
	
	}

	public function edit_admin_password($id, $password)
	{
		$this->db->query("
            UPDATE tb_admin
						SET adm_password = '$password'
            WHERE adm_id = '$id'
        ");
	}


}
