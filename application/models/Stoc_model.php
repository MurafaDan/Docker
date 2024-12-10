<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoc_model extends CI_Model {

    public function get_stoc_data() {
        $query = "
        SELECT
            s.cantitate_stoc AS STOC,
            s.data_procurarii,
            p.nume,
            r.vanzari AS Vanzari
        FROM
            stocmagazin s
        JOIN
            produs p ON s.id = p.id
        JOIN
            riscuri r ON p.id = r.produs_id
        ";

        $result = $this->db->query($query);

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}
