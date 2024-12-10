<?php
class AdaugaVanzare extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdaugaVanzare_model');
    }

    public function index() {
        $this->load->view('adaugavanzare');
    }

    public function insertVanzare() {
        $data = $this->input->post('data');
        $cantitate = $this->input->post('cantitate');
        $produs = $this->input->post('produs');

        $result = $this->AdaugaVanzare_model->insertVanzare($data, $cantitate, $produs);

        $this->output->set_content_type('application/json');
        echo json_encode($result);
    }

    public function deleteByDate() {
        $dateToDelete = $this->input->post('date');
        $result = $this->AdaugaVanzare_model->deleteByDate($dateToDelete);

        $this->output->set_content_type('application/json');
        echo json_encode($result);
    }
}
?>
