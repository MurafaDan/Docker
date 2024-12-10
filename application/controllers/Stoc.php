<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoc extends CI_Controller {

    public function index() {
        $this->load->view('stoc');
    }
    public function afiseazaStoc() {
        $this->load->model('Stoc_model');
        $data['stoc'] = $this->Stoc_model->get_stoc_data();
        echo json_encode($data['stoc']);
    }
}
