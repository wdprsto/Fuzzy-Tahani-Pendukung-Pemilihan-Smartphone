<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Release extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		verify_session('admin');

		$this->load->model(array(
			'release_model' => 'release',
		));
		$this->load->library('form_validation');

	}

	public function index()
	{
		$params['title'] = 'Release ' . get_web_name();
		$params['active_page'] = "release";

		$this->load->view('header', $params);
		$this->load->view('release/release');
		$this->load->view('footer');
	}

	public function add_release()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		// $brand = $this->input->post('brand');
		$kec_prosesor = $this->input->post('kec_prosesor');
		$core_prosesor = $this->input->post('core_prosesor');
		$ram = $this->input->post('ram');
		$mem_internal = $this->input->post('mem_internal');
		$kam_utama = $this->input->post('kam_utama');
		$kam_sekunder = $this->input->post('kam_sekunder');
		$baterai = $this->input->post('baterai');
		$so = $this->input->post('so');
		$uk_layar = $this->input->post('uk_layar');
		$harga = $this->input->post('harga');
		$performa = $this->input->post('performa');

		// Kalau ada gambar
		// // upload file
		// $config['upload_path'] = './assets/uploads/sites/rilis';
		// $config['allowed_types'] = 'jpg|png|jpeg|pdf|mp4';
		// $config['max_size'] = 10240;
		// // $config['file_name'] = time().$_FILES["userfiles"]['name'];

		// $this->load->library('upload', $config);
		// if ( isset($_FILES['filerilis']) && @$_FILES['filerilis']['error'] == '0')
		// {
		// 	if ( ! $this->upload->do_upload('filerilis'))
		// 	{
		// 		$error = array('error' => $this->upload->display_errors());

		// 		show_error($error);
		// 	}
		// 	else
		// 	{
		// 		$upload_data = $this->upload->data();
		// 		$file_name = $upload_data['file_name'];
		// 	}
		// }

		$data = array(
			"id" => $id,
			"nama" => $nama,
			// "brand" => $brand,
			"kec_prosesor" => $kec_prosesor,
			"core_prosesor" => $core_prosesor,
			"ram" => $ram,
			"mem_internal" => $mem_internal,
			"kam_utama" => $kam_utama,
			"kam_sekunder" => $kam_sekunder,
			"baterai" => $baterai,
			"so" => $so,
			"uk_layar" => $uk_layar,
			"harga" => $harga,
			"performa" => $performa,
		);

		# proses insert data
		$this->release->add_release($data);

		redirect('admin/release');
	}

	public function edit_release()
	{
		# data baru
		$id = $this->input->post('edit-id');

		$data['rls_tgl'] = $this->input->post('edit-tglrilis');
		$data['rls_perihal'] = $this->input->post('edit-perihal');
		$data['rls_jnsmedia'] = $this->input->post('edit-jenismedia');
		
		// upload file baru, kalau pengguna nambahin file di form edit
		if ( isset($_FILES['edit-filerilis']) && @$_FILES['edit-filerilis']['error'] == '0')
		{
			# data lama
			$release_data = $this->release->release_data($id);
			$picture = $release_data->rls_file;

			$config['upload_path'] = './assets/uploads/sites/rilis';
			$config['allowed_types'] = 'jpg|png|jpeg|pdf|mp4';
			$config['max_size'] = 10240;
			// $config['file_name'] = time().$_FILES["userfiles"]['name'];
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('edit-filerilis'))
			{
				$error = array('error' => $this->upload->display_errors());

				show_error($error);
			}
			else
			{
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$data['rls_file'] = $file_name;
			}
			
			$old_file = 'assets/uploads/sites/rilis/'.$picture; #karena basenya langsung ke sihumas
	
			if ( file_exists($old_file) && is_readable($old_file))
			{
				unlink($old_file);
			}
		}

		$this->release->edit_release($id, $data);

		redirect('admin/release');
	}

	public function release_api()
	{
		$action = $this->input->get('action');

		switch ($action) {
			case 'list':
				$releases['data'] = $this->release->get_all_releases();
				$response = $releases;
				break;
			case 'delete':
				$id = $this->input->post('id');

				// kalau ada gambar
				// $data = $this->release->release_data($id);
                // $picture = $data->rls_file;
                // $file = 'assets/uploads/sites/rilis/'.$picture; #karena basenya langsung ke sihumas

                // if ( file_exists($file) && is_readable($file))
                // {
                //     unlink($file);
                // }

				$this->release->delete_release($id);

				$response = array('code' => 204, 'message' => 'Rilis berhasil dihapus!');
				break;

			case 'last_id':
				$data['data'] = $this->release->last_release_id();
				$response = $data;
				break;
			case 'view_data':
				$id = $this->input->get('id');

				$data['data'] = $this->release->release_data($id);
				$response = $data;
				break;

		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);
	}
}
