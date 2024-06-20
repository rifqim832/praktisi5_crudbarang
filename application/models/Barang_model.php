<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    // Method untuk mengambil semua data barang
    public function get_barang() {
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    // Method untuk mencari data barang berdasarkan keyword
    public function search_data_barang($keyword) {
        $this->db->like('nama_barang', $keyword);
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    // Method untuk mengambil data barang berdasarkan ID
    public function get_barang_by_id($id) {
        $query = $this->db->get_where('barang', ['id' => $id]);
        return $query->row_array();
    }

    // Method untuk menambah data barang
    public function insert_barang($data) {
        return $this->db->insert('barang', $data);
    }

    // Method untuk mengupdate data barang
    public function update_barang($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('barang', $data);
    }

    // Method untuk menghapus data barang
    public function delete_barang($id) {
        $this->db->where('id', $id);
        return $this->db->delete('barang');
    }
}
