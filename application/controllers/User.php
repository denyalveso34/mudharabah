<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('users') && $this->session->userdata('users')['role'] != 'superadmin') {
            redirect('/');
        } if (!$this->session->userdata('users')){
            redirect('/');
        }
    }
    public function index()
    {
        $data["title"] = "user";
        $data["users"] = $this->session->userdata('users');
        $data["user_list"] = $this->app_model->getSorted("users", "id");
        $data["content"] = "user/list_user";
        $data["datatables"] = true;
        $this->load->view('sneat-templates/template', $data);
    }

    public function role_pilih()
    {
        $data["title"] = "role";
        $data["users"] = $this->session->userdata('users');
        $data["content"] = "user/role_pilih";
        $data["datatables"] = true;

        $data["user_list"] = $this->app_model->getWhereOrder("name", "email", "telepon", "role");

        $this->load->view('sneat-templates/template', $data);
    }
    public function update_user_role($id)
    {
        // Mendapatkan input dari form
        $role = $this->input->post('role');

        // Validasi input
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            // Menampilkan form untuk mengupdate data user
            $data['user'] = $this->App_model->getWhere('users', 'id', $id);
            $this->load->view('user/update_user', $data);
        } else {
            // Mengupdate data role di database
            $this->app_model->updateData('users', 'id', $id, array('role' => $role));
            $this->session->set_flashdata("alert", "success");
            $this->session->set_flashdata("message", "status berhasil diupdate");
            // Mengarahkan ke halaman user
            redirect('user');
        }
    }
    public function update_telepon($id)
    {
        // Mendapatkan input dari form
        $telepon = $this->input->post('telepon');

        // Validasi input
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');

        if ($this->form_validation->run() == false) {
            // Menampilkan form untuk mengupdate data user
            $data['user'] = $this->App_model->getWhere('users', 'id', $id);
            $this->load->view('user/update_telepon', $data);
        } else {
            // Mengupdate data telepon di database
            $this->app_model->updateData('users', 'id', $id, array('telepon' => $telepon));
            $this->session->set_flashdata("alert", "success");
            $this->session->set_flashdata("message", "status berhasil diupdate");

            // Mengarahkan ke halaman user
            redirect('user');
        }
    }
    public function hapus()
    {
        $id = $this->input->get('uid');
        $this->db->delete('users', array('uid' => $id));
        redirect('user');
    }

    //         public function updatestatus()
    // {
    //     $role = $this->input->get('role');
    //     // $agenda = $this->input->get('agenda');
    //     $id = $this->input->get('id');

    //     $role_list = ['superadmin','perencanaan','pemanfaatan','pengendalian','guest','anggota'];
    //     // $agenda_list = ['perencanaan', 'pemanfaatan', 'pengendalian'];

    //     if (!isset($role)){
    //         $this->session->set_flashdata("alert", "error");
    //         $this->session->set_flashdata("message", "role agenda tidak di set!");
    //         redirect($_SERVER['HTTP_REFERER']);
    //     }

    //     if (isset($role) && !in_array($role, $role_list)){
    //         $this->session->set_flashdata("alert", "error");
    //         $this->session->set_flashdata("message", "role tidak valid!");
    //         redirect($_SERVER['HTTP_REFERER']);
    //     }

    //     // if (isset($agenda) && !in_array($agenda, $agenda_list)){
    //     //     $this->session->set_flashdata("alert", "error");
    //     //     $this->session->set_flashdata("message", "agenda tidak valid!");
    //     //     redirect($_SERVER['HTTP_REFERER']);
    //     // }

    //     if(isset($id)){
    //         $data = $this->app_model->getWhere($role,'id');
    //         if($data->num_rows() > 0) {

    //             $item = $data->row_array();
    //             if($item['role'] == $role){
    //                 $this->session->set_flashdata("alert", "error");
    //                 $this->session->set_flashdata("message", "role sama!");
    //                 redirect($_SERVER['HTTP_REFERER']);
    //             }

    //             $data = array("role" => $this->input->get("role",TRUE));
    //             $save = $this->app_model->updateData($role,'id');

    //             if($save) {
    //                 /* saved */
    //                 $this->session->set_flashdata("alert", "success");
    //                 $this->session->set_flashdata("message", "role berhasil diupdate");
    //                 redirect($_SERVER['HTTP_REFERER']);

    //             } else {
    //                 /* error */
    //                 $this->session->set_flashdata("alert", "error");
    //                 $this->session->set_flashdata("message", "Terjadi kesalahan update data!");
    //                 redirect($_SERVER['HTTP_REFERER']);
    //             }
    //         }
    //     }

    // }
    // public function tambah_user() {
    // if($this->input->post('submit')) {
    // /* validate */
    // $this->form_validation->set_rules('name', 'name', 'trim|required');
    // $this->form_validation->set_rules('email', 'Email', 'trim|required');
    // $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'trim|required');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required');
    // $this->form_validation->set_rules('telepon', 'No Telfon', 'trim|required');
    // $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    // $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    // $this->form_validation->set_rules('role', 'Role', 'trim|required');
    // /* check validation form*/
    // if ($this->form_validation->run() == FALSE) {
    // /* form not valid */
    // $this->session->set_flashdata("alert", "error");
    // $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
    // redirect('user/tambah-user');
    // /* if form is valid */
    // } else {
    // /* if form is valid check email exists */
    // $email_exists = $this->app_model->check_exists("user", "email", $this->input->post("email"));
    // if($email_exists == 0) {
    // /* if email not exists check password */
    // /* set data */
    // $data = array(
    // "email" => $this->input->post("email"),
    // "password" => md5($this->input->post("password")),
    // "name" => $this->input->post("name"),
    // "nama_lengkap" => $this->input->post("nama_lengkap"),
    // "telepon" => $this->input->post("telepon"),
    // "alamat" => $this->input->post("alamat"),
    // "jenis_kelamin" => $this->input->post("jenis_kelamin"),
    // "tanggal_lahir" => $this->input->post("tanggal_lahir"),
    // "role" => $this->input->post("role"),
    // );
    // /* save to db */
    // $save = $this->app_model->addData("user", $data);

    // if($save) {
    // /* saved */
    // $this->session->set_flashdata("alert", "success");
    // $this->session->set_flashdata("message", "Data berhasil disimpan");
    // redirect("user");
    // } else {
    // /* error */
    // $this->session->set_flashdata("alert", "error");
    // $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
    // redirect("user/tambah-user");
    // }
    // } else {
    // /* email already exists */
    // $this->session->set_flashdata("alert", "error");
    // $this->session->set_flashdata("message", "Email telah digunakan!");
    // redirect("user/tambah-user");
    // }
    // }
    // /* if not submitted form show the view */
    // } else {
    // $data["title"] = "tambah_user";
    // $data["content"] = "user/form_tambah_user";
    // $this->load->view('sneat-templates/template', $data);
    // }
    // }

    // public function edit_user()
    // {
    //         if ($this->input->post('submit')) {

    //                 $id_akun = $this->input->post("id");

    //                 /* validate */
    //                 // $this->form_validation->set_rules('name', 'name', 'trim|required');
    //                 // $this->form_validation->set_rules('email', 'Email', 'trim|required');
    //                 // $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'trim|required');
    //                 // $this->form_validation->set_rules('password', 'Password', 'trim');
    //                 $this->form_validation->set_rules('telepon', 'No Telfon', 'trim|required');
    //                 // $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    //                 // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
    //                 // $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
    //                 $this->form_validation->set_rules('role', 'Role', 'trim|required');
    //                 $profil_lama = $this->db->where("id", $id_akun)->get("users");

    //                 /* check validation form*/
    //                 if ($this->form_validation->run() == FALSE) {
    //                         /* form not valid */
    //                         $this->session->set_flashdata("alert", "error");
    //                         $this->session->set_flashdata("message", "Formulir tidak boleh kosong!");
    //                         redirect('user/edit-user');
    //                         /* if form is valid */
    //                 } else {
    //                         /* if form is valid check id exists */
    //                         $id_exists = $this->app_model->check_exists("users", "id", $this->input->post("id"));
    //                         if ($id_exists > 0) {
    //                                 /* if id not exists check password */
    //                                 /* set data */
    //                                 $data = array(
    //                                         // "email" => $this->input->post("email"),
    //                                         // "password" => md5($this->input->post("password")),
    //                                         // "name" => $this->input->post("name"),
    //                                         // "nama_lengkap" => $this->input->post("nama_lengkap"),
    //                                         "telepon" => $this->input->post("telepon"),
    //                                         // "alamat" => $this->input->post("alamat"),
    //                                         // "jenis_kelamin" => $this->input->post("jenis_kelamin"),
    //                                         // "tanggal_lahir" => $this->input->post("tanggal_lahir"),
    //                                         "role" => $this->input->post("role"),
    //                                 );

    //                                 // if ($this->input->post("password")) {
    //                                 //         $data["password"] = md5($this->input->post("password"));
    //                                 // }
    //                                 /* save to db */
    //                                 $save = $this->app_model->updateData("users", "uid", $id_akun, $data);

    //                                 if ($save) {
    //                                         /* saved */
    //                                         $this->session->set_flashdata("alert", "success");
    //                                         $this->session->set_flashdata("message", "Data berhasil disimpan");
    //                                         redirect("user");
    //                                 } else {
    //                                         /* error */
    //                                         $this->session->set_flashdata("alert", "error");
    //                                         $this->session->set_flashdata("message", "Terjadi kesalahan saat menyimpan data!");
    //                                         redirect("user/edit-user");
    //                                 }
    //                         } else {
    //                                 /* id not found */
    //                                 $this->session->set_flashdata("alert", "error");
    //                                 $this->session->set_flashdata("message", "user not found!");
    //                                 redirect("user");
    //                         }
    //                 }
    //                 /* if not submitted form show the view */
    //         } else {
    //                 $data["title"] = "edit_user";
    //                 $data["users"] = $this->session->userdata('users');
    //                 $data["content"] = "user/form_tambah_user";

    //                 $check_exists = $this->app_model->getWhere('users', 'uid', $this->input->get('uid', TRUE));

    //                 if ($check_exists->num_rows() > 0) {
    //                         $users = $check_exists->row_array();
    //                         $data["edit"] = array(
    //                                 // "id" => $users["id"],
    //                                 // "name" => $users["name"],
    //                                 // "email" => $users["email"],
    //                                 // "nama_lengkap" => $users["nama_lengkap"],
    //                                 // "password" => $users["password"],
    //                                 "telepon" => $users["telepon"],
    //                                 // "alamat" => $users["alamat"],
    //                                 // "jenis_kelamin" => $users["jenis_kelamin"],
    //                                 // "tanggal_lahir" => $users["tanggal_lahir"],
    //                                 "role" => $users["role"],
    //                         );
    //                 } else {
    //                         /* id not found */
    //                         $this->session->set_flashdata("alert", "error");
    //                         $this->session->set_flashdata("message", "Data tidak ditemukan!");
    //                         redirect("user");
    //                 }

    //                 $this->load->view('sneat-templates/template', $data);
    //         }
    // }

}
