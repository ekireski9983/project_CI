<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_inti extends CI_model 
{
    public function __construct ()
    {
        parent ::__construct();
    }

    public function forinsert($table, $data)
    {
        $res = $this->db->insert($table, $data);
        return $res;
    }

    public function forupdate($table, $data, $where)
    {
        $res = $this->db->update($table, $data, $where);
        return $res;
    }

    public function fordelete($table, $where)
    {
        $res = $this->db->delete($table, $where);
        return $res;
    }

    public function getAgama()
    {
        $this->db->from('m_agama')
        ->select('*')
        ->order_by('id');
        $getData = $this->db->get()->result();
        return $getData;
    }
}