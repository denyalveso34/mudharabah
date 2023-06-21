<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pemanfaatan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('users') && $this->session->userdata('users')['role'] != 'superadmin' && $this->session->userdata('users')['role'] != 'pemanfaatan' ) {
            $this->session->set_flashdata("alert", "error");
            $this->session->set_flashdata("message", "Jangan Mencoba Masuk");

            redirect('/dashboard');
        }
        if (!$this->session->userdata('users')){
            $this->session->set_flashdata("alert", "error");
            $this->session->set_flashdata("message", "Jangan Mencoba Masuk");
            redirect('/');
        }
    }
	
	public function index(){
		$data["title"] = "pemanfaatan";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/home_pemanfaatan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}
	
	
    public function tabel_arsip_rekomendasi(){
		$data["title"] = "Arsip Rekomendasi";
        $data["users"] = $this->session->userdata('users');
        $data["rekomendasi_list"] = $this->app_model->getSorted("permohonan", "id_permohonan");
		$data["content"] = "pemanfaatan/tabel_arsip_rekomendasi";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_dasar_pkkpr(){
		$data["title"] = "Arsip Dasar PKKPR";
        $data["users"] = $this->session->userdata('users');
        $data["pkkpr_list"] = $this->app_model->getSorted("data_pkkpr", "id_pkkpr");
		$data["content"] = "pemanfaatan/tabel_arsip_dasar_pkkpr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_persyaratan(){
		$data["title"] = "Arsip Persyaratan PKPR";
        $data["users"] = $this->session->userdata('users');
        $data["persyaratan_list"] = $this->app_model->getSorted("data_persyaratan", "id_persyaratan");
		$data["content"] = "pemanfaatan/tabel_arsip_persyaratan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_ketentuan_tambahan(){
		$data["title"] = "Arsip Ketentuan Tambahan";
        $data["users"] = $this->session->userdata('users');
        $data["ketentuan_tambahan_list"] = $this->app_model->getSorted("data_ketentuan_tambahan", "id_ketentuan_tambahan");
		$data["content"] = "pemanfaatan/tabel_arsip_ketentuan_tambahan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_ketentuan_lain(){
		$data["title"] = "Arsip Ketentuan Lain";
        $data["users"] = $this->session->userdata('users');
        $data["ketentuan_lain_list"] = $this->app_model->getSorted("data_ketentuan_lain", "id_ketentuan_lain");
		$data["content"] = "pemanfaatan/tabel_arsip_ketentuan_lain";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_sppr(){
		$data["title"] = "Arsip SPPR";
        $data["users"] = $this->session->userdata('users');
        $data["sppr_list"] = $this->app_model->getSorted("data_sppr", "id_sppr");
		$data["content"] = "pemanfaatan/tabel_arsip_sppr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_pkkpr(){
		$data["title"] = "Arsip Peta Persetujuan";
        $data["users"] = $this->session->userdata('users');
        $data["peta_list"] = $this->app_model->getSorted("peta_persetujuan", "id_persetujuan");
		$data["content"] = "pemanfaatan/tabel_arsip_pkkpr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_permohonan_info(){
		$data["title"] = "Arsip Permohonan Informasi";
        $data["users"] = $this->session->userdata('users');
        $data["pemanfaatan_list"] = $this->app_model->getSorted("data_informasi", "id_informasi");
		$data["content"] = "pemanfaatan/tabel_arsip_permohonan_info";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_input_sppr(){
		$data["title"] = "Input Data SPPR";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/tabel_input_sppr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    // PEMANFAATAN KKPR
    public function tabel_input_kkpr(){
		$data["title"] = "Input Data KKPR";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/tabel_input_kkpr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    
   
    // CREATE DATA PEMANFAATAN
    public function tabel_input_pemanfaatan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            //$this->form_validation->set_rules('koordinat_geojson', 'Koordinat Geojson', 'trim|required');
            //$this->form_validation->set_rules('koordinat_shp', 'Koordinat shp', 'trim|required');
            //$this->form_validation->set_rules('penguasaan_tanah', 'penguasaan tanah', 'trim|required');
            //$this->form_validation->set_rules('teknis_bangunan', 'Teknis Bangunan', 'trim|required');
            $this->form_validation->set_rules('pertex_terbit', 'pertex terbit', 'trim|required');
            $this->form_validation->set_rules('pertex_diterima', 'pertex diterima', 'trim|required');
            $this->form_validation->set_rules('nomor_pertex', 'Nomor Pertex', 'trim|required');
            //$this->form_validation->set_rules('data_bpn', 'data BPN', 'trim|required');
            $this->form_validation->set_rules('nomor_ba', 'Nomor Berita Acara');
            $this->form_validation->set_rules('tanggal_ba', 'Tanggal Berita Acara');
            $this->form_validation->set_rules('komentar', 'Komentar');
            //$this->form_validation->set_rules('upload_ba', 'Upload Berita Acara');
            $this->form_validation->set_rules('status', 'Status Kegiatan');

            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_input_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_pemanfaatan_exists = $this->app_model->check_exists("pemanfaatan", "id_pemanfaatan", $this->input->post("id_pemanfaatan"));
                
                if($id_pemanfaatan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(

                        "bidang"  		        => $this->input->post("bidang"),
                        "nama_kegiatan"  		=> $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
                        "koordinat_geojson" 	=> $this->input->post("koordinat_geojson"),
                        "koordinat_shp"  		=> $this->input->post("koordinat_shp"),
                        "penguasaan_tanah"    	=> $this->input->post("penguasaan_tanah"),
                        "teknis_bangunan"    	=> $this->input->post("teknis_bangunan"),
                        "pertex_terbit" 		=> $this->input->post("pertex_terbit"),
                        "pertex_diterima" 		=> $this->input->post("pertex_diterima"),
                        "nomor_pertex" 		    => $this->input->post("nomor_pertex"),
                        "data_bpn" 			    => $this->input->post("data_bpn"),
                        "nomor_ba" 			    => $this->input->post("nomor_ba"),
                        "tanggal_ba" 			=> $this->input->post("tanggal_ba"),
                        "komentar" 			    => $this->input->post("komentar"),
                        "upload_ba" 			=> $this->input->post("upload_ba"),
                        "status" 		        => $this->input->post("status"),
                        
                        
                    );

                    /*upload koordinat_geojson*/
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = true;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('koordinat_geojson'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/tabel_input_pemanfaatan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['koordinat_geojson'] = $upload_data['file_name'];
                    }

                    /*upload koordinat_shp*/
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = true;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('koordinat_shp'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/tabel_input_pemanfaatan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['koordinat_shp'] = $upload_data['file_name'];
                    }

                    /*upload penguasaan_tanah*/
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = true;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('penguasaan_tanah'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/tabel_input_pemanfaatan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['penguasaan_tanah'] = $upload_data['file_name'];
                    }

                    /*upload teknis_bangunan*/
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = true;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('teknis_bangunan'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/tabel_input_pemanfaatan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['teknis_bangunan'] = $upload_data['file_name'];
                    }

                    /*upload upload_ba*/
                    #$config['upload_path']          = './uploads/';
                    #$config['allowed_types']        = 'gif|jpg|png|jpeg';
                    #$config['max_size']             = 1000000;
                    #$config['encrypt_name']         = true;

                    #$this->load->library('upload', $config);

                    #if ( ! $this->upload->do_upload('upload_ba'))
                    #{
                    #    $this->session->set_flashdata("alert", "error");
                    #    $this->session->set_flashdata("message", $this->upload->display_errors());
                    #    redirect('pemanfaatan/tabel_input_pemanfaatan');
                    #}
                    #else
                    #{
                    #    $upload_data = $this->upload->data();
                    #    $data['upload_ba'] = $upload_data['file_name'];
                    #}
                    
                     /*upload data_bpn*/
                     $config['upload_path']          = './uploads/';
                     $config['allowed_types']        = 'gif|jpg|png|jpeg';
                     $config['max_size']             = 1000000;
                     $config['encrypt_name']         = true;
 
                     $this->load->library('upload', $config);
 
                     if ( ! $this->upload->do_upload('data_bpn'))
                     {
                         $this->session->set_flashdata("alert", "error");
                         $this->session->set_flashdata("message", $this->upload->display_errors());
                         redirect('pemanfaatan/tabel_input_pemanfaatan');
                     }
                     else
                     {
                         $upload_data = $this->upload->data();
                         $data['data_bpn'] = $upload_data['file_name'];
                     }

                    /* save to db */
                    $save = $this->app_model->addData("pemanfaatan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_pemanfaatan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/tabel_input_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/tabel_input_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Input Data Pemanfaatan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/tabel_input_pemanfaatan";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function tabel_arsip_pemanfaatan(){
		$data["title"] = "Arsip Pemanfaatan";
        $data["users"] = $this->session->userdata('users');
        $data["pemanfaatan_list"] = $this->app_model->getSorted("pemanfaatan", "id_pemanfaatan");
		$data["content"] = "pemanfaatan/tabel_arsip_pemanfaatan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function edit_pemanfaatan() {
        
        if($this->input->post('submit')) {   

            $id_pemanfaatan = $this->input->post("id_pemanfaatan");

            /* validate */
			$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Status Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Nama Kegiatan', 'trim|required');
            //$this->form_validation->set_rules('koordinat_geojson', 'Tanggal Kegiatan', 'trim|required');
            //$this->form_validation->set_rules('koordinat_shp', 'Pelapor', 'trim|required');
            //$this->form_validation->set_rules('penguasaan_tanah', 'Berita Acara', 'trim|required');
            //$this->form_validation->set_rules('teknis_bangunan', 'Catatan', 'trim|required');
            $this->form_validation->set_rules('pertex_terbit', 'pertex terbit', 'trim|required');
            $this->form_validation->set_rules('pertex_diterima', 'Upload Foto / Bukti', 'trim|required');
            $this->form_validation->set_rules('nomor_pertex', 'Materi', 'trim|required');
            //$this->form_validation->set_rules('data_bpn', 'Materi', 'trim|required');
            $this->form_validation->set_rules('nomor_ba', 'Materi');
            $this->form_validation->set_rules('tanggal_ba', 'Materi');
            $this->form_validation->set_rules('komentar', 'Materi');
            //$this->form_validation->set_rules('upload_ba', 'Materi', 'trim|required');
            $this->form_validation->set_rules('status', 'Materi');
            

            $pemanfaatan_lama = $this->db->where("id_pemanfaatan", $id_pemanfaatan)->get("pemanfaatan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_pemanfaatan_exists = $this->app_model->check_exists("pemanfaatan", "id_pemanfaatan", $this->input->post("id_pemanfaatan"));
                
                if($id_pemanfaatan_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
                        
                        "bidang"  		            => $this->input->post("bidang"),
                        "nama_kegiatan" 	        => $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  		=> $this->input->post("tanggal_kegiatan"),
                        "koordinat_geojson"  	    => $this->input->post("koordinat_geojson"),
                        "koordinat_shp"  	        => $this->input->post("koordinat_shp"),
                        "penguasaan_tanah"  	    => $this->input->post("penguasaan_tanah"),
                        "teknis_bangunan"  	        => $this->input->post("teknis_bangunan"),
                        "pertex_terbit" 		    => $this->input->post("pertex_terbit"),
                        "pertex_diterima"  	        => $this->input->post("pertex_diterima"),
                        "nomor_pertex"  	        => $this->input->post("nomor_pertex"),
                        "data_bpn"  	            => $this->input->post("data_bpn"),
                        "nomor_ba"  	            => $this->input->post("nomor_ba"),
                        "tanggal_ba"  	            => $this->input->post("tanggal_ba"),
                        "komentar"  	            => $this->input->post("komentar"),
                        "upload_ba"  	            => $this->input->post("upload_ba"),
                        "status"  	                => $this->input->post("status"),
                        
						
					);
                    
                    /*upload koordinat_geojson*/
                    if (!empty($_FILES['koordinat_geojson']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('koordinat_geojson'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/tabel_input_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['koordinat_geojson'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['koordinat_geojson'] = $pemanfaatan_lama->koordinat_geojson;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    }

                    /*upload koordinat_shp*/
                    if (!empty($_FILES['koordinat_shp']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('koordinat_shp'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/tabel_input_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['koordinat_shp'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['koordinat_shp'] = $pemanfaatan_lama->koordinat_shp;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    }
                    
                    /*upload penguasaan_tanah*/
                    if (!empty($_FILES['penguasaan_tanah']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('penguasaan_tanah'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/tabel_input_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['penguasaan_tanah'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['penguasaan_tanah'] = $pemanfaatan_lama->penguasaan_tanah;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    }

                    /*upload teknis_bangunan*/
                    if (!empty($_FILES['teknis_bangunan']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('teknis_bangunan'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/tabel_input_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['teknis_bangunan'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['teknis_bangunan'] = $pemanfaatan_lama->teknis_bangunan;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    }

                    /*upload data_bpn*/
                    if (!empty($_FILES['data_bpn']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('data_bpn'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/tabel_input_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['data_bpn'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['data_bpn'] = $pemanfaatan_lama->data_bpn;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    }
                    
                    /*upload upload_ba*/
                    #if (!empty($_FILES['upload_ba']['name'])) {
                    #    /*upload foto*/
                    #    $config['upload_path']          = './uploads/';
                    #    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    #    $config['max_size']             = 1000000;
                    #    $config['encrypt_name']         = true;
            
                    #   $this->load->library('upload', $config);
            
                    #    if ( ! $this->upload->do_upload('upload_ba'))
                    #    {
                    #        $this->session->set_flashdata("alert", "error");
                    #        $this->session->set_flashdata("message", $this->upload->display_errors());
                    #        redirect('pemanfaatan/tabel_input_pemanfaatan');
                    #    }
                    #    else
                    #    {
                     #       $upload_data = $this->upload->data();
                    #        $data['upload_ba'] = $upload_data['file_name'];
                    #   }
                    #} else {
                        /* if user not upload new file or photo use old file */
                    #    $data['upload_ba'] = $pemanfaatan_lama->upload_ba;
                    #    $this->session->set_flashdata("alert", "success");
					#	$this->session->set_flashdata("message", "Data berhasil disimpan");
					#	redirect("pemanfaatan/tabel_arsip_pemanfaatan");  
                    #}

					/* save to db */
					$save = $this->app_model->updateData("pemanfaatan","id_pemanfaatan", $id_pemanfaatan, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("pemanfaatan/tabel_arsip_pemanfaatan");   
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_pemanfaatan");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Data Pemanfaatan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/tabel_input_pemanfaatan";

            $check_exists = $this->app_model->getWhere('pemanfaatan', 'id_pemanfaatan', $this->input->get('id_pemanfaatan', TRUE));

            if($check_exists->num_rows() > 0) {
                $pemanfaatan = $check_exists->row_array();
                $data["edit"] = array (
                    
                    "id_pemanfaatan"  		    => $pemanfaatan["id_pemanfaatan"],
                    "bidang"  		            => $pemanfaatan["bidang"],
                    "nama_kegiatan"  		    => $pemanfaatan["nama_kegiatan"],
                    "tanggal_kegiatan" 		    => $pemanfaatan["tanggal_kegiatan"],
                    "koordinat_geojson"  		=> $pemanfaatan["koordinat_geojson"],
                    "koordinat_shp"  	        => $pemanfaatan["koordinat_shp"],
                    "penguasaan_tanah"  	    => $pemanfaatan["penguasaan_tanah"],
                    "teknis_bangunan"  	        => $pemanfaatan["teknis_bangunan"],
                    "pertex_terbit"  	        => $pemanfaatan["pertex_terbit"],
                    "pertex_diterima"  	        => $pemanfaatan["pertex_diterima"],
                    "nomor_pertex"  	        => $pemanfaatan["nomor_pertex"],
                    "data_bpn"  	            => $pemanfaatan["data_bpn"],
                    "nomor_ba"  	            => $pemanfaatan["nomor_ba"],
                    "tanggal_ba"  	            => $pemanfaatan["tanggal_ba"],
                    "komentar"  	            => $pemanfaatan["komentar"],
                    "upload_ba"  	            => $pemanfaatan["upload_ba"],
                    "status"  	                => $pemanfaatan["status"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_pemanfaatan");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus(){
        $id = $this->input->get('id_pemanfaatan');
        $this->db->delete('pemanfaatan', array('id_pemanfaatan'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_pemanfaatan");    
    }
    //end PEMANFAATAN KKPR

    public function tabel_input_permohonan(){
		$data["title"] = "Upload Permohonan Informasi";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/tabel_input_permohonan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function input_persyaratan_pkpr(){
		$data["title"] = "Data Persyaratan PKPR";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/input_persyaratan_pkpr";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function input_ketentuan_tambahan(){
		$data["title"] = "Data Ketentuan Tambahan";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/input_ketentuan_tambahan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function input_ketentuan_lain(){
		$data["title"] = "Data Ketentuan Lain";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/input_ketentuan_lain";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function input_pkkpr_pemanfaatan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_pkkpr', 'No Dasar PKKPR', 'trim|required');
            $this->form_validation->set_rules('nama_pkkpr', 'Nama Dasar PKKPR', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_pkkpr_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_pkkpr_exists = $this->app_model->check_exists("data_pkkpr", "id_pkkpr", $this->input->post("id_pkkpr"));
                
                if($id_pkkpr_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "id_pkkpr"  		    => $this->input->post("id_pkkpr"),
                        "no_pkkpr" 		        => $this->input->post("no_pkkpr"),
                        "nama_pkkpr"  		    => $this->input->post("nama_pkkpr"),
                        
                    );
                    /* save to db */
                    $save = $this->app_model->addData("data_pkkpr", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_pkkpr_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_pkkpr_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Dasar PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_dasar_pkkpr";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_pkkpr_pemanfaatan() {
        
        if($this->input->post('submit')) {   

            $id_pkkpr = $this->input->post("id_pkkpr");

            /* validate */
			$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_pkkpr', 'No Dasar PKKPR', 'trim|required');
            $this->form_validation->set_rules('nama_pkkpr', 'Nama Dasar PKKPR', 'trim|required');
        
            $pkkpr_lama = $this->db->where("id_pkkpr", $id_pkkpr)->get("data_pkkpr");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_dasar_pkkpr');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_pkkpr_exists = $this->app_model->check_exists("data_pkkpr", "id_pkkpr", $this->input->post("id_pkkpr"));
                
                if($id_pkkpr_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "id_pkkpr"  		    => $this->input->post("id_pkkpr"),
                        "no_pkkpr" 		        => $this->input->post("no_pkkpr"),
                        "nama_pkkpr"  		    => $this->input->post("nama_pkkpr"),
					);

            
					/* save to db */
					$save = $this->app_model->updateData("data_pkkpr","id_pkkpr", $id_pkkpr, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");   
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Dasar PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_dasar_pkkpr";

            $check_exists = $this->app_model->getWhere('data_pkkpr', 'id_pkkpr', $this->input->get('id_pkkpr', TRUE));

            if($check_exists->num_rows() > 0) {
                $pkkpr = $check_exists->row_array();
                $data["edit"] = array (
                    "bidang"  		        => $pkkpr["bidang"],
                    "id_pkkpr"  		    => $pkkpr["id_pkkpr"],
                    "no_pkkpr" 		        => $pkkpr["no_pkkpr"],
                    "nama_pkkpr"  		    => $pkkpr["nama_pkkpr"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus_pkkpr() {
        $id = $this->input->get('id_pkkpr');
        $this->db->delete('data_pkkpr', array('id_pkkpr'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_dasar_pkkpr");    
    }
    
    public function input_persyaratan_pemanfaatan() {
    
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_persyaratan', 'No Dasar Persyaratan', 'trim|required');
            $this->form_validation->set_rules('nama_persyaratan', 'Nama Dasar Persyaratan', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_persyaratan_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_persyaratan_exists = $this->app_model->check_exists("data_persyaratan", "id_persyaratan", $this->input->post("id_persyaratan"));
                
                if($id_persyaratan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		            => $this->input->post("bidang"),
                        "id_persyaratan"  		    => $this->input->post("id_persyaratan"),
                        "no_persyaratan" 		    => $this->input->post("no_persyaratan"),
                        "nama_persyaratan"  		=> $this->input->post("nama_persyaratan"),
                        
                    );
                    /* save to db */
                    $save = $this->app_model->addData("data_persyaratan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_persyaratan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_persyaratan_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_persyaratan_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Persyaratan PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_persyaratan_pkpr";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_persyaratan_pemanfaatan() {
    
        if($this->input->post('submit')) {   

            $id_persyaratan = $this->input->post("id_persyaratan");

            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_persyaratan', 'No Persyaratan PKKPR', 'trim|required');
            $this->form_validation->set_rules('nama_persyaratan', 'Nama Persyaratan PKKPR', 'trim|required');
        
            $persyaratan_lama = $this->db->where("id_persyaratan", $id_persyaratan)->get("data_persyaratan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_persyaratan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_persyaratan_exists = $this->app_model->check_exists("data_persyaratan", "id_persyaratan", $this->input->post("id_persyaratan"));
                
                if($id_persyaratan_exists > 0) {
                    /* if id not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		                => $this->input->post("bidang"),
                        "id_persyaratan"  		        => $this->input->post("id_persyaratan"),
                        "no_persyaratan" 		        => $this->input->post("no_persyaratan"),
                        "nama_persyaratan"  		    => $this->input->post("nama_persyaratan"),
                    );

            
                    /* save to db */
                    $save = $this->app_model->updateData("data_persyaratan","id_persyaratan", $id_persyaratan, $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_persyaratan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/tabel_arsip_persyaratan");   
                    }
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_persyaratan");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Persyaratan PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_persyaratan_pkpr";

            $check_exists = $this->app_model->getWhere('data_persyaratan', 'id_persyaratan', $this->input->get('id_persyaratan', TRUE));

            if($check_exists->num_rows() > 0) {
                $persyaratan = $check_exists->row_array();
                $data["edit"] = array (
                    "bidang"  		                => $persyaratan["bidang"],
                    "id_persyaratan"  		        => $persyaratan["id_persyaratan"],
                    "no_persyaratan" 		        => $persyaratan["no_persyaratan"],
                    "nama_persyaratan"  		    => $persyaratan["nama_persyaratan"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_persyaratan");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }
    
    public function hapus_persyaratan() {
        $id = $this->input->get('id_persyaratan');
        $this->db->delete('data_persyaratan', array('id_persyaratan'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_persyaratan");   
    }

    public function input_peta_pemanfaatan() {
    
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('peruntukan', 'Peruntukan Dimohon', 'trim|required');
            $this->form_validation->set_rules('lokasi', 'Lokasi Dimohon', 'trim|required');
            $this->form_validation->set_rules('keputusan_pkkpr', 'Keputusan PKKPR', 'trim|required');
            //$this->form_validation->set_rules('upload_shp', 'Upload File SHP', 'trim|required');
            $this->form_validation->set_rules('ketentuan_kegiatan', 'Ketentuan Umum Zonasi', 'trim|required');
            $this->form_validation->set_rules('kdb', 'Koefisien Dasar Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('klb', 'Koefisien Lantai Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('kbm', 'Ketinggian Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('kdh', 'Koefisien Dasar Hijau maksimum', 'trim|required');
            $this->form_validation->set_rules('persyaratan_khusus', 'Persyaratan Khusus', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_peta_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_persetujuan_exists = $this->app_model->check_exists("peta_persetujuan", "id_persetujuan", $this->input->post("id_persetujuan"));
                
                if($id_persetujuan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		            => $this->input->post("bidang"),
                        #"id_persetujuan"  		    => $this->input->post("id_persetujuan"),
                        "nama" 		                => $this->input->post("nama"),
                        "alamat"  		            => $this->input->post("alamat"),
                        "peruntukan"  		        => $this->input->post("peruntukan"),
                        "lokasi"  		            => $this->input->post("lokasi"),
                        "keputusan_pkkpr"  		    => $this->input->post("keputusan_pkkpr"),
                        "upload_shp"  		        => $this->input->post("upload_shp"),
                        "ketentuan_kegiatan"  		=> $this->input->post("ketentuan_kegiatan"),
                        "kdb"  		                => $this->input->post("kdb"),
                        "klb"  		                => $this->input->post("klb"),
                        "kbm"  		                => $this->input->post("kbm"),
                        "kdh"  		                => $this->input->post("kdh"),
                        "persyaratan_khusus"  		=> $this->input->post("persyaratan_khusus"),
                        
                    );

                     /*upload foto*/
                     $config['upload_path']          = './uploads/';
                     $config['allowed_types']        = 'gif|jpg|png|jpeg';
                     $config['max_size']             = 1000000;
                     $config['encrypt_name']         = true;
 
                     $this->load->library('upload', $config);
 
                     if ( ! $this->upload->do_upload('upload_shp'))
                     {
                         $this->session->set_flashdata("alert", "error");
                         $this->session->set_flashdata("message", $this->upload->display_errors());
                         redirect('pemanfaatan/input_peta_pemanfaatan');
                     }
                     else
                     {
                         $upload_data = $this->upload->data();
                         $data['upload_shp'] = $upload_data['file_name'];
                     }
 
                    /* save to db */
                    $save = $this->app_model->addData("peta_persetujuan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_pkkpr");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_peta_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_peta_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Peta Persetujuan PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/pkkpr";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_peta_pemanfaatan() {

        if($this->input->post('submit')) {   

            $id_persetujuan = $this->input->post("id_persetujuan");

            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('peruntukan', 'Peruntukan Dimohon', 'trim|required');
            $this->form_validation->set_rules('lokasi', 'Lokasi Dimohon', 'trim|required');
            $this->form_validation->set_rules('keputusan_pkkpr', 'Keputusan PKKPR', 'trim|required');
            //$this->form_validation->set_rules('upload_shp', 'Upload File SHP', 'trim|required');
            $this->form_validation->set_rules('ketentuan_kegiatan', 'Ketentuan Umum Zonasi', 'trim|required');
            $this->form_validation->set_rules('kdb', 'Koefisien Dasar Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('klb', 'Koefisien Lantai Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('kbm', 'Ketinggian Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('kdh', 'Koefisien Dasar Hijau maksimum', 'trim|required');
            $this->form_validation->set_rules('persyaratan_khusus', 'Persyaratan Khusus', 'trim|required');
        
            $peta_persetujuan_lama = $this->db->where("id_persetujuan", $id_persetujuan)->get("peta_persetujuan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_pkkpr');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_persetujuan_exists = $this->app_model->check_exists("peta_persetujuan", "id_persetujuan", $this->input->post("id_persetujuan"));
                
                if($id_persetujuan_exists > 0) {
                    /* if id not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		            => $this->input->post("bidang"),
                        "nama" 		                => $this->input->post("nama"),
                        "alamat"  		            => $this->input->post("alamat"),
                        "peruntukan"  		        => $this->input->post("peruntukan"),
                        "lokasi"  		            => $this->input->post("lokasi"),
                        "keputusan_pkkpr"  		    => $this->input->post("keputusan_pkkpr"),
                        "upload_shp"  		        => $this->input->post("upload_shp"),
                        "ketentuan_kegiatan"  		=> $this->input->post("ketentuan_kegiatan"),
                        "kdb"  		                => $this->input->post("kdb"),
                        "klb"  		                => $this->input->post("klb"),
                        "kbm"  		                => $this->input->post("kbm"),
                        "kdh"  		                => $this->input->post("kdh"),
                        "persyaratan_khusus"  		=> $this->input->post("persyaratan_khusus"),
                    );
                    
                    if (!empty($_FILES['upload_shp']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('upload_shp'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/input_peta_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['upload_shp'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['upload_shp'] = $peta_persetujuan_lama->upload_shp;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_pkkpr");  
                    }
            
                    /* save to db */
                    $save = $this->app_model->updateData("peta_persetujuan","id_persetujuan", $id_persetujuan, $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_pkkpr");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/tabel_arsip_pkkpr");   
                    }
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "id persetujuan not found!");
                    redirect("pemanfaatan/tabel_arsip_pkkpr");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Peta Persetujuan PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/pkkpr";

            $check_exists = $this->app_model->getWhere('peta_persetujuan', 'id_persetujuan', $this->input->get('id_persetujuan', TRUE));

            if($check_exists->num_rows() > 0) {
                $peta = $check_exists->row_array();
                $data["edit"] = array (
                    "bidang"  		                    => $peta["bidang"],
                    "nama"  		                    => $peta["nama"],
                    "alamat"  		                    => $peta["alamat"],
                    "peruntukan"  		                => $peta["peruntukan"],
                    "lokasi"  		                    => $peta["lokasi"],
                    "keputusan_pkkpr"  		            => $peta["keputusan_pkkpr"],
                    "upload_shp"  		                => $peta["upload_shp"],
                    "ketentuan_kegiatan"  		        => $peta["ketentuan_kegiatan"],
                    "id_persetujuan"  		            => $peta["id_persetujuan"],
                    "kdb"  		                        => $peta["kdb"],
                    "klb"  		                        => $peta["klb"],
                    "kbm"  		                        => $peta["kbm"],
                    "kdh"  		                        => $peta["kdh"],
                    "persyaratan_khusus"  		        => $peta["persyaratan_khusus"],
            );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_pkkpr");    
            }

        $this->load->view('sneat-templates/template', $data);
        }
        
    
    }
        
    public function hapus_peta_pemanfaatan() {
        $id = $this->input->get('id_persetujuan');
        $this->db->delete('peta_persetujuan', array('id_persetujuan'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_pkkpr");    
    }

    
    public function input_ketentuan_tambahan_pemanfaatan() {
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_ketentuan_tambahan', 'No Ketentuan Tambahan', 'trim|required');
            $this->form_validation->set_rules('nama_ketentuan_tambahan', 'Nama Ketentuan Tambahan', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_ketentuan_tambahan_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_ketentuan_tambahan_exists = $this->app_model->check_exists("data_ketentuan_tambahan", "id_ketentuan_tambahan", $this->input->post("id_ketentuan_tambahan"));
                
                if($id_ketentuan_tambahan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		                    => $this->input->post("bidang"),
                        "id_ketentuan_tambahan"  		    => $this->input->post("id_ketentuan_tambahan"),
                        "no_ketentuan_tambahan" 		    => $this->input->post("no_ketentuan_tambahan"),
                        "nama_ketentuan_tambahan"  		    => $this->input->post("nama_ketentuan_tambahan"),
                        
                    );
                    /* save to db */
                    $save = $this->app_model->addData("data_ketentuan_tambahan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_ketentuan_tambahan_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_ketentuan_tambahan_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data Ketentuan Tambahan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_ketentuan_tambahan";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }          
    }

    public function edit_ketentuan_tambahan_pemanfaatan() {

        if($this->input->post('submit')) {   

            $id_ketentuan_tambahan = $this->input->post("id_ketentuan_tambahan");

            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_ketentuan_tambahan', 'No Ketentuan Tambahan', 'trim|required');
            $this->form_validation->set_rules('nama_ketentuan_tambahan', 'Nama Ketentuan Tambahan', 'trim|required');
        
            $ketentuan_tambahan_lama = $this->db->where("id_ketentuan_tambahan", $id_pkkpr)->get("data_ketentuan_tambahan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_ketentuan_tambahan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_ketentuan_tambahan_exists = $this->app_model->check_exists("data_ketentuan_tambahan", "id_ketentuan_tambahan", $this->input->post("id_ketentuan_tambahan"));
                
                if($id_ketentuan_tambahan_exists > 0) {
                    /* if id not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		                    => $this->input->post("bidang"),
                        "id_ketentuan_tambahan"  		    => $this->input->post("id_ketentuan_tambahan"),
                        "no_ketentuan_tambahan" 		    => $this->input->post("no_ketentuan_tambahan"),
                        "nama_ketentuan_tambahan"  		    => $this->input->post("nama_ketentuan_tambahan"),
                    );

            
                    /* save to db */
                    $save = $this->app_model->updateData("data_ketentuan_tambahan","id_ketentuan_tambahan", $id_ketentuan_tambahan, $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");   
                    }
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Ketentuan Tambahan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_ketentuan_tambahan";

            $check_exists = $this->app_model->getWhere('data_ketentuan_tambahan', 'id_ketentuan_tambahan', $this->input->get('id_ketentuan_tambahan', TRUE));

            if($check_exists->num_rows() > 0) {
                $ketentuan_tambahan = $check_exists->row_array();
                $data["edit"] = array (
                    "bidang"  		                    => $ketentuan_tambahan["bidang"],
                    "id_ketentuan_tambahan"  		    => $ketentuan_tambahan["id_ketentuan_tambahan"],
                    "no_ketentuan_tambahan" 		    => $ketentuan_tambahan["no_ketentuan_tambahan"],
                    "nama_ketentuan_tambahan"  		    => $ketentuan_tambahan["nama_ketentuan_tambahan"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }
        
    public function hapus_ketentuan_tambahan() {
        $id = $this->input->get('id_ketentuan_tambahan');
        $this->db->delete('data_ketentuan_tambahan', array('id_ketentuan_tambahan'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_ketentuan_tambahan");    
    }
    
    public function input_ketentuan_lain_pemanfaatan() {

        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_ketentuan_lain', 'No Ketentuan Lain', 'trim|required');
            $this->form_validation->set_rules('nama_ketentuan_lain', 'Nama Ketentuan Lain', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_ketentuan_lain_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_ketentuan_lain_exists = $this->app_model->check_exists("data_ketentuan_lain", "id_ketentuan_lain", $this->input->post("id_ketentuan_lain"));
                
                if($id_ketentuan_lain_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		                => $this->input->post("bidang"),
                        "id_ketentuan_lain"  		    => $this->input->post("id_ketentuan_lain"),
                        "no_ketentuan_lain" 		    => $this->input->post("no_ketentuan_lain"),
                        "nama_ketentuan_lain"  		    => $this->input->post("nama_ketentuan_lain"),
                        
                    );
                    /* save to db */
                    $save = $this->app_model->addData("data_ketentuan_lain", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_lain");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_ketentuan_lain_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_ketentuan_lain_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data Ketentuan Lain";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_ketentuan_lain";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_ketentuan_lain_pemanfaatan() {

        if($this->input->post('submit')) {   

            $id_ketentuan_lain = $this->input->post("id_ketentuan_lain");

            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('no_ketentuan_lain', 'No Ketentuan Lain', 'trim|required');
            $this->form_validation->set_rules('nama_ketentuan_lain', 'Nama Ketentuan Lain', 'trim|required');
        
            $ketentuan_lain_lama = $this->db->where("id_ketentuan_lain", $id_ketentuan_lain)->get("data_ketentuan_lain");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_ketentuan_lain');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_ketentuan_lain_exists = $this->app_model->check_exists("data_ketentuan_lain", "id_ketentuan_lain", $this->input->post("id_ketentuan_lain"));
                
                if($id_ketentuan_lain_exists > 0) {
                    /* if id not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		                    => $this->input->post("bidang"),
                        "id_ketentuan_lain"  		        => $this->input->post("id_ketentuan_lain"),
                        "no_ketentuan_lain" 		        => $this->input->post("no_ketentuan_lain"),
                        "nama_ketentuan_lain"  		        => $this->input->post("nama_ketentuan_lain"),
                    );

            
                    /* save to db */
                    $save = $this->app_model->updateData("data_ketentuan_lain","id_ketentuan_lain", $id_ketentuan_lain, $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_lain");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/tabel_arsip_ketentuan_lain");   
                    }
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_ketentuan_lain");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Ketentuan Lain";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_ketentuan_lain";

            $check_exists = $this->app_model->getWhere('data_ketentuan_lain', 'id_ketentuan_lain', $this->input->get('id_ketentuan_lain', TRUE));

            if($check_exists->num_rows() > 0) {
                $ketentuan_lain = $check_exists->row_array();
                $data["edit"] = array (
                    "bidang"  		                    => $ketentuan_lain["bidang"],
                    "id_ketentuan_lain"  		        => $ketentuan_lain["id_ketentuan_lain"],
                    "no_ketentuan_lain" 		        => $ketentuan_lain["no_ketentuan_lain"],
                    "nama_ketentuan_lain"  		        => $ketentuan_lain["nama_ketentuan_lain"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_ketentuan_lain");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }
        
    public function hapus_ketentuan_lain() {
        $id = $this->input->get('id_ketentuan_lain');
        $this->db->delete('data_ketentuan_lain', array('id_ketentuan_lain'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_ketentuan_lain");    

    }
    
    //DATA SPPR
    public function input_sppr_pemanfaatan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pelapor', 'Pelapor', 'trim|required');
            $this->form_validation->set_rules('berita_acara', 'Berita Acara', 'trim|required');
            $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Upload Foto / Bukti', 'trim|required');
            //$this->form_validation->set_rules('materi', 'Materi', 'trim|required');
           

            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_sppr_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_sppr_exists = $this->app_model->check_exists("data_sppr", "id_sppr", $this->input->post("id_sppr"));
                
                if($id_sppr_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "status" 		        => $this->input->post("status"),
                        "nama_kegiatan"  		=> $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
                        "nama_pelapor"  	    => $this->input->post("nama_pelapor"),
                        "berita_acara"  	    => $this->input->post("berita_acara"),
                        "catatan"  	            => $this->input->post("catatan"),
                        "foto"  	            => $this->input->post("foto"),
                        "materi"  	            => $this->input->post("materi"),
                        
                    );

                    /*upload foto*/
                    $config['upload_path']          = './uploads/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = true;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('foto'))
                   {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/input_sppr_pemanfaatan');
                   }
                    else
                   {
                        $upload_data = $this->upload->data();
                        $data['foto'] = $upload_data['file_name'];
                   }

                    /*upload file*/
                    $config_file['upload_path']          = './uploads/';
                    $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                    $config_file['max_size']             = 100000000;
                    $config_file['encrypt_name']         = true;

                    $this->upload->initialize($config_file);

                    if ( ! $this->upload->do_upload('materi'))
                   {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('pemanfaatan/input_sppr_pemanfaatan');
                   }
                    else
                   {
                        $upload_file = $this->upload->data();
                        $data['materi'] = $upload_file['file_name'];
                   }

                    /* save to db */
                    $save = $this->app_model->addData("data_sppr", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_sppr");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_sppr_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_sppr_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data SPPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_sppr";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_sppr_pemanfaatan() {
        
        if($this->input->post('submit')) {   

            $id_sppr = $this->input->post("id_sppr");

            /* validate */
			$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pelapor', 'Pelapor', 'trim|required');
            $this->form_validation->set_rules('berita_acara', 'Berita Acara', 'trim|required');
            $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Upload Foto / Bukti', 'trim|required');
            //$this->form_validation->set_rules('materi', 'Materi', 'trim|required');
            

            $sppr_lama = $this->db->where("id_sppr", $id_sppr)->get("data_sppr");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_sppr');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_sppr_exists = $this->app_model->check_exists("data_sppr", "id_sppr", $this->input->post("id_sppr"));
                
                if($id_sppr_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "status" 	        	=> $this->input->post("status"),
                        "nama_kegiatan"  		=> $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
                        "nama_pelapor"  	    => $this->input->post("nama_pelapor"),
                        "berita_acara"  	    => $this->input->post("berita_acara"),
                        "catatan"  	            => $this->input->post("catatan"),
                        "foto"  	            => $this->input->post("foto"),
                        "materi"  	            => $this->input->post("materi"),
                        
						
					);

                    if (!empty($_FILES['foto']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('foto'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/input_sppr_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['foto'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['foto'] = $sppr_lama->foto;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/input_sppr_pemanfaatan");  
                    }

                    if (!empty($_FILES['materi']['name'])) {
                        /*upload file*/
                        $config_file['upload_path']          = './uploads/';
                        $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                        $config_file['max_size']             = 100000000;
                        $config_file['encrypt_name']         = true;
            
                        $this->upload->initialize($config_file);
            
                        if ( ! $this->upload->do_upload('materi'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/input_sppr_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['materi'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['materi'] = $sppr_lama->materi;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_sppr");  
                    }

					/* save to db */
					$save = $this->app_model->updateData("data_sppr","id_sppr", $id_sppr, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_sppr");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("pemanfaatan/tabel_arsip_sppr");   
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_sppr");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Data SPPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_sppr";

            $check_exists = $this->app_model->getWhere('data_sppr', 'id_sppr', $this->input->get('id_sppr', TRUE));

            if($check_exists->num_rows() > 0) {
                $sppr = $check_exists->row_array();
                $data["edit"] = array (
                    
                    "id_sppr"  		        => $sppr["id_sppr"],
                    "bidang"  		        => $sppr["bidang"],
                    "status" 		        => $sppr["status"],
                    "nama_kegiatan"  		=> $sppr["nama_kegiatan"],
                    "tanggal_kegiatan"  	=> $sppr["tanggal_kegiatan"],
                    "nama_pelapor"  	    => $sppr["nama_pelapor"],
                    "berita_acara"  	    => $sppr["berita_acara"],
                    "catatan"  	            => $sppr["catatan"],
                    "foto"  	            => $sppr["foto"],
                    "materi"  	            => $sppr["materi"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_sppr");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus_sppr() {
        $id = $this->input->get('id_sppr');
        $this->db->delete('data_sppr', array('id_sppr'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_sppr");    

    }


    //end DATA SPPR
	

    //PERMOHONAN INFORMASI
    public function input_informasi_pemanfaatan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'trim|required');
            $this->form_validation->set_rules('berita_acara', 'Berita Acara', 'trim|required');
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'trim|required');
            $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
            //$this->form_validation->set_rules('materi', 'Materi', 'trim|required');
            

            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_informasi_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_informasi_exists = $this->app_model->check_exists("data_informasi", "id_informasi", $this->input->post("id_informasi"));
                
                if($id_informasi_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "status" 		        => $this->input->post("status"),
                        "nama_kegiatan"  		=> $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
                        "nama_pemohon"  	    => $this->input->post("nama_pemohon"),
                        "berita_acara"  	    => $this->input->post("berita_acara"),
                        "pembahasan"  	        => $this->input->post("pembahasan"),
                        "kesimpulan"  	        => $this->input->post("kesimpulan"),
                        "foto"  	            => $this->input->post("foto"),
                        "materi"  	            => $this->input->post("materi"),

                        
                    );
                    
                     /*upload foto*/
                     $config['upload_path']          = './uploads/';
                     $config['allowed_types']        = 'gif|jpg|png|jpeg';
                     $config['max_size']             = 1000000;
                     $config['encrypt_name']         = true;
 
                     $this->load->library('upload', $config);
 
                     if ( ! $this->upload->do_upload('foto'))
                    {
                         $this->session->set_flashdata("alert", "error");
                         $this->session->set_flashdata("message", $this->upload->display_errors());
                         redirect('pemanfaatan/input_informasi_pemanfaatan');
                    }
                     else
                    {
                         $upload_data = $this->upload->data();
                         $data['foto'] = $upload_data['file_name'];
                    }
 
                     /*upload file*/
                     $config_file['upload_path']          = './uploads/';
                     $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                     $config_file['max_size']             = 100000000;
                     $config_file['encrypt_name']         = true;
 
                     $this->upload->initialize($config_file);
 
                     if ( ! $this->upload->do_upload('materi'))
                    {
                         $this->session->set_flashdata("alert", "error");
                         $this->session->set_flashdata("message", $this->upload->display_errors());
                         redirect('pemanfaatan/input_informasi_pemanfaatan');
                    }
                     else
                    {
                         $upload_file = $this->upload->data();
                         $data['materi'] = $upload_file['file_name'];
                    }

                    /* save to db */
                    $save = $this->app_model->addData("data_informasi", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_permohonan_info");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_informasi_pemanfaatan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_informasi_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data Permohonan Informasi";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_permohonan_informasi";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function edit_informasi_pemanfaatan() {
        
        if($this->input->post('submit')) {   

            $id_informasi = $this->input->post("id_informasi");

            /* validate */
			$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pemohon', 'Pemohon', 'trim|required');
            $this->form_validation->set_rules('berita_acara', 'Berita Acara', 'trim|required');
            $this->form_validation->set_rules('pembahasan', 'Pembahasan', 'trim|required');
            $this->form_validation->set_rules('kesimpulan', 'Kesimpulan', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Upload Foto / Bukti', 'trim|required');
            //$this->form_validation->set_rules('materi', 'Materi', 'trim|required');
            

            $informasi_lama = $this->db->where("id_informasi", $id_informasi)->get("data_informasi");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/tabel_arsip_permohonan_info');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_informasi_exists = $this->app_model->check_exists("data_informasi", "id_informasi", $this->input->post("id_informasi"));
                
                if($id_informasi_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "status" 		        => $this->input->post("status"),
                        "nama_kegiatan"  		=> $this->input->post("nama_kegiatan"),
                        "tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
                        "nama_pemohon"  	    => $this->input->post("nama_pemohon"),
                        "berita_acara"  	    => $this->input->post("berita_acara"),
                        "pembahasan"  	        => $this->input->post("pembahasan"),
                        "kesimpulan"  	        => $this->input->post("kesimpulan"),
                        "foto"  	            => $this->input->post("foto"),
                        "materi"  	            => $this->input->post("materi"),
						
					);
                    
                    if (!empty($_FILES['foto']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = true;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('foto'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/input_informasi_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['foto'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['foto'] = $perencanaan_lama->foto;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/input_informasi_pemanfaatan");  
                    }

                    if (!empty($_FILES['materi']['name'])) {
                        /*upload file*/
                        $config_file['upload_path']          = './uploads/';
                        $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                        $config_file['max_size']             = 100000000;
                        $config_file['encrypt_name']         = true;
            
                        $this->upload->initialize($config_file);
            
                        if ( ! $this->upload->do_upload('materi'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('pemanfaatan/input_informasi_pemanfaatan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['materi'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['materi'] = $informasi_lama->materi;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_permohonan_info");  
                    }
            
					/* save to db */
					$save = $this->app_model->updateData("data_informasi","id_informasi", $id_informasi, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_permohonan_info");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("pemanfaatan/tabel_arsip_permohonan_info");   
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_permohonan_info");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Permohonan Informasi";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/input_permohonan_informasi";

            $check_exists = $this->app_model->getWhere('data_informasi', 'id_informasi', $this->input->get('id_informasi', TRUE));

            if($check_exists->num_rows() > 0) {
                $pemanfaatan = $check_exists->row_array();
                $data["edit"] = array (

                    "id_informasi"     	    => $pemanfaatan["id_informasi"],
                    "bidang"  		        => $pemanfaatan["bidang"],
                    "status" 		        => $pemanfaatan["status"],
                    "nama_kegiatan"  		=> $pemanfaatan["nama_kegiatan"],
                    "tanggal_kegiatan"  	=> $pemanfaatan["tanggal_kegiatan"],
                    "nama_pemohon"  	    => $pemanfaatan["nama_pemohon"],
                    "berita_acara"  	    => $pemanfaatan["berita_acara"],
                    "pembahasan"  	        => $pemanfaatan["pembahasan"],
                    "kesimpulan"  	        => $pemanfaatan["kesimpulan"],
                    "foto"  	            => $pemanfaatan["foto"],
                    "materi"  	            => $pemanfaatan["materi"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_permohonan_info");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        

    }

    public function hapus_informasi() {
        $id = $this->input->get('id_informasi');
        $this->db->delete('data_informasi', array('id_informasi'=>$id));
        
        redirect("pemanfaatan/tabel_arsip_permohonan_info");    

    }
    //end PERMOHONAN INFORMASI
    
    // FORM INPUT PERSETUJUAN KESESUAIAN
	//public function pkkpr(){
	//	$data["title"] = "Peta PKKPR";
     //   $data["users"] = $this->session->userdata('users');
	//	$data["content"] = "pemanfaatan/pkkpr";
	//	$data["datatables"] = TRUE;
		
	//	$this->load->view('sneat-templates/template', $data);
	//}
	
    public function rekomendasi(){
		$data["title"] = "pemanfaatan";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "pemanfaatan/rekomendasi";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function input_pkkpr() {
        
        if($this->input->post('submit')) {   
                     
            /* validate */
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No Telfon', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('user/tambah-user');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $email_exists = $this->app_model->check_exists("user", "email", $this->input->post("email"));
                
                if($email_exists == 0) {
                    /* if email not exists check password */
                    
					/* set data */
					$data = array(
						"email"     	=> $this->input->post("email"),
						"password"  	=> md5($this->input->post("password")),
						"username" 		=> $this->input->post("username"),
						"nama_lengkap"  => $this->input->post("nama_lengkap"),
						"telepon"    	=> $this->input->post("telepon"),
						"alamat"    	=> $this->input->post("alamat"),
						"jenis_kelamin" => $this->input->post("jenis_kelamin"),
						"tanggal_lahir" => $this->input->post("tanggal_lahir"),
						"role"    		=> $this->input->post("role"),
						
					);
					/* save to db */
					$save = $this->app_model->addData("user", $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("user");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("user/tambah-user");
					}
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "Email telah digunakan!");
                    redirect("user/tambah-user");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Peta Persetujuan PKKPR";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/pkkpr";
            $this->load->view('sneat-templates/template', $data);
        }
        
    }
	
    public function tambah_rekomendasi() {
        
        if($this->input->post('submit')) {   
                     
            /* validate */
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No Telfon', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('user/tambah-user');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $email_exists = $this->app_model->check_exists("user", "email", $this->input->post("email"));
                
                if($email_exists == 0) {
                    /* if email not exists check password */
                    
					/* set data */
					$data = array(
						"email"     	=> $this->input->post("email"),
						"password"  	=> md5($this->input->post("password")),
						"username" 		=> $this->input->post("username"),
						"nama_lengkap"  => $this->input->post("nama_lengkap"),
						"telepon"    	=> $this->input->post("telepon"),
						"alamat"    	=> $this->input->post("alamat"),
						"jenis_kelamin" => $this->input->post("jenis_kelamin"),
						"tanggal_lahir" => $this->input->post("tanggal_lahir"),
						"role"    		=> $this->input->post("role"),
						
					);
					/* save to db */
					$save = $this->app_model->addData("user", $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("user");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("user/tambah-user");
					}
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "Email telah digunakan!");
                    redirect("user/tambah-user");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "tambah_user";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "user/form_tambah_user";
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

	public function edit_rekomendasi() {
        
        if($this->input->post('submit')) {   

            $id_akun = $this->input->post("id");

            /* validate */
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'trim|required');
            // $this->form_validation->set_rules('password', 'Password', 'trim');
            $this->form_validation->set_rules('telepon', 'No Telfon', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('role', 'Role', 'trim|required');
            
            $profil_lama = $this->db->where("id", $id_akun)->get("user");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('user/edit-user');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_exists = $this->app_model->check_exists("user", "id", $this->input->post("id"));
                
                if($id_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
						"email"     	=> $this->input->post("email"),
						// "password"  	=> md5($this->input->post("password")),
						"username" 		=> $this->input->post("username"),
						"nama_lengkap"  => $this->input->post("nama_lengkap"),
						"telepon"    	=> $this->input->post("telepon"),
						"alamat"    	=> $this->input->post("alamat"),
						"jenis_kelamin" => $this->input->post("jenis_kelamin"),
						"tanggal_lahir" => $this->input->post("tanggal_lahir"),
						"role"    		=> $this->input->post("role"),
						
					);

                    if ($this->input->post("password")){
                        $data["password"] = md5($this->input->post("password"));
                    }
					/* save to db */
					$save = $this->app_model->updateData("user","id", $id_akun, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("user");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("user/edit-user");
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("user");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "edit_user";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "user/form_tambah_user";

            $check_exists = $this->app_model->getWhere('user', 'id', $this->input->get('id', TRUE));

            if($check_exists->num_rows() > 0) {
                $user = $check_exists->row_array();
                $data["edit"] = array (
                    "id"            => $user["id"],
                    "username"      => $user["username"],
                    "email"         => $user["email"],
                    "nama_lengkap"  => $user["nama_lengkap"],
                    "password"      => $user["password"],
                    "telepon"       => $user["telepon"],
                    "alamat"        => $user["alamat"],
                    "jenis_kelamin" => $user["jenis_kelamin"],
                    "tanggal_lahir" => $user["tanggal_lahir"],
                    "role"          => $user["role"],
                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("user");
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus_rekomendasi() {
        $id = $this->input->get('id');
        $this->db->delete('user', array('id'=>$id));
        
        redirect('user');

    }

    public function wizard(){
        $data["title"] = "wizard";
        $data["users"] = $this->session->userdata('users');
        $data["content"] = "pemanfaatan/wizard";
        $data["datatables"] = TRUE;
        
        $this->load->view('sneat-templates/template', $data);
    }

     // CREATE DATA DI FORM WIZARD
     public function input_rekomendasi_pemanfaatan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'trim|required');
            $this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
            $this->form_validation->set_rules('alamat_kantor', 'Alamat Kantor', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No Telepon', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('status_modal', 'Status Penanaman Modal', 'trim|required');
            $this->form_validation->set_rules('kode_kbli', 'Kode KBLI', 'trim|required');
            $this->form_validation->set_rules('judul_kbli', 'Judul KBLI', 'trim|required');
            $this->form_validation->set_rules('skala_usaha', 'Skala Usaha', 'trim|required');
            $this->form_validation->set_rules('lokasi_usaha', 'Lokasi Usaha', 'trim|required');
            #$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
            #$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
            #$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
            #$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
            $this->form_validation->set_rules('koordinat_geografis', 'Koordinat Geografis', 'trim|required');
            $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'trim|required');
            $this->form_validation->set_rules('penggunaan_tanah', 'Penggunaan Tanah', 'trim|required');
            $this->form_validation->set_rules('rencana_teknis', 'Rencana Teknis Bangunan', 'trim|required');
            $this->form_validation->set_rules('status_tanah', 'Status Tanah', 'trim|required');
            #$this->form_validation->set_rules('dasar_pkkpr', 'Dasar PKKPR', 'trim|required');
            $this->form_validation->set_rules('dinyatakan', 'Dinyatakan', 'trim|required');
            $this->form_validation->set_rules('koordinat_geografis2', 'Koordinat Geografis', 'trim|required');
            $this->form_validation->set_rules('luas_tanah_disetujui', 'Luas Tanah Disetujui', 'trim|required');
            $this->form_validation->set_rules('jenis_peruntukan', 'Jenis Peruntukan Pemanfaatan', 'trim|required');
            $this->form_validation->set_rules('kode_kbli2', 'Kode KBLI', 'trim|required');
            $this->form_validation->set_rules('judul_kbli2', 'Judul KBLI', 'trim|required');
            $this->form_validation->set_rules('kdb', 'KDB', 'trim|required');
            $this->form_validation->set_rules('ketinggian_bangunan', 'Ketinggian Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('indikasi_program', 'Indikasi Program Pemanfaatan', 'trim|required');
            #$this->form_validation->set_rules('ppkpr', 'Persyaratan PKPR', 'trim|required');
            $this->form_validation->set_rules('garis_sempadan', 'Garis Sempadan Bangunan', 'trim|required');
            $this->form_validation->set_rules('jarak_bebas', 'Jarak Bebas Bangunan minimum', 'trim|required');
            $this->form_validation->set_rules('KDH', 'Koefisien Dasar Hijau maksimum', 'trim|required');
            $this->form_validation->set_rules('koefisien_tapak', 'Koefisien Tapak Basement', 'trim|required');
            $this->form_validation->set_rules('jaringan_utilitas', 'Penyediaan Sarana dan Prasarana Minimal', 'trim|required');
            #$this->form_validation->set_rules('ketentuan_tambahan', 'Ketentuan Tambahan', 'trim|required');
            #$this->form_validation->set_rules('ketentuan_lain', 'Ketentuan Lain', 'trim|required');

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_rekomendasi_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_permohonan_exists = $this->app_model->check_exists("permohonan", "id_permohonan", $this->input->post("id_permohonan"));
                
                if($id_permohonan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "judul_kegiatan"  		=> $this->input->post("judul_kegiatan"),
                        "nama_pemohon"  		=> $this->input->post("nama_pemohon"),
                        "npwp"  		        => $this->input->post("npwp"),
                        "alamat_kantor" 		=> $this->input->post("alamat_kantor"),
                        "telepon"  		        => $this->input->post("telepon"),
                        "email"    				=> $this->input->post("email"),
                        "status_modal" 			=> $this->input->post("status_modal"),
                        "kode_kbli" 			=> $this->input->post("kode_kbli"),
                        "judul_kbli"  		    => $this->input->post("judul_kbli"),
                        "skala_usaha" 		    => $this->input->post("skala_usaha"),
                        "lokasi_usaha"  		=> $this->input->post("lokasi_usaha"),
                        #"kelurahan"    		=> $this->input->post("kelurahan"),
                        #"kecamatan" 			=> $this->input->post("kecamatan"),
                        #"kota" 			    => $this->input->post("kota"),
                        #"provinsi"  		    => $this->input->post("provinsi"),
                        "koordinat_geografis"   => $this->input->post("koordinat_geografis"),
                        "luas_tanah" 		    => $this->input->post("luas_tanah"),
                        "penggunaan_tanah"      => $this->input->post("penggunaan_tanah"),
                        "rencana_teknis"    	=> $this->input->post("rencana_teknis"),
                        "status_tanah" 			=> $this->input->post("status_tanah"),
                        #"dasar_pkkpr"  		=> $this->input->post("dasar_pkkpr"),
                        "dinyatakan" 		    => $this->input->post("dinyatakan"),
                        "koordinat_geografis2"  => $this->input->post("koordinat_geografis2"),
                        "luas_tanah_disetujui"  => $this->input->post("luas_tanah_disetujui"),
                        "jenis_peruntukan"    	=> $this->input->post("jenis_peruntukan"),
                        "kode_kbli2" 			=> $this->input->post("kode_kbli2"),
                        "judul_kbli2"  		    => $this->input->post("judul_kbli2"),
                        "kdb" 			        => $this->input->post("kdb"),
                        "ketinggian_bangunan"   => $this->input->post("ketinggian_bangunan"),
                        "indikasi_program" 		=> $this->input->post("indikasi_program"),
                        #"ppkpr"  		        => $this->input->post("ppkpr"),
                        "garis_sempadan"        => $this->input->post("garis_sempadan"),
                        "jarak_bebas" 			=> $this->input->post("jarak_bebas"),
                        "KDH" 			        => $this->input->post("KDH"),
                        "koefisien_tapak"  		=> $this->input->post("koefisien_tapak"),
                        "jaringan_utilitas"     => $this->input->post("jaringan_utilitas"),
                        #"ketentuan_tambahan"    => $this->input->post("ketentuan_tambahan"),
                        #"ketentuan_lain"    	=> $this->input->post("ketentuan_lain"),
                        
                    );

                    
                    /* save to db */
                    $save = $this->app_model->addData("permohonan", $data);
                    $pdf_output = ''; // variabel string untuk menampung hasil output PDF
                    $pdf = new TCPDF();
                    $pdf->SetFont('times', 'B', 16);
                    $pdf_output .= '<p><strong>Form Data</strong></p>';
                    $pdf_output .= '<br />';
                    $pdf->SetFont('times', '', 12);

                    // loop data dan tambahkan ke variabel pdf_output
                    foreach ($data as $key => $value) {
                        $pdf_output .= '<p>'.$key.': '.$value.'</p>';
                    }

                    $pdf->AddPage();
                    $pdf->writeHTML($pdf_output, true, false, true, false, '');
                    $pdf->Output('form_data.pdf', 'I');

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("pemanfaatan/tabel_arsip_rekomendasi");   
                        
                        
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("pemanfaatan/input_rekomendasi_pemanfaatan");
                    } 
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("pemanfaatan/input_rekomendasi_pemanfaatan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Rekomendasi Pemanfaatan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/wizard_rekomendasi";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

    public function hapus_rekomendasi_pemanfaatan() {
        $id = $this->input->get('id_permohonan');
        $this->db->delete('permohonan', array('id_permohonan'=>$id));

        redirect('pemanfaatan/tabel_arsip_rekomendasi');

    }


	public function edit_rekomendasi_pemanfaatan() {
        
        if($this->input->post('submit')) {   

            $id_permohonan = $this->input->post("id_permohonan");

            /* validate */
			// $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
            #$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            $this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'trim|required');
            $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'trim|required');
            $this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
            $this->form_validation->set_rules('alamat_kantor', 'Alamat Kantor', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No Telepon', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('status_modal', 'Status Penanaman Modal', 'trim|required');
            $this->form_validation->set_rules('kode_kbli', 'Kode KBLI', 'trim|required');
            $this->form_validation->set_rules('judul_kbli', 'Judul KBLI', 'trim|required');
            $this->form_validation->set_rules('skala_usaha', 'Skala Usaha', 'trim|required');
            $this->form_validation->set_rules('lokasi_usaha', 'Lokasi Usaha', 'trim|required');
            #$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
            #$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
            #$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
            #$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
            $this->form_validation->set_rules('koordinat_geografis', 'Koordinat Geografis', 'trim|required');
            $this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'trim|required');
            $this->form_validation->set_rules('penggunaan_tanah', 'Penggunaan Tanah', 'trim|required');
            $this->form_validation->set_rules('rencana_teknis', 'Rencana Teknis Bangunan', 'trim|required');
            $this->form_validation->set_rules('status_tanah', 'Status Tanah', 'trim|required');
            #$this->form_validation->set_rules('dasar_pkkpr', 'Dasar PKKPR', 'trim|required');
            $this->form_validation->set_rules('dinyatakan', 'Dinyatakan', 'trim|required');
            $this->form_validation->set_rules('koordinat_geografis2', 'Koordinat Geografis', 'trim|required');
            $this->form_validation->set_rules('luas_tanah_disetujui', 'Luas Tanah Disetujui', 'trim|required');
            $this->form_validation->set_rules('jenis_peruntukan', 'Jenis Peruntukan Pemanfaatan', 'trim|required');
            $this->form_validation->set_rules('kode_kbli2', 'Kode KBLI', 'trim|required');
            $this->form_validation->set_rules('judul_kbli2', 'Judul KBLI', 'trim|required');
            $this->form_validation->set_rules('kdb', 'KDB', 'trim|required');
            $this->form_validation->set_rules('ketinggian_bangunan', 'Ketinggian Bangunan maksimum', 'trim|required');
            $this->form_validation->set_rules('indikasi_program', 'Indikasi Program Pemanfaatan', 'trim|required');
            #$this->form_validation->set_rules('ppkpr', 'Persyaratan PKPR', 'trim|required');
            $this->form_validation->set_rules('garis_sempadan', 'Garis Sempadan Bangunan', 'trim|required');
            $this->form_validation->set_rules('jarak_bebas', 'Jarak Bebas Bangunan minimum', 'trim|required');
            $this->form_validation->set_rules('KDH', 'KDH', 'trim|required');
            $this->form_validation->set_rules('koefisien_tapak', 'Koefisien Tapak Basement', 'trim|required');
            $this->form_validation->set_rules('jaringan_utilitas', 'Jaringan Utilitas Kota', 'trim|required');
            #$this->form_validation->set_rules('ketentuan_tambahan', 'Ketentuan Tambahan', 'trim|required');
            #$this->form_validation->set_rules('ketentuan_lain', 'Ketentuan Lain', 'trim|required');

            $id_permohonan_lama = $this->db->where("id_permohonan", $id_permohonan)->get("permohonan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pemanfaatan/input_rekomendasi_pemanfaatan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_permohonan_exists = $this->app_model->check_exists("permohonan", "id_permohonan", $this->input->post("id_permohonan"));
                
                if($id_permohonan_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
                        #"id_permohonan"  		=> $this->input->post("id_permohonan"),
                        #"bidang"  		        => $this->input->post("bidang"),
                        "judul_kegiatan"  		=> $this->input->post("judul_kegiatan"),
						"nama_pemohon"  		=> $this->input->post("nama_pemohon"),
                        "npwp"  		        => $this->input->post("npwp"),
                        "alamat_kantor" 		=> $this->input->post("alamat_kantor"),
                        "telepon"  		        => $this->input->post("telepon"),
                        "email"    				=> $this->input->post("email"),
                        "status_modal" 			=> $this->input->post("status_modal"),
                        "kode_kbli" 			=> $this->input->post("kode_kbli"),
                        "judul_kbli"  		    => $this->input->post("judul_kbli"),
                        "skala_usaha" 		    => $this->input->post("skala_usaha"),
                        "lokasi_usaha"  		=> $this->input->post("lokasi_usaha"),
                        #"kelurahan"    			=> $this->input->post("kelurahan"),
                        #"kecamatan" 			=> $this->input->post("kecamatan"),
                        #"kota" 			        => $this->input->post("kota"),
                        #"provinsi"  		    => $this->input->post("provinsi"),
                        "koordinat_geografis"   => $this->input->post("koordinat_geografis"),
                        "luas_tanah" 		    => $this->input->post("luas_tanah"),
                        "penggunaan_tanah"      => $this->input->post("penggunaan_tanah"),
                        "rencana_teknis"    	=> $this->input->post("rencana_teknis"),
                        "status_tanah" 			=> $this->input->post("status_tanah"),
                        #"dasar_pkkpr"  		    => $this->input->post("dasar_pkkpr"),
                        "dinyatakan" 		    => $this->input->post("dinyatakan"),
                        "koordinat_geografis2"  => $this->input->post("koordinat_geografis2"),
                        "luas_tanah_disetujui"  => $this->input->post("luas_tanah_disetujui"),
                        "jenis_peruntukan"    	=> $this->input->post("jenis_peruntukan"),
                        "kode_kbli2" 			=> $this->input->post("kode_kbli2"),
                        "judul_kbli2"  		    => $this->input->post("judul_kbli2"),
                        "kdb" 			        => $this->input->post("kdb"),
                        "ketinggian_bangunan"   => $this->input->post("ketinggian_bangunan"),
                        "indikasi_program" 		=> $this->input->post("indikasi_program"),
                        #"ppkpr"  		        => $this->input->post("ppkpr"),
                        "garis_sempadan"        => $this->input->post("garis_sempadan"),
                        "jarak_bebas" 			=> $this->input->post("jarak_bebas"),
                        "KDH" 			        => $this->input->post("KDH"),
                        "koefisien_tapak"  		=> $this->input->post("koefisien_tapak"),
                        "jaringan_utilitas"    => $this->input->post("jaringan_utilitas"),
                        #"luas_tanah" 		    => $this->input->post("luas_tanah"),
                        #"ketentuan_tambahan"    => $this->input->post("ketentuan_tambahan"),
                        #"ketentuan_lain"    	=> $this->input->post("ketentuan_lain"),
						
					);

            
					/* save to db */
					$save = $this->app_model->updateData("permohonan","id_permohonan", $id_permohonan, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pemanfaatan/tabel_arsip_rekomendasi");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("pemanfaatan/tabel_arsip_rekomendasi");   
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("pemanfaatan/tabel_arsip_rekomendasi");                       
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Rekomendasi Pemanfaatan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/wizard_rekomendasi";

            $check_exists = $this->app_model->getWhere('permohonan', 'id_permohonan', $this->input->get('id_permohonan', TRUE));

            if($check_exists->num_rows() > 0) {
                $rekomendasi = $check_exists->row_array();
                $data["edit"] = array (
                    "id_permohonan"  	    => $rekomendasi["id_permohonan"],
                    //"bidang"  		        => $rekomendasi("bidang"),
                    "judul_kegiatan"  		=> $rekomendasi["judul_kegiatan"],
                    "nama_pemohon"  		=> $rekomendasi["nama_pemohon"],
                    "npwp"  		        => $rekomendasi["npwp"],
                    "alamat_kantor" 		=> $rekomendasi["alamat_kantor"],
                    "telepon"  		        => $rekomendasi["telepon"],
                    "email"    				=> $rekomendasi["email"],
                    "status_modal" 			=> $rekomendasi["status_modal"],
                    "kode_kbli" 			=> $rekomendasi["kode_kbli"],
                    "judul_kbli"  		    => $rekomendasi["judul_kbli"],
                    "skala_usaha" 		    => $rekomendasi["skala_usaha"],
                    "lokasi_usaha"  		=> $rekomendasi["lokasi_usaha"],
                    //"kelurahan"    			=> $permohonan["kelurahan"],
                    //"kecamatan" 			=> $permohonan["kecamatan"],
                    //"kota" 			        => $permohonan["kota"],
                    //"provinsi"  		    => $permohonan["provinsi"],
                    "koordinat_geografis"   => $rekomendasi["koordinat_geografis"],
                    "luas_tanah" 		    => $rekomendasi["luas_tanah"],
                    "penggunaan_tanah"      => $rekomendasi["penggunaan_tanah"],
                    "rencana_teknis"    	=> $rekomendasi["rencana_teknis"],
                    "status_tanah" 			=> $rekomendasi["status_tanah"],
                    //"dasar_pkkpr"  		    => $permohonan["dasar_pkkpr"],
                    "dinyatakan" 		    => $rekomendasi["dinyatakan"],
                    "koordinat_geografis2"  => $rekomendasi["koordinat_geografis2"],
                    "luas_tanah_disetujui"  => $rekomendasi["luas_tanah_disetujui"],
                    "jenis_peruntukan"    	=> $rekomendasi["jenis_peruntukan"],
                    "kode_kbli2" 			=> $rekomendasi["kode_kbli2"],
                    "judul_kbli2"  		    => $rekomendasi["judul_kbli2"],
                    "kdb" 			        => $rekomendasi["kdb"],
                    "ketinggian_bangunan"   => $rekomendasi["ketinggian_bangunan"],
                    "indikasi_program" 		=> $rekomendasi["indikasi_program"],
                    //"ppkpr"  		        => $permohonan["ppkpr"],
                    "garis_sempadan"        => $rekomendasi["garis_sempadan"],
                    "jarak_bebas" 			=> $rekomendasi["jarak_bebas"],
                    "KDH" 			        => $rekomendasi["KDH"],
                    "koefisien_tapak"  		=> $rekomendasi["koefisien_tapak"],
                    "jaringan_utilitas"     => $rekomendasi["jaringan_utilitas"],
                    //"luas_tanah" 		    => $permohonan["luas_tanah"],
                    //"ketentuan_tambahan"    => $permohonan["ketentuan_tambahan"],
                    //"ketentuan_lain"    	=> $permohonan["ketentuan_lain"],   

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("pemanfaatan/tabel_arsip_rekomendasi");    
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus_permohonan() {
        $id = $this->input->get('nama_pemohon');
        $this->db->delete('permohonan', array('id_permohonan'=>$id));
        
        redirect("pemanfaatan/wizard");    

        }
        public function print (){
		
            $data["title"] = "cetak";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "pemanfaatan/wizard_rekomendasi";
            $data["datatables"] = TRUE;
            $nama_pemohon = $this->input->post("nama_pemohon");
           
            
    
             date_default_timezone_set('Asia/Jakarta');
             $counter = 0;
             $counter++;
             $current_date = date('d-m');
             $current_dateY = date('Y');
             $current_dateD = date ('d');
             $current_dateM = date('m');
             $current_dateL = date('l');
             $current_dateF = date('F');
             date('l, F d Y H:i:s');
             $nama_bulan = array(
                'January' => 'Januari',
                'February' => 'Februari',
                'March' => 'Maret',
                'April' => 'April',
                'May' => 'Mei',
                'June' => 'Juni',
                'July' => 'Juli',
                'August' => 'Agustus',
                'September' => 'September',
                'October' => 'Oktober',
                'November' => 'November',
                'December' => 'Desember'
              );
              $nama_hari = array(
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' =>'Sabtu',
                'Sunday' => 'Minggu'
                );
                
                $bulan = $nama_bulan[date('F', strtotime($current_dateF))];
                $hari = $nama_hari[date('l', strtotime($current_dateL))];
                
    
    
    
    
             $tcpdf = new TCPDF();
             $html = $this->load->view('pemanfaatan/cetak_ba', ['nama_pemohon'=> $nama_pemohon ,'counter' => $counter,'current_dateL' => $current_dateL,'current_dateF' => $current_dateF,'current_dateD' => $current_dateD,'current_dateM' => $current_dateM, 'current_date' => $current_date, 'bulan' => $bulan,'hari' => $hari, 'current_dateY' => $current_dateY ], true);
             $html .= '<tr><td>Judul Kegiatan</td><td>: ' . $this->input->post('judul_kegiatan') . '</td></tr>';
             $html .= '<tr><td>Nama Pemohon</td><td>: ' . $this->input->post('nama_pemohon') . '</td></tr>';
             $html .= '<tr><td>NPWP</td><td>: ' . $this->input->post('npwp') . '</td></tr>';
             $html .= '<tr><td>Alamat Kantor</td><td>: ' . $this->input->post('alamat_kantor') . '</td></tr>';
             $html .= '<tr><td>Nomor Telepon</td><td>: ' . $this->input->post('telepon') . '</td></tr>';

             // Set the paper size and orientation
             $tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
             $tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
             $tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);
             $tcpdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
             $tcpdf->SetPrintHeader(false);
             $tcpdf->SetPrintFooter(false);
         
             // Add a page
             $tcpdf->AddPage();
         
             // Write the HTML content to the PDF
             $tcpdf->writeHTML($html);
             
             
            
             
             session_start();
    
                if (!isset($_SESSION['counter'])) {
                $_SESSION['counter'] = 0;
                }
    
                $counter = ++$_SESSION['counter'];
    
                $tcpdf->Output('BA' .'_'. $current_date .'_'. $counter.'.pdf', 'I');
                $pdf_data = array(
                    'nama_file' => 'BA' .''. $current_date .''. $counter.'.pdf',
                    'tanggal_cetak' => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('pdf_table', $pdf_data);
            
                }
	
    }
