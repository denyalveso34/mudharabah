<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Forum extends CI_Controller {

	function __construct(){
		parent::__construct();
        if ($this->session->userdata('users') && $this->session->userdata('users')['role'] != 'superadmin' && $this->session->userdata('users')['role'] != 'pemanfaatan'&& $this->session->userdata('users')['role'] != 'perencanaan'&& $this->session->userdata('users')['role'] != 'pengendalian'&& $this->session->userdata('users')['role'] != 'anggota') {
            redirect('/');
        } if (!$this->session->userdata('users')){
            redirect('/');
        }
		}

	
	public function index()
	{
		$data["title"] = "forum";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "forum/agenda_rapat";
		// $data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

	public function agenda_rapat()
	{
		$data["title"] = "agenda";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "forum/agenda_rapat";
		// $data["datatables"] = TRUE;

		$data["pr_agenda"] = $this->app_model->getWhereOrder("perencanaan", "status", "dirapatkan", "tanggal_kegiatan");
		$data["pm_agenda"] = $this->app_model->getWhereOrder("pemanfaatan", "status", "dirapatkan", "tanggal_kegiatan");
		$data["pg_agenda"] = $this->app_model->getWhereOrder("pengendalian", "status", "dirapatkan", "tanggal_kegiatan");
		
		$this->load->view('sneat-templates/template', $data);
	}

	// KLIK PENGAJUAN RAPAT FPR
	public function pengajuan_rapat()
	{
		$data["title"] = "pengajuan";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "forum/pengajuan_rapat";
		// $data["datatables"] = TRUE;
		
		// $perencanaan = $this->app_model->getWhere('perencanaan', 'id_perencanaan');
		
		$this->load->view('sneat-templates/template', $data);
	}
	
	public function informasi(){
		{
			$data["title"] = "informasi";
			$data["users"] = $this->session->userdata('users');
			$data["content"] = "forum/informasi";
			// $data["datatables"] = TRUE;
			
			$this->load->view('sneat-templates/template', $data);
		}
	}

	



	// List rapat perencanaan 
	public function pengajuan_perencanaan()
	{
		$data["title"] = "pengajuan";
		$data["users"] = $this->session->userdata('users');
		$data["pr_agenda"] = $this->app_model->getSorted("perencanaan", "tanggal_kegiatan");
		$data["content"] = "forum/pr_agenda";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

	// List rapat pemanfaatan 
	public function pengajuan_pemanfaatan()
	{
		$data["title"] = "pengajuan";
		$data["users"] = $this->session->userdata('users');
		$data["pm_agenda"] = $this->app_model->getSorted("pemanfaatan", "id_pemanfaatan");
		$data["content"] = "forum/pm_agenda";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}

	// List rapat pengendalian
	public function pengajuan_pengendalian()
	{
		$data["title"] = "pengajuan";
		$data["users"] = $this->session->userdata('users');
		$data["pg_agenda"] = $this->app_model->getSorted("pengendalian", "tanggal_kegiatan");
		$data["content"] = "forum/pg_agenda";
		$data["datatables"] = TRUE;
		
		$this->load->view('sneat-templates/template', $data);
	}
	
	// Update status
	public function updatestatus()
	{
		$status = $this->input->get('status');
		$agenda = $this->input->get('agenda');
		$id = $this->input->get('id');
		
		$status_list = ['tersimpan', 'diajukan', 'dirapatkan', 'diinformasikan','cetak'];
		$agenda_list = ['perencanaan', 'pemanfaatan', 'pengendalian', 'diinformasikan']; 

		if (!isset($status) || !isset($agenda) || !isset($id) ){
			$this->session->set_flashdata("alert", "error");
			$this->session->set_flashdata("message", "status agenda tidak di set!");
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		if (isset($status) && !in_array($status, $status_list)){	
			$this->session->set_flashdata("alert", "error");
			$this->session->set_flashdata("message", "status tidak valid!");
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		if (isset($agenda) && !in_array($agenda, $agenda_list)){	
			$this->session->set_flashdata("alert", "error");
			$this->session->set_flashdata("message", "agenda tidak valid!");
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		if(isset($id)){
			$data = $this->app_model->getWhere($agenda, 'id_'.$agenda, $id);
			if($data->num_rows() > 0) {

				$item = $data->row_array();
				if($item['status'] == $status){
					$this->session->set_flashdata("alert", "error");
					$this->session->set_flashdata("message", "status sama!");
					redirect($_SERVER['HTTP_REFERER']);
				}

				$data = array("status" => $this->input->get("status",TRUE));
				$save = $this->app_model->updateData($agenda,'id_'.$agenda, $id, $data);

				if($save) {
					/* saved */
					$this->session->set_flashdata("alert", "success");
					$this->session->set_flashdata("message", "status berhasil diupdate");
					redirect($_SERVER['HTTP_REFERER']);          
					
				} else {
					/* error */
					$this->session->set_flashdata("alert", "error");
					$this->session->set_flashdata("message", "Terjadi kesalahan update data!");
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}

	}
	
	public function print (){
		
		$data["title"] = "cetak";
		$data["users"] = $this->session->userdata('users');
		$data["content"] = "forum/cetak";
		$data["datatables"] = TRUE;

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
		 $html = $this->load->view('forum/cetak', ['counter' => $counter,'current_dateL' => $current_dateL,'current_dateF' => $current_dateF,'current_dateD' => $current_dateD,'current_dateM' => $current_dateM, 'current_date' => $current_date, 'bulan' => $bulan,'hari' => $hari, 'current_dateY' => $current_dateY ], true);
	 
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