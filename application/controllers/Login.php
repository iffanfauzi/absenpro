<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != null) {
            echo '<script>window.location.href="' . base_url(strtolower($this->session->userdata('level'))) . '/home";</script>';
        }
    }

    public function index()
    {
        $title = "Login";
        $data = array(
            'title' => $title,
        );
        $this->load->view('login/v_login', $data);
    }
    public function proses_login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $this->db->select('tb_user.*');
        $this->db->from('tb_user');
        $this->db->where(array('tb_user.username' => $username));
        $lev = $this->db->get();

        if ($lev->num_rows() != 0) {
            if (md5($password) == $lev->row()->password) {
                if ($lev->row()->is_level == 'Admin') {
                    $level = 'Admin';
                } else {
                    $level = $lev->row()->is_level;
                }

                $level = str_replace(" ", "_", $level);

                $sess = array(
                    'id_user' => $lev->row()->id_user,
                    'username' => $lev->row()->username,
                    'nama_user' => $lev->row()->nama_user,
                    'level' => $level,
                    // 'id_login' => $lev->row()->id_login,
                );

                $this->session->set_userdata($sess);

                if ($this->session->userdata('level') != null) {
                    echo '<script>window.location.href="' . base_url(strtolower($this->session->userdata('level'))) . '/home"</script>';
                }
            } else {
                $this->session->set_flashdata('pesan_form', '<hr><div class="text-danger text-center"><b>Email Atau Password Salah !</b></div><hr>');
                echo '<script>window.location.href="' . base_url('login') . '"</script>';
            }
        } else {
            $this->session->set_flashdata('pesan_form', '<hr><div class="text-danger text-center"><b>Email Atau Password Salah !</b></div><hr>');
            echo '<script>window.location.href="' . base_url('login') . '"</script>';
        }
    }
    public function logout()
    {
        // Hapus session pengguna
        $this->session->sess_destroy();

        // Redirect ke halaman login
        redirect('login/login');
    }
}
