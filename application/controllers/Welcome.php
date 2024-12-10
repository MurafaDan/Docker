<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $this->load->database();

        // Exemplu de query pentru a obține date din tabelele "stocmagazin", "produs" și "riscuri"
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

        // Realizăm query-ul
        $result = $this->db->query($query);

        // Verificăm dacă query-ul a fost executat cu succes
        if ($result) {
            // Obținem rezultatele query-ului
            $data['query_result'] = $result->result();

            // Încărcăm view-ul cu datele obținute
            $this->load->view('welcome_message', $data);
        } else {
            // Afișăm eroarea în cazul în care query-ul a eșuat
            echo "Eroare la interogare: " . $this->db->error();
        }
    }
}
?>
