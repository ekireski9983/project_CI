<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller {
    public function __construct ()
    {
        parent ::__construct();
        $this->load->model(array(
            'model_inti',
            'model_signin'));
    }

    public function index()
    {
        if (!empty($this->session->all_userdata())) {
            session_destroy();
        }
        $this->load->view('signin/login');
    }

    public function IPnya()
    {
        $ipaddres = "";
        if (getenv('HTTP_CLIENT_IP')) {
            $ipaddres = getenv('HTTP_CLIENT_IP');
        }elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ipaddres = getenv('HTTP_X_FORWARDED_FOR');
        }elseif (getenv('HTTP_X_FORWARDED')) {
            $ipaddres = getenv('HTTP_X_FORWARDED');
        }elseif (getenv('REMOTE_ADDR')) {
            $ipaddres = getenv('REMOTE_ADDR');
        }else{   
            $ipaddres = "IP tidak dikenal";
        }
        return $ipaddres;
    }

    public function login()
    {
        $user = $this->db->escape_str($this->input->post("user"));
        $pass = $this->db->escape_str($this->input->post("pass"));

        $validasi = $this->model_signin->checkLogin($user, md5($pass));
        if(isset($validasi) == false){
            $data = array("pesan" => "Username dan Password salah atau non aktif");
            $this->session->set_flashdata($data);
            redirect(base_url());
        }else{
            $level = $validasi->level;
            $log_user = array(
                'userid'=> $validasi->userid,
                'log_ip'=> $this->IPnya(),
                'log_kom'=> gethostbyaddr($_SERVER['REMOTE_ADDR']),
                'log_lastaction'=> $_SERVER['PHP_SELF'],
                'log_status'=> 0,
                'tanggal'=> date('Y-m-d'),
                'log_date_out' => date('Y-m-d H:i:s')
            );
            $this->model_inti->forinsert('tbl_log_user' ,$log_user);

            // untuk mendapatkan user info
            if($level != 3){
                $user = $this->model_signin->getkaryawan($validasi->userid);
            } else{
                $user = $this->model_signin->getpembeli($validasi->userid);
            }

            $sesi = array(
                'userid'=> $validasi->userid,
                'level'=> $level
            );
            $this->session->set_userdata($sesi);

            // untuk menuju masing-masing controller
            if ($level == 0){
                $dash = base_url('superadmin');
            }elseif ($level == 1){
                $dash = base_url('admin');
            }elseif ($level == 2){
                $dash = base_url('owner');
            }else{
                $dash = base_url('pembeli');
            }

            redirect($dash);
        }
    }

    public function formregis()
    {
        $this->load->view('signin/regis');
    }

    public function regis()
    {
        $user = $this->db->escape_str($this->input->post("user"));
        $pass = $this->db->escape_str($this->input->post("pass"));
        $level = $this->input->post("level");
        $status = 1;

        $data = array(
            'userid' => $user,
            'password'=> md5($pass),
            'level'=> $level,
            'status'=> $status
            );
            $this->model_inti->forinsert('tbl_user', $data);
            redirect(base_url());
    }

    public function logout()
    {
        $data = array('log_status' => 1);
        $where = array('userid' => $this->session->userid, 'log_status' => 0);
        $this->model_inti->forupdate('tbl_log_user', $data, $where);

        $this->session->sess_destroy();
        $pesan = array('pesan' =>'Anda telah logout');
        $this->session->set_flashdata($pesan);
        redirect(base_url());
    }
}