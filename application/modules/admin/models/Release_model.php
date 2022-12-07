<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Release_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function count_all_release()
	{
		return $this->db->get('tb_smartphone')->num_rows();
	}

	public function get_all_releases()
	{
		return $this->db->get('tb_smartphone')->result();
	}

	public function delete_release($id)
	{
		$this->db->where('id', $id)->delete('tb_smartphone');

		return true;
	}

	public function last_release_id()
	{
		$result = $this->db->order_by('id', 'DESC')->limit(1)->get('tb_smartphone')->row();
		return $result;
	}

	public function add_release($data)
	{
		$this->db->insert('tb_smartphone', $data);
	}

	public function release_data($id)
	{
		return $this->db->where('id', $id)->get('tb_smartphone')->row();
	}

	public function edit_release($id, $data)
	{
		return $this->db->where('rls_id', $id)->update('tb_rilis', $data);
	}

}
