<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_pengumuman()
    {
        return $this->db->order_by('peng_tgl', 'desc')->get('tb_pengumuman')->result();
    }

	public function get_pengumuman($id)
    {
		// kalau outputnya cuma 1 baris, maka gunakan 'row()', bukan 'result()'.
        return $this->db->where('peng_id', $id)->get('tb_pengumuman')->row();
    }

}
