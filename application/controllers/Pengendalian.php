<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengendalian extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('users') && $this->session->userdata('users')['role'] != 'superadmin' && $this->session->userdata('users')['role'] != 'pengendalian' ) {
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
	
	// load awal halaman pada menu pengendalian
	public function index(){
		$data["title"] = "pengendalian";
		$data["users"] = $this->session->userdata('users');
		// $data["pengendalian_list"] = $this->app_model->getSorted("pengendalian", "kode");
		$data["content"] = "pengendalian/home_pengendalian";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

	// load halaman CLICK TABEL ARSIP PENGENDALIAN
	public function tabel_arsip_pengendalian(){
		$data["title"] = "Arsip Data Pengendalian";
		$data["users"] = $this->session->userdata('users');
		$data["pengendalian_list"] = $this->app_model->getSorted("pengendalian", "kode");
		$data["content"] = "pengendalian/tabel_arsip_pengendalian";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

	// PENGENDALIAN
	public function input_monitoring() {

        if($this->input->post('submit')) {   

            // /* validate */
            // $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            // $this->form_validation->set_rules('id_pengendalian', 'Id_pengendalian', 'trim|required');
			// $this->form_validation->set_rules('tema', 'Tema', 'trim|required');
			$this->form_validation->set_rules('nama_kegiatan', 'nama_kegiatan', 'trim|required');
			$this->form_validation->set_rules('agenda_rapat', 'Agenda Rapat', 'trim|required');
			$this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
			$this->form_validation->set_rules('jam', 'Tanggal Kegiatan', 'trim|required');
            $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
            $this->form_validation->set_rules('lokasi_persil', 'Lokasi', 'trim|required');
            // $this->form_validation->set_rules('tindak_lanjut', 'Tindak Lanjut', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
            // $this->form_validation->set_rules('file_materi', 'File Materi', 'trim|required');
			// $this->form_validation->set_rules('file_undangan', 'File Undangan', 'trim|required');
			$this->form_validation->set_rules('komentar', 'Kronologis', 'trim|required');
			$this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
		

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pengendalian/input_monitoring');
                
            /* if form is valid */
            } else {
            
                /* if form is valid check kode exists */
                $kode_exists = $this->app_model->check_exists("pengendalian", "kode", $this->input->post("kode"));
                
                if($kode_exists == 0) {
                    /* if kode not exists check code */

					/* set data */
					$data = array(
						"bidang"     			=> $this->input->post("bidang"),
						// "id_pengendalian"  		=> $this->input->post("id_pengendalian"),
						"tema"	    			=> $this->input->post("tema"),
						"nama_kegiatan" 		=> $this->input->post("nama_kegiatan"),
						"agenda_rapat"     		=> $this->input->post("agenda_rapat"),
						"tanggal_kegiatan"  	=> $this->input->post("tanggal_kegiatan"),
						"jam"     				=> $this->input->post("jam"),
						"kode" 					=> $this->input->post("kode"),
						"lokasi_persil" 		=> $this->input->post("lokasi_persil"),
						"tindak_lanjut"    		=> implode(',', $this->input->post("tindak_lanjut")),
						"keterangan"    		=> $this->input->post("keterangan"),
						"file_materi"    		=> $this->input->post("file_materi"),
						"file_undangan"    		=> $this->input->post("file_undangan"),	
						"komentar"    			=> $this->input->post("komentar"),	
						"status"    			=> $this->input->post("status")
					);

					/*upload file MATERI*/
					$config_file['upload_path']          = './uploads/pengendalian/';
					$config_file['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
					$config_file['max_size']             = 100000000;
					$config_file['encrypt_name']         = false;

					$this->load->library('upload', $config_file);

					if ( ! $this->upload->do_upload('file_materi'))
					{
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", $this->upload->display_errors());
						redirect('perencanaan/input_monitoring');
					}
					else
					{
						$upload_file = $this->upload->data();
						$data['file_materi'] = $upload_file['file_name'];
					}

					/*upload file UNDANGAN*/
					// $this->upload->initialize($config_file);

					if ( ! $this->upload->do_upload('file_undangan'))
					{
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", $this->upload->display_errors());
						redirect('perencanaan/input_monitoring');
					}
					else
					{
						$upload_file = $this->upload->data();
						$data['file_undangan'] = $upload_file['file_name'];
					}


					/* save to db */
					$save = $this->app_model->addData("pengendalian",$data);

					if($save) {
						/* saved */
						$this->session->set_flashdata("alert", "success");
						$this->session->set_flashdata("message", "Data berhasil disimpan");
						redirect("pengendalian/tabel_arsip_pengendalian");           
						
					} else {
						/* error */
						$this->session->set_flashdata("alert", "error");
						$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
						// $this->session->set_flashdata("message", print_r($data, true));
						redirect("pengendalian/input_monitoring");
					}
					
                
                } else {
                    /* kode already exists */
                    $this->session->set_flashdata("alert", "error");
                    $this->session->set_flashdata("message", "kode telah digunakan!");
                    redirect("pengendalian/kosdesudahada");                    
                }
                
            }
            
        /* if not submitted form show the view */
        } else {
            $data["title"] = "Input Data Pengendalian";
			$data["users"] = $this->session->userdata('users');
            $data["content"] = "pengendalian/form_input_monitoring";
            $this->load->view('sneat-templates/template', $data);
        }
        
    }
	
	public function edit_monitoring() {
        
        if($this->input->post('submit')) {   
                     
			$kode_kode = $this->input->post("kode");

            // /* validate */
			$this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
            // $this->form_validation->set_rules('id_pengendalian', 'Id_pengendalian', 'trim|required');
			$this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
			$this->form_validation->set_rules('tema', 'Tema', 'trim|required');
			$this->form_validation->set_rules('nama_kegiatan', 'nama_kegiatan', 'trim|required');
			$this->form_validation->set_rules('agenda_rapat', 'agenda_rapat', 'trim|required');
			$this->form_validation->set_rules('tanggal_kegiatan', 'tanggal_kegiatan', 'trim|required');
            $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
            $this->form_validation->set_rules('lokasi_persil', 'lokasi_persil', 'trim|required');
            $this->form_validation->set_rules('tindak_lanjut', 'tindak_lanjut', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
			$this->form_validation->set_rules('kronologis', 'kronologis', 'trim|required');
            $this->form_validation->set_rules('file_materi', 'file_materi', 'trim|required');
			$this->form_validation->set_rules('file_undangan', 'file_undangan', 'trim|required');
            
			$profil_lama = $this->db->where("kode", $kode_kode)->get("pengendalian");

            /* check validation form*/
            if ($this->form_validation->run() == FALSE) {
                /* form not valid */
                $this->session->set_flashdata("alert", "error");
                $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
                redirect('pengendalian/tabel_arsip_pengendalian');
                
			/* if form is valid */
			} else {
            
				/* if form is valid check id exists */
				$kode_exists = $this->app_model->check_exists("pengendalian", "kode", $this->input->post("kode"));
			
				if($kode_exists > 0) {
				
				/* set data */
				$data = array(
					"bidang"     			=> $this->input->post("bidang"),
					// "id_pengendalian"  	=> $this->input->post("id_pengendalian"),
					"status"	    		=> $this->input->post("status"),
					"tema" 					=> $this->input->post("tema"),
					"nama_kegiatan"     	=> $this->input->post("nama_kegiatan"),
					"agenda_rapat"  		=> $this->input->post("agenda_rapat"),
					"tanggal_kegiatan"     	=> $this->input->post("tanggal_kegiatan"),
					"kode" 					=> $this->input->post("kode"),
					"lokasi_persil" 		=> $this->input->post("lokasi_persil"),
					"tindak_lanjut"    		=> $this->input->post("tindak_lanjut"),
					"keterangan"    		=> $this->input->post("keterangan"),
					"kronologis"    		=> $this->input->post("kronologis"),
					"file_materi"    		=> $this->input->post("file_materi"),
					"file_undangan"    		=> $this->input->post("file_undangan"),
					
				);

				/* save to db */
				$save = $this->app_model->updateData("pengendalian","kode", $kode_kode, $data);

				if($save) {
					/* saved */
					$this->session->set_flashdata("alert", "success");
					$this->session->set_flashdata("message", "Data berhasil disimpan");
					redirect("pengendalian/tabel_arsip_pengendalian");           
					
				} else {
					/* error */
					$this->session->set_flashdata("alert", "error");
					$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
					redirect("pengendalian/tabel_arsip_pengendalian");
				}
			
			} else {
				/* kode not found */
				$this->session->set_flashdata("alert", "error");
				$this->session->set_flashdata("message", "pengendalian not found!");
				redirect("pengendalian/tabel_arsip_pengendalian");                    
			}
			
		}
		
		/* if not submitted form show the view */
		} else {
		$data["title"] = "Edit Data Pengendalian";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "pengendalian/form_input_monitoring";

		$check_exists = $this->app_model->getWhere('pengendalian', 'kode', $this->input->get('kode', TRUE));

		if($check_exists->num_rows() > 0) {
			$pengendalian = $check_exists->row_array();
			$data["edit"] = array (
				"bidang"            	=> $pengendalian["bidang"],
				"status"        		=> $pengendalian["status"],
				"tema"         			=> $pengendalian["tema"],
				"nama_kegiatan"         => $pengendalian["nama_kegiatan"],
				"agenda_rapat"      	=> $pengendalian["agenda_rapat"],
				"tanggal_kegiatan"      => $pengendalian["tanggal_kegiatan"],
				"id_pengendalian"  		=> $pengendalian["id_pengendalian"],
				"kode"         			=> $pengendalian["kode"],
				"lokasi_persil" 		=> $pengendalian["lokasi_persil"],
				"tindak_lanjut"         => $pengendalian["tindak_lanjut"],
				"keterangan"          	=> $pengendalian["keterangan"],
				"kronologis"          	=> $pengendalian["kronologis"],
				"file_materi"	        => $pengendalian["file_materi"],
				"file_undangan"	        => $pengendalian["file_undangan"],
			);
			} else {
				/* kode not found */
				$this->session->set_flashdata("alert", "error");
				$this->session->set_flashdata("message", "Data tidak ditemukan!");
				redirect("pengendalian/tabel_arsip_pengendalian");
			}

		$this->load->view('sneat-templates/template', $data);
		}

	}	

	public function hapus() {
        $id_pengendalian = $this->input->get('id_pengendalian');
        $this->db->delete('pengendalian', array('id_pengendalian'=>$id_pengendalian));
        
        redirect('pengendalian/tabel_arsip_pengendalian');

    }
	// end PENGENDALIAN

	// Assets upload files
	// public function tambah_aksi() {
    //     if($this->input->post('submit')) {   

    //         // /* validate */
    //         $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');
    //         // $this->form_validation->set_rules('id_pengendalian', 'Id_pengendalian', 'trim|required');
	// 		$this->form_validation->set_rules('status', 'Status Kegiatan', 'trim|required');
	// 		$this->form_validation->set_rules('tema', 'Tema', 'trim|required');
	// 		$this->form_validation->set_rules('agenda_rapat', 'Agenda Rapat', 'trim|required');
	// 		$this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'trim|required');
    //         $this->form_validation->set_rules('kode', 'Kode', 'trim|required');
    //         $this->form_validation->set_rules('lokasi_persil', 'Lokasi', 'trim|required');
    //         $this->form_validation->set_rules('tindak_lanjut', 'Tindak Lanjut', 'trim|required');
	// 		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
	// 		$this->form_validation->set_rules('kronologis', 'Kronologis', 'trim|required');
    //         $this->form_validation->set_rules('file_materi', 'File Materi', 'trim|required');
	// 		$this->form_validation->set_rules('file_undangan', 'File Undangan', 'trim|required');
	// 		// $this->form_validation->set_rules('file_undangan', 'File Undangan', 'trim|required');
		

    //         /* check validation form*/
    //         if ($this->form_validation->run() == FALSE) {
    //             /* form not valid */
    //             $this->session->set_flashdata("alert", "error");
    //             $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
    //             redirect('pengendalian/monitoring_pengaduan');
                
    //         /* if form is valid */
    //         } else {
            
    //             /* if form is valid check kode exists */
    //             $kode_exists = $this->app_model->check_exists("pengendalian", "kode", $this->input->post("kode"));
                
    //             if($kode_exists == 0) {
    //                 /* if kode not exists check code */
                    
	// 				$file_undangan   				=> $_FILES['file_undangan'];
	// 				if ($file_undangan=''){}else{
	// 					$config['upload_path'] 		= './uploads/pengendalian';
	// 					$config['allowed_types']		= 'jpg|png|pdf';

	// 					$this->load->library('upload',$config);
	// 					if(!$this->upload->do_upload('file_undangan')){
	// 						echo 'Upload Fail'; die();
	// 					}else{
	// 						$file_undangan=$this->upload->data('file_name');
	// 					}
	// 				}

	// 				/* set data */
	// 				$data = array(
	// 					"bidang"     			=> $this->input->post("bidang"),
	// 					// "id_pengendalian"  		=> $this->input->post("id_pengendalian"),
	// 					"status"	    		=> $this->input->post("status"),
	// 					"tema" 					=> $this->input->post("tema"),
	// 					"nama_kegiatan"     	=> $this->input->post("nama_kegiatan"),
	// 					"agenda_rapat"  		=> $this->input->post("agenda_rapat"),
	// 					"tanggal_kegiatan"     	=> $this->input->post("tanggal_kegiatan"),
	// 					"kode" 					=> $this->input->post("kode"),
	// 					"lokasi_persil" 		=> $this->input->post("lokasi_persil"),
	// 					"tindak_lanjut"    		=> $this->input->post("tindak_lanjut"),
	// 					"keterangan"    		=> $this->input->post("keterangan"),
	// 					"kronologis"    		=> $this->input->post("kronologis"),
	// 					// "file_materi"    		=> $this->input->post("file_materi"),
	// 					"file_undangan"    		=> $file_undangan,
						
						
						
	// 				);
	// 				/* save to db */
	// 				$save = $this->app_model->addData("pengendalian",$data);

	// 				if($save) {
	// 					/* saved */
	// 					$this->session->set_flashdata("alert", "success");
	// 					$this->session->set_flashdata("message", "Data berhasil disimpan");
	// 					redirect("pengendalian/tabel_arsip_pengendalian");           
						
	// 				} else {
	// 					/* error */
	// 					$this->session->set_flashdata("alert", "error");
	// 					$this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
	// 					redirect("pengendalian/gagal");
	// 				}
                
    //             } else {
    //                 /* kode already exists */
    //                 $this->session->set_flashdata("alert", "error");
    //                 $this->session->set_flashdata("message", "kode telah digunakan!");
    //                 redirect("pengendalian/kosdesudahada");                    
    //             }
                
    //         }
            
    //     /* if not submitted form show the view */
    //     } else {
    //         $data["title"] = "Input Data Pengendalian";
	// 		$data["users"] = $this->session->userdata('users');
    //         $data["content"] = "pengendalian/form_input_monitoring";
    //         $this->load->view('sneat-templates/template', $data);
    //     }
        
    // }

}
