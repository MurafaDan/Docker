<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vanzari extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vanzari_model');
    }

    public function index()
    {
        $this->load->view('vanzari'); // Numele fișierului din directorul views
    }

    public function obtineDateVanzari()
    {
        $dataVanzari = $this->Vanzari_model->obtineDateVanzari();

        $this->output->set_content_type('application/json');
        echo json_encode($dataVanzari);
    }
}
?>
