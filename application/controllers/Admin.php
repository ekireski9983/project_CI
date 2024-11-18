<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct ()
    {
        parent ::__construct();
        if ($this->session->userid == NULL){
            $data = array('pesan' => 'Anda harus login terdahulu');
            $this->session->set_flashdata($data);
            redirect(base_url());
        }

        if ($this->session->level !=1){
            redirect(base_url('salah/otorisasi'));
        }

        $this->load->model(array(
            'model_inti',
            'model_signin',
            'model_admin'
        ));
    }

    public function index()
        {
            $data ['user'] = $this->model_signin->getkaryawan
            ($this->session->userid);
            $data['header'] = "admin/template/header";
            $data['sidebar'] = "admin/template/sidebar";
            $data['footer'] = "admin/template/footer";
            $data['chart'] = "admin/template/chart";
            $data['js'] = "admin/template/js";
            $this->load->view('admin/index_new', $data);   
        }
    

    public function cek_index(){
        $this->load->view('admin/indexB');
    }

    // public function index()
    // {
    //     $data['user'] = $this->model_signin->getkaryawan($this->session->userid);
    //     $this->load->view('admin/index', $data);
    // }
    public function setting_pembeli()
    {
        $data['pembeli'] = $this->model_admin->getlistpembeli();
        $this->load->view('admin/setting_pembeli', $data);
    }
    
    public function add_pembeli()
    {
        $data['user'] = $this->model_admin->create_userid_pembeli();
        $this->load->view('admin/form_pembeli', $data);
    }

    public function simpan_pembeli()
    {
        $user = $this->input->post('userid');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');
        $tgl_regis = $this->input->post('tgl_regis');

        $pswd = md5('123456');
        $level = 3;
        $status = 1;

        $datapembeli = array(
            'userid' => $user,
            'nama_pembeli' => $nama,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'email' => $email,
            'jenis_kelamin' => $jk,
            'tgl_regis' => $tgl_regis
        );
        $datauser = array(
            'userid' => $user,
            'password' => $pswd,
            'level' => $level,
            'status' => $status
        );


        $this->model_inti->forinsert('tbl_pembeli', $datapembeli);
        $this->model_inti->forinsert('tbl_user', $datauser);
        redirect(base_url('admin/setting_pembeli'));
    }

    public function hapus_pembeli($userid)
    {
        $where = array(
            'userid' => $userid
        );
        $this->model_inti->fordelete('tbl_pembeli', $where);
        $this->model_inti->fordelete('tbl_user', $where);
        redirect(base_url('admin/setting_pembeli'));
    }

    public function edit_pembeli($userid)
    {
        $data['pembeli'] = $this->model_admin->getpembelibyuserid($userid);
        $this->load->view('admin/form_editpembeli', $data);

    }

    public function update_pembeli()
    {
        $user = $this->input->post('userid');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');

        $data = array(
            'nama_pembeli' => $nama,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'email' => $email,
            'jenis_kelamin' => $jk
        );

        $this->model_inti->forupdate('tbl_pembeli', $data, ['userid' =>$user]);
        redirect(base_url('admin/setting_pembeli'));
    }

    public function viewbarang()
    {
        $this->load->view("admin/barang/_index");
    }
    public function getbarang()
    {
        $data['brg'] = $this->model_admin->getdatabarang();
        $this->load->view('admin/barang/databarang', $data);
    }
    public function simpandatabarang()
    {
        // id: id,
        // nama: nama,
        // qty: qty,
        // harga: harga
        $id = $this->input->post("id");
        $nama = $this->input->post("nama");
        $qty = $this->input->post("qty");
        $harga = $this->input->post("harga");

        $data = array (
            'id_barang' => $id,
            'nama_barang' => $nama,
            'qty' => $qty,
            'harga_satuan' => $harga
        );
        $this->model_inti->forinsert('tbl_barang', $data);
        $pesan = ['pesan' => "sukses"];
        echo json_encode($pesan);
    }

}