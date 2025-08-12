<?php 

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('login/index');
    }

    function act_login(){
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $cek = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();

        if ($cek) {
            if ($pass === $cek['pass']) {
                $data = [
                    'username' => $username,
                    'jabatan'  => $cek['jabatan'],
                    'kode'     => $cek['kode']
                ];
                $this->session->set_userdata($data);

                // Arahkan sesuai jabatan
                if ($cek['jabatan'] == 'Kepala Kantor') {
                    redirect('kepala_kantor/dashboard'); // ganti sesuai controller kepala kantor
                } elseif ($cek['jabatan'] == 'Admin') {
                    redirect('admin/dashboard');
                } elseif ($cek['jabatan'] == 'Petugas') {
                    redirect('petugas/dashboard');
                } else {
                    redirect('app/'); // default
                }

            } else {
                $this->session->set_flashdata('message', 'swal("Ops", "Password anda salah", "error");');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', 'swal("Ops", "Akun anda tidak terdaftar", "error");');
            redirect('login');
        }
    }

    function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('kode');
        $this->session->unset_userdata('jabatan');
        redirect('login/');
    }
}
?>