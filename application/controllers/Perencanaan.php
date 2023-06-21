<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Perencanaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('users') && $this->session->userdata('users')['role'] != 'superadmin' && $this->session->userdata('users')['role'] != 'perencanaan' ) {
            $this->session->set_flashdata("alert", "error");
            $this->session->set_flashdata("message", "Jangan Mencoba Masuk ke aspek lain");
            redirect('/dashboard');
    
        }
        if (!$this->session->userdata('users')){
            $this->session->set_flashdata("alert", "error");
            $this->session->set_flashdata("message", "Jangan Mencoba Masuk");
            redirect('/');

        }
    }
	
	public function index()
	{
		$data["title"] = "perencanaan";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "perencanaan/home_perencanaan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    // LIHAT ARSIP
    public function tabel_arsip_perencanaan()
	{
		$data["title"] = "Arsip Data Perencanaan";
        $data["users"] = $this->session->userdata('users');
        $data["perencanaan_list"] = $this->app_model->getSorted("perencanaan", "tanggal_kegiatan");
		$data["content"] = "perencanaan/tabel_arsip_perencanaan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    public function tabel_arsip_pengaduan()
	{
		$data["title"] = "Arsip Data Pengaduan";
        $data["users"] = $this->session->userdata('users');
        $data["perencanaan_list"] = $this->app_model->getSorted("pengaduan", "tanggal_pengaduan");
		$data["content"] = "perencanaan/tabel_arsip_pengaduan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}
    // end LIHAT ARSIP

    // klik ISI FORM MONITORING
	public function home_arsip_perencanaan()
	{
		$data["title"] = "Arsip Data Perencanaan";
        $data["users"] = $this->session->userdata('users');
		$data["content"] = "perencanaan/home_arsip_perencanaan";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

    // DATA PERENCANAAN
    public function sosialisasi_perencanaan() {
        
        if($this->input->post('submit')) {  

            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            // $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
            $this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'trim|required');
            $this->form_validation->set_rules('uraian_kegiatan', 'Uraian Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            // $this->form_validation->set_rules('file', 'Upload Data / File', 'trim|required');
            // $this->form_validation->set_rules('foto', 'Upload Foto / Bukti', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            
            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('perencanaan/sosialisasi-perencanaan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_perencanaan_exists = $this->app_model->check_exists("perencanaan", "id_perencanaan", $this->input->post("id_perencanaan"));
                
                if($id_perencanaan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "id_perencanaan"  		=> $this->input->post("id_perencanaan"),
                        "judul_kegiatan"  		=> $this->input->post("judul_kegiatan"),
                        "uraian_kegiatan"  		=> $this->input->post("uraian_kegiatan"),
                        "tanggal_kegiatan" 		=> $this->input->post("tanggal_kegiatan"),
                        "file" 					=> $this->input->post("file"),
                        "foto" 					=> $this->input->post("foto"),
                        "status" 				=> $this->input->post("status"),
                        
                    );

                    /*upload foto*/
                    $config['upload_path']          = './uploads/perencanaan/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = false;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('foto'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('perencanaan/sosialisasi-perencanaan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['foto'] = $upload_data['file_name'];
                    }

                    /*upload file*/
                    $config_file['upload_path']          = './uploads/perencanaan/';
                    $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                    $config_file['max_size']             = 100000000;
                    $config_file['encrypt_name']         = false;

                    $this->upload->initialize($config_file);

                    if ( ! $this->upload->do_upload('file'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('perencanaan/sosialisasi-perencanaan');
                    }
                    else
                    {
                        $upload_file = $this->upload->data();
                        $data['file'] = $upload_file['file_name'];
                    }



                    /* save to db */
                    $save = $this->app_model->addData("perencanaan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("perencanaan/tabel_arsip_perencanaan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("perencanaan/sosialisasi-perencanaan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("perencanaan/sosialisasi-perencanaan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data Perencanaan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "perencanaan/form_input_new";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

	public function edit_sosialisasi() {
        
        if($this->input->post('submit')) {   

            $id_perencanaan = $this->input->post("id_perencanaan");

            /* validate */
			// $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
            $this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'trim|required');
            $this->form_validation->set_rules('uraian_kegiatan', 'Uraian Kegiatan', 'trim|required');
            $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
            // $this->form_validation->set_rules('file', 'Upload Data / File', 'trim|required');
            // $this->form_validation->set_rules('foto', 'Upload Foto / Bukti', 'trim|required');
            $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
            
            $perencanaan_lama = $this->db->where("id_perencanaan", $id_perencanaan)->get("perencanaan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('perencanaan/tabel_arsip_perencanaan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_exists = $this->app_model->check_exists("perencanaan", "id_perencanaan", $this->input->post("id_perencanaan"));
                
                if($id_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
						// "id_perencanaan"     	=> $this->input->post("id_perencanaan"),
                        "judul_kegiatan"  		=> $this->input->post("judul_kegiatan"),
                        "uraian_kegiatan"  		=> $this->input->post("uraian_kegiatan"),
                        "tanggal_kegiatan" 		=> $this->input->post("tanggal_kegiatan"),
                        "file" 					=> $this->input->post("file"),
                        "foto" 					=> $this->input->post("foto"),
                        "status" 				=> $this->input->post("status"),
						
					);

                    if (!empty($_FILES['foto']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/perencanaan/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = false;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('foto'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('perencanaan/sosialisasi-perencanaan');
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
						redirect("perencanaan/tabel_arsip_perencanaan");  
                    }

                    if (!empty($_FILES['file']['name'])) {
                        /*upload file*/
                        $config_file['upload_path']          = './uploads/perencanaan/';
                        $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                        $config_file['max_size']             = 100000000;
                        $config_file['encrypt_name']         = false;
            
                        $this->upload->initialize($config_file);
            
                        if ( ! $this->upload->do_upload('file'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('perencanaan/sosialisasi-perencanaan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['file'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['file'] = $perencanaan_lama->file;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("perencanaan/tabel_arsip_perencanaan");  
                    }

            
					/* save to db */
					$save = $this->app_model->updateData("perencanaan","id_perencanaan", $id_perencanaan, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("perencanaan/tabel_arsip_perencanaan");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("perencanaan/tabel_arsip_perencanaan");
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("perencanaan/tabel_arsip_perencanaan");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Perencanaan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "perencanaan/form_input_new";

            $check_exists = $this->app_model->getWhere('perencanaan', 'id_perencanaan', $this->input->get('id_perencanaan', TRUE));

            if($check_exists->num_rows() > 0) {
                $perencanaan = $check_exists->row_array();
                $data["edit"] = array (

					"id_perencanaan"     	=> $perencanaan["id_perencanaan"],
					"judul_kegiatan"  		=> $perencanaan["judul_kegiatan"],
                    "uraian_kegiatan"  		=> $perencanaan["uraian_kegiatan"],
					"tanggal_kegiatan" 		=> $perencanaan["tanggal_kegiatan"],
                    "file" 					=> $perencanaan["file"],
					"foto" 					=> $perencanaan["foto"],
                    "status" 				=> $perencanaan["status"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("perencanaan/tabel_arsip_perencanaan");
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus() {
        $id = $this->input->get('id_perencanaan');
        $this->db->delete('perencanaan', array('id_perencanaan'=>$id));
        
        redirect('perencanaan/tabel_arsip_perencanaan');

    }
    // end PERENCANAAN

    // DATA PENGADUAN
    public function pengaduan_perencanaan() {
        
        if($this->input->post('submit')) {            
            /* validate */
            $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            // $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
            $this->form_validation->set_rules('judul_pengaduan', 'Judul Pengaduan', 'trim|required');
            $this->form_validation->set_rules('uraian_pengaduan', 'Uraian Pengaduan', 'trim|required');
            $this->form_validation->set_rules('tanggal_pengaduan', 'Tanggal Pengaduan', 'trim|required');
            $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No. Telepon', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            //$this->form_validation->set_rules('file', 'Upload File', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Upload Bukti / Foto', 'trim|required');
            
            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('perencanaan/pengaduan-perencanaan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check email exists */
                $id_perencanaan_exists = $this->app_model->check_exists("pengaduan", "id_pengaduan", $this->input->post("id_pengaduan"));
                
                if($id_perencanaan_exists == 0) {
                    /* if email not exists check password */
                    
                    /* set data */
                    $data = array(
                        "bidang"  		        => $this->input->post("bidang"),
                        "id_pengaduan"  		=> $this->input->post("id_pengaduan"),
                        "judul_pengaduan"  		=> $this->input->post("judul_pengaduan"),
                        "uraian_pengaduan"  	=> $this->input->post("uraian_pengaduan"),
                        "tanggal_pengaduan" 	=> $this->input->post("tanggal_pengaduan"),
                        "nama_pelapor" 		    => $this->input->post("nama_pelapor"),
                        "telepon" 	        	=> $this->input->post("telepon"),
                        "email"          		=> $this->input->post("email"),
                        "file" 					=> $this->input->post("file"),
                        "foto" 					=> $this->input->post("foto"),
                    );
                        /*upload foto*/
                    $config['upload_path']          = './uploads/perencanaan/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 1000000;
                    $config['encrypt_name']         = false;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('foto'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('perencanaan/pengaduan-perencanaan');
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                        $data['foto'] = $upload_data['file_name'];
                    }

                    /*upload file*/
                    $config_file['upload_path']          = './uploads/perencanaan/';
                    $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                    $config_file['max_size']             = 100000000;
                    $config_file['encrypt_name']         = false;

                    $this->upload->initialize($config_file);

                    if ( ! $this->upload->do_upload('file'))
                    {
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", $this->upload->display_errors());
                        redirect('perencanaan/pengaduan-perencanaan');
                    }
                    else
                    {
                        $upload_file = $this->upload->data();
                        $data['file'] = $upload_file['file_name'];
                    }
                        
                    /* save to db */
                    $save = $this->app_model->addData("pengaduan", $data);

                    if($save) {
                        /* saved */
                        $this->session->set_flashdata("alert", "success");
                        $this->session->set_flashdata("message", "Data berhasil disimpan");
                        redirect("perencanaan/tabel_arsip_pengaduan");           
                        
                    } else {
                        /* error */
                        $this->session->set_flashdata("alert", "error");
                        $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
                        redirect("perencanaan/pengaduan-perencanaan");
                    }
                
                } else {
                    /* email already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "ID telah digunakan!");
                    redirect("perencanaan/pengaduan-perencanaan");
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Data Pengaduan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "perencanaan/form_input_pengaduan";
            $data["datatables"] = TRUE;
        
            $this->load->view('sneat-templates/template', $data);
        }
        
    }

	public function edit_pengaduan() {
        
        if($this->input->post('submit')) {   

            $id_pengaduan = $this->input->post("id_pengaduan");

            /* validate */
			// $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
            $this->form_validation->set_rules('judul_pengaduan', 'Judul Pengaduan', 'trim|required');
            $this->form_validation->set_rules('uraian_pengaduan', 'Uraian Pengaduan', 'trim|required');
            $this->form_validation->set_rules('tanggal_pengaduan', 'Tanggal Pengaduan', 'trim|required');
            $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'trim|required');
            $this->form_validation->set_rules('telepon', 'No. Telepon', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            //$this->form_validation->set_rules('file', 'Upload File', 'trim|required');
            //$this->form_validation->set_rules('foto', 'Upload Bukti / Foto', 'trim|required');
            
            $pengaduan_lama = $this->db->where("id_pengaduan", $id_pengaduan)->get("pengaduan");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('perencanaan/tabel_arsip_pengaduan');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check id exists */
                $id_pengaduan_exists = $this->app_model->check_exists("pengaduan", "id_pengaduan", $this->input->post("id_pengaduan"));
                
                if($id_pengaduan_exists > 0) {
                    /* if id not exists check password */
                    
					/* set data */
					$data = array(
						// "id_perencanaan"     	=> $this->input->post("id_perencanaan"),
                        "judul_pengaduan"  		=> $this->input->post("judul_pengaduan"),
                        "uraian_pengaduan"  	=> $this->input->post("uraian_pengaduan"),
                        "tanggal_pengaduan" 	=> $this->input->post("tanggal_pengaduan"),
                        "nama_pelapor" 		    => $this->input->post("nama_pelapor"),
                        "telepon" 	        	=> $this->input->post("telepon"),
                        "email"          		=> $this->input->post("email"),
                        "file" 					=> $this->input->post("file"),
                        "foto" 					=> $this->input->post("foto"),
						
					);

                    if (!empty($_FILES['foto']['name'])) {
                        /*upload foto*/
                        $config['upload_path']          = './uploads/perencanaan/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 1000000;
                        $config['encrypt_name']         = false;
            
                        $this->load->library('upload', $config);
            
                        if ( ! $this->upload->do_upload('foto'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('perencanaan/pengaduan-perencanaan');
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
						redirect("perencanaan/tabel_arsip_pengaduan");  
                    }

                    if (!empty($_FILES['file']['name'])) {
                        /*upload file*/
                        $config_file['upload_path']          = './uploads/perencanaan/';
                        $config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
                        $config_file['max_size']             = 100000000;
                        $config_file['encrypt_name']         = false;
            
                        $this->upload->initialize($config_file);
            
                        if ( ! $this->upload->do_upload('file'))
                        {
                            $this->session->set_flashdata("alert", "error");
                            $this->session->set_flashdata("message", $this->upload->display_errors());
                            redirect('perencanaan/pengaduan-perencanaan');
                        }
                        else
                        {
                            $upload_data = $this->upload->data();
                            $data['file'] = $upload_data['file_name'];
                        }
                    } else {
                        /* if user not upload new file or photo use old file */
                        $data['file'] = $perencanaan_lama->file;
                        $this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("perencanaan/tabel_arsip_pengaduan");  
                    }

					/* save to db */
					$save = $this->app_model->updateData("pengaduan","id_pengaduan", $id_pengaduan, $data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("perencanaan/tabel_arsip_pengaduan");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						redirect("perencanaan/tabel_arsip_pengaduan");
					}
                
                } else {
                    /* id not found */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "user not found!");
                    redirect("perencanaan/tabel_arsip_pengaduan");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Edit Pengaduan";
            $data["users"] = $this->session->userdata('users');
            $data["content"] = "perencanaan/form_input_pengaduan";

            $check_exists = $this->app_model->getWhere('pengaduan', 'id_pengaduan', $this->input->get('id_pengaduan', TRUE));

            if($check_exists->num_rows() > 0) {
                $pengaduan = $check_exists->row_array();
                $data["edit"] = array (
                   
					"id_pengaduan"      	=> $pengaduan["id_pengaduan"],
					"judul_pengaduan"  		=> $pengaduan["judul_pengaduan"],
                    "uraian_pengaduan"  	=> $pengaduan["uraian_pengaduan"],
					"tanggal_pengaduan" 	=> $pengaduan["tanggal_pengaduan"],
                    "nama_pelapor"      	=> $pengaduan["nama_pelapor"],
                    "telepon" 	            => $pengaduan["telepon"],
                    "email"             	=> $pengaduan["email"],
                    "file" 					=> $pengaduan["file"],
					"foto" 					=> $pengaduan["foto"],

                );
            } else {
                /* id not found */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Data tidak ditemukan!");
                redirect("perencanaan/tabel_arsip_pengaduan");
            }

            $this->load->view('sneat-templates/template', $data);
        }
        
    
    }

    public function hapus_pengaduan() {
        $id = $this->input->get('id_pengaduan');
        $this->db->delete('pengaduan', array('id_pengaduan'=>$id));
        
        redirect('perencanaan/tabel_arsip_pengaduan');
    }
    public function print_pengaduan ($id_pengaduan){
		
		$data["title"] = "berita acara pengaduan";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "perencanaan/berita_acara_pengaduan";
		$data["datatables"] = TRUE;

		 date_default_timezone_set('Asia/Jakarta');

         $data = array(
            "bidang"  		        => $this->input->post("bidang"),
            "id_pengaduan"  		=> $this->input->post("id_pengaduan"),
            "judul_pengaduan"  		=> $this->input->post("judul_pengaduan"),
            "uraian_pengaduan"  	=> $this->input->post("uraian_pengaduan"),
            "tanggal_pengaduan" 	=> $this->input->post("tanggal_pengaduan"),
                    
        );

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
		 $html = $this->load->view('perencanaan/berita_acara_pengaduan', ['data'=> $data,'counter' => $counter,'current_dateL' => $current_dateL,'current_dateF' => $current_dateF,'current_dateD' => $current_dateD,'current_dateM' => $current_dateM, 'current_date' => $current_date, 'bulan' => $bulan,'hari' => $hari, 'current_dateY' => $current_dateY ], true);
	 
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
				$this->db->insert('pengaduan', $pdf_data);
        
            }

    // end PENGADUAN
	
    //SIMPAN MENGGUNAKAN AJAX
    public function simpan(){

        /* validate */
        $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
        // $this->form_validation->set_rules('id_perencanaan', 'No', 'trim|required');
        $this->form_validation->set_rules('judul_kegiatan', 'Judul Kegiatan', 'trim|required');
        $this->form_validation->set_rules('uraian_kegiatan', 'Uraian Kegiatan', 'trim|required');
        $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
        $this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
        
        /* check validation form*/
        if ($this->form_validation->run() == FALSE || $_FILES['file']['name'] == "" || $_FILES['foto']['name'] == "") {
            /* form not valid */
            $response = array(
                "status"        => 400,
                "message"       => 'Formulir tidak boleh kosong',
            );
        } else {

            /* if form is valid */
            $data = array(
                "bidang"                => $this->input->post("bidang"),
                "id_perencanaan"        => $this->input->post("id_perencanaan"),
                "judul_kegiatan"        => $this->input->post("judul_kegiatan"),
                "uraian_kegiatan"       => $this->input->post("uraian_kegiatan"),
                "tanggal_kegiatan"      => $this->input->post("tanggal_kegiatan"),
                "status"                => $this->input->post("status"),
            );

            if (!empty($_FILES['file'])) {
                $img = file_get_contents($_FILES['file']['tmp_name']);
                $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                // $data["file"] = 'data:image/' . $type . ';base64,' . base64_encode($img);
                $data["file"] = $_FILES['file']['name'];
            }
            if (!empty($_FILES['foto'])) {
                $img = file_get_contents($_FILES['foto']['tmp_name']);
                $type = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
                // $data["foto"] = 'data:image/' . $type . ';base64,' . base64_encode($img);
                $data["foto"] = $_FILES['foto']['name'];
            }

            // /* save to db */
            $save = $this->app_model->addData("perencanaan", $data);
            
            $response = array(
                "status"        => 400,
                "message"       => 'data gagal disimpan',
            );
            
            if ($save) {
                $response = array(
                    "status"        => 200,
                    "message"       => 'data berhasil disimpan',
                    "redirecturl"   => base_url("perencanaan/tabel_arsip_perencanaan")
                );
            }
        }    

        $this->output->set_output(json_encode($response));
    }
    public function print ($id_perencanaan){
		
		$data["title"] = "berita acara perencanaan";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "perencanaan/berita_acara_perencanaan";
		$data["datatables"] = TRUE;

		 date_default_timezone_set('Asia/Jakarta');

         $data = array(
            "bidang"                => $this->input->post("bidang"),
            "id_perencanaan"        => $this->input->post("id_perencanaan"),
            "judul_kegiatan"        => $this->input->post("judul_kegiatan"),
            "uraian_kegiatan"       => $this->input->post("uraian_kegiatan"),
            "tanggal_kegiatan"      => $this->input->post("tanggal_kegiatan"),
            "status"                => $this->input->post("status"),
        );

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
		 $html = $this->load->view('perencanaan/berita_acara_perencanaan', ['data'=> $data,'counter' => $counter,'current_dateL' => $current_dateL,'current_dateF' => $current_dateF,'current_dateD' => $current_dateD,'current_dateM' => $current_dateM, 'current_date' => $current_date, 'bulan' => $bulan,'hari' => $hari, 'current_dateY' => $current_dateY ], true);
	 
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
				$this->db->insert('perencanaan', $pdf_data);
        
            }
}