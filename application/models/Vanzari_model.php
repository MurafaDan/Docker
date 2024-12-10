
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vanzari_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function obtineDateVanzari()
    {
        $query = "SELECT
            p.nume AS Nume,
            s.cantitate_stoc AS Cantitate_Stoc,
            r.cheltuieli_pe_cumparare AS Cheltuieli,
            r.vanzari AS Vanzari,
            r.venit AS Venit
          FROM
            riscuri r
          JOIN
            produs p ON r.produs_id = p.id
          JOIN
            stocmagazin s ON r.stoc_id = s.id";

        $result = $this->db->query($query);

        if ($result) {
            return $result->result_array();
        } else {
            return array('error' => 'Eroare la interogarea bazei de date: ' . $this->db->error());
        }
    }
}
?>