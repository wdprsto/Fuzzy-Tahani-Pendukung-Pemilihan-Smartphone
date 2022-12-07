<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'release_model' => 'release',
            'pengumuman_model' => 'pengumuman',
			'layanan_model' => 'layanan'
        ));
    }

	public function index()
    {
        redirect('/');
    }

	public function permintaan_informasi()
    {
        $params['title'] = 'Rekomendasi Pemilihan HP';
		$params['link'] = 'permintaan_informasi';
		$this->load->view('header', $params);
		$this->load->view('permintaaninformasi');
    }

	public function press_release()
    {
        $params['title'] = 'Daftar Smartphone';
		$params['link'] = 'press_release';
		$data['rilis'] = $this->release->get_all_release();
		$this->load->view('header', $params);
		$this->load->view('pressrelease', $data);
    }

	public function release_api(){
		$action = $this->input->get('action');

		switch ($action) {
			case 'list':
				$release['data'] = $this->release->get_all_release();
				$response = $release;
				break;
			case 'rekomendasi':
				$kec_prosesor = $this->input->get('kec_prosesor');
				$core_prosesor = $this->input->get('core_prosesor');
				$ram = $this->input->get('ram');
				$mem_internal = $this->input->get('mem_internal');
				$kam_utama = $this->input->get('kam_utama');
				$kam_sekunder = $this->input->get('kam_sekunder');
				$baterai = $this->input->get('baterai');
				$so = $this->input->get('so');
				$uk_layar = $this->input->get('uk_layar');
				$harga = $this->input->get('harga');
				$performa = $this->input->get('performa');

				$query = "SELECT 
					id,
					nama,
					harga,
					LEAST(
						kec_prosesor_${kec_prosesor},
						core_prosesor_${core_prosesor},
						ram_${ram},
						mem_internal_${mem_internal},
						kam_utama_${kam_utama},
						kam_sekunder_${kam_sekunder},
						baterai_${baterai},
						uk_layar_${uk_layar},
						harga_${harga},
						performa_${performa}
					) AS performa
				FROM view_derajat";

				$release['data'] = $this->release->get_release_by_query($query);
				$response = $release;
				break;
		}

		$response = json_encode($response);
		$this->output->set_content_type('application/json')
			->set_output($response);

	}

}
