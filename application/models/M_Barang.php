<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Barang extends CI_Model
{
    var $table = 'tb_barang';

    public function input_barang()
    { }

    public function get_all_barang()
    {
        $this->db->from('tb_barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('kode_produk', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function update_barang($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('kode_produk', $id);
        $this->db->delete($this->table);
    }

    public function upload_image($image)
    {
        $data = [
            'image' => $image
        ];

        $this->db->insert('tb_barang', $data);
    }
}
