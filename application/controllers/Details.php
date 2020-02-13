<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Details extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Barang');
    }

    public function index()
    {
        $data['barang'] = $this->M_Barang->get_all_barang();

        $this->load->view('templates/details_header');
        $this->load->view('pages/details', $data);
        $this->load->view('templates/footer');
    }
}
