<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataBarang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Barang');
    }

    public function index()
    {
        $data['title']  = 'Data Barang';
        $data['barang'] = $this->M_Barang->get_all_barang();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('pages/admin/data_barang', $data);
        $this->load->view('templates/admin/footer');
    }

    public function ajax_edit($id)
    {
        $data = $this->M_Barang->get_by_id($id);
        echo json_encode($data);
    }

    public function update_barang()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'image' => $this->input->post('image'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'harga_jual' => $this->input->post('stok'),
        );
        $this->M_Barang->update_barang(array('kode_produk' => $this->input->post('kode_produk')), $data);

        echo json_encode(array("status" => true));
    }

    public function delete_barang($id)
    {
        $this->M_Barang->delete_by_id($id);
        echo json_encode(array("status" => true));
    }

    public function add_barang()
    {

        $kode_produk    = $this->input->post('kode_produk');
        $nama_produk    = $this->input->post('nama_produk');
        $image          = $_FILES['image'];
        $harga_jual     = $this->input->post('harga_jual');
        $harga_beli     = $this->input->post('harga_beli');
        $stok           = $this->input->post('stok');

        if ($image = '') { } else {
            $config['upload_path']      = "./assets/frontend/images";
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 100;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "<script>alert('Gambar Harus Format JPG atau PNG dan Ukuran Tidak Lebih Dari 100kb')</script>";
            } else {
                $image = $this->upload->data('file_name');
            }

            $data = [
                'kode_produk'   => $kode_produk,
                'nama_produk'   => $nama_produk,
                'image'         => $image,
                'harga_jual'    => $harga_jual,
                'harga_beli'    => $harga_beli,
                'stok'          => $stok,
            ];

            $this->db->insert('tb_barang', $data);
            redirect('admin/databarang');
        }
    }
}
