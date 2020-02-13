<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Barang');
    }

    public function index()
    {
        $data['barang'] = $this->M_Barang->get_all_barang();
        $this->load->view('templates/header');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');
    }

    public function getDetail($id)
    {
        $data = $this->M_Barang->get_by_id($id);
        echo json_encode($data);
    }
}
