<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') == null) {
            $this->session->set_flashdata('pesan_form', '<hr><div class="text-danger text-center"><b>Silahkan Login Terlebih Dahulu !</b></div><hr>');
            echo '<script>window.location.href="' . base_url('login') . '"</script>';
        }

        if ($this->session->userdata('level') != 'Admin') {
            echo '<script>window.location.href="' . base_url(strtolower($this->session->userdata('level'))) . '/home"</script>';
        }
    }


    public function index()
    {
        $title = "dashboard";
        $data = array(
            'title' => $title,
            'page' => 'admin/dashboard',
            'link' => 'admin/home'
        );
        $this->load->view('template/wrapper', $data);
    }
    public function absensi()
    {
        $title = "Absensi Karyawan";
        $data = array(
            'title' => $title,
            'page' => 'admin/v_absensi',
            'link' => 'admin/home/absensi'
        );
        $this->load->view('template/wrapper', $data);
    }
    public function absensifo()
    {
        $title = "Absensi Karyawan FO";
        $data = array(
            'title' => $title,
            'page' => 'admin/v_absensifo',
            'link' => 'admin/home/absensifo'
        );
        $this->load->view('template/wrapper', $data);
    }
}
