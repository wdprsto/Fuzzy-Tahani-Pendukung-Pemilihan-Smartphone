<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

	public function get_nohp($id='ehumaspnlangsa')
    {
		// kalau outputnya cuma 1 baris, maka gunakan 'row()', bukan 'result()'.
        return $this->db->where('adm_id', $id)->get('tb_admin')->row();
    }

}
