<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Model_login');
        $this->load->database();
    }
    public function index()
    {
        $this->load->view('partialslogin/body');
    }
    public function process_login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->Model_login->get_user($username);

     // Ambil data pengguna dari database
     $user = $this->Model_login->get_user($username);

     // Lakukan validasi tanpa enkripsi
     if ($user && $password === $user['password']) {
         // Jika username dan password sesuai
         $this->session->set_userdata('logged_in', true);
         $this->session->set_userdata('username', $username);
         redirect('siswa/index');
     } else {
         // Gagal login
         $this->load->view('partialslogin/body', array('error' => 'Username atau password salah'));
     }

}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}