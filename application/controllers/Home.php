<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
 
        ));
    }

    public function index()
    {
        $params['title'] = 'Halaman Utama';

		$this->load->view('index', $params);
		// $this->load->view('header');
    }

}
