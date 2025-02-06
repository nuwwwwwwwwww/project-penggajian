<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPangkat extends CI_Controller {

    public function index() {
        $data['title'] = 'Data Pangkat';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataPangkat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input() {
        $data['title'] = 'Input Data Pangkat';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/inputPangkat', $data);
        $this->load->view('templates_admin/footer');
    }    
}