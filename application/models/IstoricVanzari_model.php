<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IstoricVanzari_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function obtineDateIstoricVanzari() {
        $query = $this->db->select('v.data, v.cantitate, v.pret_total AS "Pret Total", g.nume AS "Nume Grup", p.nume AS "Nume Produs"')
                          ->from('vanzari v')
                          ->join('produs p', 'v.produs_id = p.id')
                          ->join('grupe g', 'p.grup_id = g.id')
                          ->get();

        return $query->result_array();
    }
}
?>
