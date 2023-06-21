<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('users') ) {
            redirect('/');
        }
		// if ($this->session->userdata('users') && $this->session->userdata('users')['role'] = 'superadmin')
		// {
		// 	redirect('/');
		// }
        // $this->load->model('model_agenda_rapat');
    }

	public function index()
    {
        $data["title"] = "dashboard";
		$data["users"] = $this->session->userdata('users');
        $data["content"] = "dashboard/index";
        $data["datatables"] = true;

        $this->load->view('sneat-templates/template', $data);
    }

}
