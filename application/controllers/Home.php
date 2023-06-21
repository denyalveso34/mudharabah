<?php

use Google\Client as GoogleClient;
use Google\Service\Oauth2;

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('app_model');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($users = $this->app_model->getUser($email)) {
            if ($password == $users->password) {
                $this->session->set_userdata('user', $users);
                redirect('home/dashboard');
            } else {
                $this->load->view('login', array('message' => 'Invalid Login Credentials!'));
            }
        } else {
            $this->load->view('login', array('message' => 'No account exists!'));
        }
    }

    public function dashboard()
    {
        $data["title"] = "dashboard";
        $data["content"] = "dashboard/index";
        $data["datatables"] = true;
        $this->load->view('sneat-templates/template', $data);
        // if($this->session->has_userdata('users')){
        // $users = $this->session->userdata('users');
        // $this->load->view('sneat-templates/header',array('users'=>$users));
        // // $this->load->view('sneat-templates/header',array('users'=>$users));
        // }else{
        // redirect('');
        // }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function google_login()
    {
        date_default_timezone_set('Asia/Jakarta');
        $client = new GoogleClient();
        $client->setApplicationName('Your Application name');
        $client->setClientId(env_ClientId);
        $client->setClientSecret(env_ClientSecret);
        $client->setRedirectUri(env_BASE_URL . 'home/google_login');
        $client->addScope(['openid', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile']);
        if ($code = $this->input->get('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($token);
            $oauth = new Oauth2($client);
            $user_info = $oauth->userinfo->get();
            $data['uid'] = $user_info->id;
            $data['email'] = $user_info->email;
            $data['givenName'] = $user_info->givenName;
            $data['familyName'] = $user_info->familyName;
            $data['name'] = $user_info->name;
            $data['nama'] = $user_info->nama;
            $data['gender'] = $user_info->gender;
            $data['picture'] = $user_info->picture;
            $data['verifiedEmail'] = $user_info->verifiedEmail;
            if ($users = $this->app_model->getUser($user_info->email)) {
                $data['modified'] = date("Y-m-d H:i:s");
                $this->db->where('email', $data['email']);
                $this->db->update('users', $data);
                $data['role'] = $users->role;
                $data['telepon'] = $users->telepon;
                $this->session->set_userdata('users', $data);
            } else {
                $data['created'] = date("Y-m-d H:i:s");
                $data['role'] = 'guest';
                $data['telepon'] = '08';
                $this->db->insert('users', $data);
                $this->session->set_userdata('users', $data);
            }
            redirect('dashboard');
        } else {
            $url = $client->createAuthUrl();
            header('Location:' . filter_var($url, FILTER_SANITIZE_URL));
        }
    }
}
