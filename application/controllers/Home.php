<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $title = "dashboard";
        $data = array(
            'title' => $title,
            'page' => 'admin/dashboard',
            'link' => 'home'
        );
        $this->load->view('template/wrapper', $data);
    }
    public function absensi()
    {
        $title = "Absensi Karyawan";
        $data = array(
            'title' => $title,
            'page' => 'admin/v_absensi',
            'link' => 'home/absensi'
        );
        $this->load->view('template/wrapper', $data);
    }
}
