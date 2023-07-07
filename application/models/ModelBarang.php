<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelBarang extends CI_Model
{
    public function getBarang(){
        return $this->db->get('barang');
    }

    public function simpanBarang($data, $table){
        $this->db->insert($table,$data);
    }

    public function getBarangWhere($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function updateBarang($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusBarang($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id', $id)
                            ->limit(1)
                            ->get('barang');
        if($result->num_rows() > 0) {
            return $result->row();
        }
        else{
            return array();
        }
    }

    public function detailBarang($id){
        $result = $this->db->where('id', $id)->get('barang');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function dataPria(){
        return $this->db->get_where("barang", array('kategori' => 'Seragam Sekolah'));
    }

    public function dataWanita(){
        return $this->db->get_where("barang", array('kategori' => 'Accesoriess Sekolah'));
    }

    public function dataAnak(){
        return $this->db->get_where("barang", array('kategori' => 'Peralatan Pramuka'));
    }

    public function getKategori(){
        return $this->db->get('kategori');
    }
}