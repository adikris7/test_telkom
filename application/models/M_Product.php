<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model{
    public function SemuaData()
    {
        $this->db->select('*');
        $this->db->from('data_onero');
        $query = $this->db->get();
        return $query->result();

    }

    public function InsertDataProduct($data)
    {
        $this->db->insert('data_onero', $data);
    }

    public function UpdateDataProduct($data, $where , $table)
    {   
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getDataProductDetail($id_barang)
    {   
        $this->db->where('id_barang',$id_barang);
        $query = $this->db->get('data_onero');
        return $query->row();
    }

    public function deleteDataProduct($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('data_onero');
    }
}