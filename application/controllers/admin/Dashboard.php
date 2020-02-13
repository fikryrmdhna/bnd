<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('pages/admin/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }
}
