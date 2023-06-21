<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('users') && $this->session->userdata != 'users'){
            redirect('/');
        }
		// if($this->session->userdata('users') && $this->session->userdata('users')['role'] = 'guest')
		// {
		// 	redirect('/');
		// }
        // $this->load->model('model_agenda_rapat');
    }

	public function index()
    {
        $data["title"] = "profile";
		$data["users"] = $this->session->userdata('users');
        $data["content"] = "user/profile_akun";
        $data["datatables"] = true;
        date_default_timezone_set('Asia/Jakarta');

        $data["pr_agenda"] = $this->app_model->getWhereOrder("perencanaan", "status", "dirapatkan", "tanggal_kegiatan");
		$data["pm_agenda"] = $this->app_model->getWhereOrder("pemanfaatan", "status", "dirapatkan", "tanggal_kegiatan");
		$data["pg_agenda"] = $this->app_model->getWhereOrder("pengendalian", "status", "dirapatkan", "tanggal_kegiatan");

        $this->load->view('sneat-templates/template', $data);
    }

}
