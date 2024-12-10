<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function obtineDateLista()
    {
        $query = "SELECT
            p.nume AS 'Nume Produs',
            p.pret_vanzare AS 'Pret de Vanzare',
            p.termen_valabilitate AS 'Termen de Valabilitate',
            g.nume AS 'Tip Grup'
          FROM
            produs p
          JOIN
            grupe g ON p.grup_id = g.id";

        $result = $this->db->query($query);

        if ($result) {
            return $result->result_array();
        } else {
            return array('error' => 'Eroare la interogarea bazei de date: ' . $this->db->error());
        }
    }
}
?>
