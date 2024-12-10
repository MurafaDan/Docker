<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function index()
    {
        $this->load->view('chart');
    }
    public function afiseazaGrafic()
{
    $this->load->view('chart');
}
public function obtineDateGrafic()
{
    $query = $this->db->query("SELECT SUM(cheltuieli_pe_cumparare) AS total_cheltuieli, SUM(vanzari) AS total_vanzari FROM riscuri");
    
    if ($query) {
        $data = $query->row_array();

        $this->output->set_content_type('application/json');
        echo json_encode($data);
    } else {
        $this->output->set_status_header(500);
        echo json_encode(array('error' => 'Eroare la interogarea bazei de date: ' . $this->db->error()));
    }
}

}
