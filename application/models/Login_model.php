<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $hashed_password = md5($password); // Hash password menggunakan MD5

        $this->db->where('username', $username);
        $this->db->where('password', $hashed_password);
        $query = $this->db->get('tb_user');
        var_dump($query->row());
        // if ($query->num_rows() == 1) {
        //     return $query->row();
        // } else {
        //     return false;
        // }
    }
}
