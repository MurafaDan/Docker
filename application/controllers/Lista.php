<?php
class Lista extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lista_model');
    }

    public function index() {
        $this->load->view('lista');
    }

    public function obtineDateLista() {
        $dataLista = $this->Lista_model->obtineDateLista();

        $this->output->set_content_type('application/json');
        echo json_encode($dataLista);
    }
}
?>