<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		
        verify_session('admin');
		
        $this->load->model(array(
            'release_model' => 'release',
        ));
    }

    public function index()
    {
        $params['title'] = 'Admin ';
		$params['active_page'] = "dashboard";

        $overview['total_data'] = $this->release->count_all_release();
       
		$overview['flash'] = $this->session->flashdata('store_flash');
 
        $this->load->view('header', $params);
        $this->load->view('overview', $overview);
        $this->load->view('footer');
    }
}
