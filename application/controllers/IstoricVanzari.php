<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IstoricVanzari extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('IstoricVanzari_model');
    }

    public function index() {
        $this->load->view('istoricvanzari');
    }

    public function obtineDateIstoricVanzari() {
        $dataIstoricVanzari = $this->IstoricVanzari_model->obtineDateIstoricVanzari();

        $this->output->set_content_type('application/json');
        echo json_encode($dataIstoricVanzari);
    }
}
?>
