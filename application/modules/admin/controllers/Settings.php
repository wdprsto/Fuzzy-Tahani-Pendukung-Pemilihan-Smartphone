<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        verify_session('admin');

        $this->load->library('form_validation');
        $this->load->model('setting_model', 'setting');
    }

    public function index()
    {
        $params['title'] = 'Pengaturan';
		$params['active_page'] = "setting";

        $settings['flash'] = $this->session->flashdata('settings_flash');
        // $settings['banks'] = (Array) json_decode(get_settings('payment_banks'));

        $this->load->view('header', $params);
        $this->load->view('settings/settings', $settings);
        $this->load->view('footer');
    }

    public function update()
    {
        $fields = array(
            'web_name', 
			'web_phone_number', 
			'web_email', 
			'web_tagline', 
			'web_description',
            'web_address', 
        );

        foreach ($fields as $field)
        {
            $data = $this->input->post($field);

            update_settings($field, $data);
        }

        $this->session->set_flashdata('settings_flash', 'Pengaturan berhasil diperbarui');
        redirect('admin/settings');
    }

    public function profile()
    {
        $params['title'] = 'Profil Saya';

        $profile['flash'] = $this->session->flashdata('settings_flash');
        $profile['user'] = $this->setting->get_profile();
		$params['active_page'] = "setting";

        $this->load->view('header', $params);
        $this->load->view('settings/profile', $profile);
        $this->load->view('footer');
    }

    public function profile_update()
    {
		$password = $this->input->post('password');
		if (!empty($password)){
			$this->form_validation->set_rules('password', 'Password', 'min_length[6]');
		}

        $this->form_validation->set_error_delimiters('<div class="text-danger font-weight-bold"><small>', '</small></div>');

        $this->form_validation->set_rules('name', 'Nama lengkap', 'required|min_length[1]');
    

		$this->form_validation->set_message('required', '%s dibutuhkan.');
		$this->form_validation->set_message('is_unique', '%s sudah pernah digunakan, silahkan coba lagi.');
		$this->form_validation->set_message('min_length', 'Panjang karakter minimal %s adalah %s karakter.');

        if ($this->form_validation->run() === FALSE)
        {
            $this->profile();
        }
        else
        {
			//selalu ingat kalau data yang diambil dari model itu dari databses
            $data = $this->setting->get_profile();
            $current_password = $data->adm_password;
			$current_username = $data->adm_id;

            $name = $this->input->post('name');
            $username = $this->input->post('username');
			$phone = $this->input->post('phone');

            if ( empty($password))
                $password = $current_password;
            else
                $password = password_hash($password, PASSWORD_BCRYPT);

            $data = array(
                'adm_nama' => $name,
                'adm_id' => $username,
                'adm_password' => $password,
				'adm_nohp' => $phone,
            );

            $this->setting->update_profile($data);

            $this->session->set_flashdata('settings_flash', 'Profil berhasil diperbarui');

			//kalau ganti username
			if($current_username!==$username){
				$this->session->set_flashdata('change_uname_notice', 'Silahkan login dengan username yang baru');
				redirect('auth/logout');
	
			}

            redirect('admin/settings/profile');
        }
    }
}
