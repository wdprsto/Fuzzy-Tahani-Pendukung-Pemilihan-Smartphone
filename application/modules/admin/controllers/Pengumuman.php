<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		verify_session('admin');

		$this->load->library('form_validation');
		$this->load->model(array(
			'pengumuman_model' => 'pengumuman',
		));
	}

	public function index()
	{
		$params['title'] = 'Kelola Pengumuman';
		$params['active_page'] = 'pengumuman';

		$data['total_peng'] = $this->pengumuman->count_all_pengumuman();
		$this->load->view('header', $params);
		$this->load->view('pengumuman/pengumuman', $data);
		$this->load->view('footer');
	}

	public function pengumuman_api()
	{
		$action = $this->input->get('action');
		switch ($action) {
			case 'list':
				$orders['data'] = $this->pengumuman->get_all_pengumuman();

				$response = $orders;
				break;
			case 'delete':
				$id_peng = $this->input->post('id_peng');

				$this->pengumuman->delete_pengumuman($id_peng);

				$response = array('code' => 204, 'id' => $id_peng);
				break;
		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);
	}

	public function pengumuman_baru()
	{
		$params['title'] = 'Tambah Pengumuman';
		$params['active_page'] = 'pengumuman';

		$peng['flash'] = $this->session->flashdata('add_new_pengumuman_flash');
		$peng['last_id'] = $this->pengumuman->get_last_peng_id();

		if (!$peng['last_id']) {
			$peng['last_id'] = new \stdClass();
			$peng['last_id']->peng_id = '1';
		}else{
			$peng['last_id']->peng_id += 1;
		}
		// var_dump($peng);

		$this->load->view('header', $params);
		$this->load->view('pengumuman/pengumumanbaru', $peng);
		$this->load->view('footer');
	}

	public function buat_pengumuman()
	{
		$peng_id = $this->input->post('idpeng');
		$peng_tgl = $this->input->post('tglpeng');
		$peng_judul = $this->input->post('judulpeng');
		$peng_isi = $this->input->post('isipeng');

		$data = array(
			'peng_id' => $peng_id,
			'peng_tgl' => $peng_tgl,
			'peng_judul' => $peng_judul,
			'peng_isi' => $peng_isi,
		);

		$this->pengumuman->add_new_peng($data);

		redirect('admin/pengumuman');
	}
	
	public function edit($id='')
	{
		$params['title'] = 'Edit Pengumuman';
		$params['active_page'] = 'pengumuman';

		$peng['flash'] = $this->session->flashdata('edit_pengumuman_flash');
		$peng['data'] = $this->pengumuman->get_pengumuman($id);

		$this->load->view('header', $params);
		$this->load->view('pengumuman/pengumumanedit', $peng);
		$this->load->view('footer');
	}

	public function edit_pengumuman()
	{
		$peng_id = $this->input->post('idpeng');
		$peng_tgl = $this->input->post('tglpeng');
		$peng_judul = $this->input->post('judulpeng');
		$peng_isi = ($this->input->post('isipeng', TRUE));

		$data = array(
			'peng_tgl' => $peng_tgl,
			'peng_judul' => $peng_judul,
			'peng_isi' => $peng_isi,
		);

		$this->pengumuman->edit_pengumuman($peng_id, $data);

		redirect('admin/pengumuman');
	}
}
