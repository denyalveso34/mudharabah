<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Drivemain extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('users') && $this->session->userdata('users') ['role'] != 'superadmin'){
            redirect('/');
        }
        if (!$this->session->userdata('users')){
            redirect('/');
        }
    }
	
	public function index()
	{
		$data["title"] = "drivemain";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "drivemain/drivemain";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}
}