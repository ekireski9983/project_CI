<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model {
    public function __construct ()
    {
        parent ::__construct();
    }

    public function create_userid_pembeli()
    {
        $this->db->select('MID(tbl_pembeli.userid,3,4)as userid', false);
        $this->db->order_by('userid','DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_pembeli');

        if ($query->num_rows()<> 0){
            $data = $query->row();
            $kode = intval($data->userid) + 1;
        }else{
            $kode = 1;
        }
        $batas = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodetampil = "PB" .$batas;
        return $kodetampil;
    }

    public function getlistpembeli()
    {
        $this->db->from('tbl_pembeli')
        ->select('*')
        ->order_by('userid','ASC');
        $getData = $this->db->get()->result();
        return $getData;
    }
    public function getpembelibyuserid($userid)
    {
        $this->db->from('tbl_pembeli')
        ->select('*')
        ->where9([
            'userid' => $userid
        ]);
        $getData = $this->db->get()->row();
        return $getData;
    }
    public function getdatabarang()
    {
        $this->db->from("tbl_barang")
        ->select("*")
        ->order_by("id_barang", "ASC");
        $getData = $this->db->get()->result();
        return $getData;
    }
}