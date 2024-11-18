<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_signin extends CI_Model {
    public function __construct ()
    {
        parent ::__construct();
    }

    public function checkLogin($user, $pass)
    {
        $this->db->from('tbl_user')
        ->select('*')
        ->where([
            'userid'=> $user,
            'password'=> $pass,
            'status'=> 1
        ]);
        $getData = $this->db->get()->row();
        return $getData;
    }

    public function getkaryawan($userid)
    {
        $this->db->from('tbl_karyawan')
        ->select('*')
        ->where([
            'userid'=> $userid
            ]);
            $getData = $this->db->get()->row();
            return $getData;
    }

    public function getpembeli($userid)
    {
        $this->db->from('tbl_pembeli')
        ->select('*')
        ->where([
            'userid'=> $userid
            ]);
            $getData = $this->db->get()->row();
            return $getData;
    }
}