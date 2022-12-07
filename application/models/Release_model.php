<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Release_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_release()
    {
        return $this->db->get('tb_smartphone')->result();
    }

	public function get_release_by_query($query)
    {
        return $this->db->query($query)->result_array();
    }

}
