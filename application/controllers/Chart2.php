<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart2 extends CI_Controller {

    public function index()
    {
        $this->load->view('chart2');
    }
    public function afiseazaGrafic()
{
    $this->load->view('chart2');
}
public function obtineDateGrafic()
{
    $query = $this->db->query("SELECT data, SUM(pret_total) AS total_pret FROM vanzari GROUP BY data ORDER BY data");
    
    if ($query) {
        $data = $query->result_array();

        $this->output->set_content_type('application/json');
        echo json_encode($data);
    } else {
        $this->output->set_status_header(500);
        echo json_encode(array('error' => 'Eroare la interogarea bazei de date: ' . $this->db->error()));
    }
}


}
