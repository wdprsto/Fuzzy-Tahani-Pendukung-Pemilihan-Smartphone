<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Passwords extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		verify_session('admin');

		$this->load->model(array(
			'password_model' => 'password',
		));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$params['title'] = 'Kelola Password';
		$params['active_page'] = "password";

		$this->load->view('header', $params);
		$this->load->view('passwords/passwords');
		$this->load->view('footer');
	}

	public function view($id = 0)
	{
		if ($this->customer->is_kasir_exist($id)) {
			$data = $this->customer->customer_data($id);

			$params['title'] = $data->name;

			$customer['customer'] = $data;
			$customer['flash'] = $this->session->flashdata('customer_flash');
			$customer['orders'] = $this->order->order_by($id);
			$customer['payments'] = $this->payment->payment_by($id);

			$this->load->view('header', $params);
			$this->load->view('customers/view', $customer);
			$this->load->view('footer');
		} else {
			show_404();
		}
	}

	public function edit()
	{
		$action = $this->input->get('action');
		switch ($action) {
			case 'admin_password':
				$id = $this->input->post('id');
				$password = $this->input->post('password');
				$password = password_hash($password, PASSWORD_BCRYPT);

				$this->password->edit_admin_password($id, $password);
				$response = array('code' => 201);
				break;
		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);
	}

	public function api()
	{
		$action = $this->input->get('action');
		switch ($action) {
			case 'admin_passwords':
				$id = get_current_user_id();
				$passwords = $this->password->get_all_admin_passwords($id);

				$passwords['data'] = $passwords;

				$response = $passwords;
				break;
			case 'get_password':
				$id = $this->input->get('id');
				$passwords = $this->password->get_password($id);

				$passwords['data'] = $passwords;

				$response = $passwords;
				break;
			
			case 'delete_admin':
				$id = $this->input->post('id');

				$this->password->delete_admin($id);

				$response = array('code' => 204);
				break;
	
		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);
	}
}
