<?php
class AdaugaVanzare_model extends CI_Model {

    public function insertVanzare($data, $cantitate, $produs) {
        // Obține id-ul produsului
        $this->db->select('id');
        $this->db->where('nume', $produs);
        $query = $this->db->get('produs');
        $row = $query->row();

        if ($row) {
            $produs_id = $row->id;

            // Inserează datele în tabela 'vanzari'
            $insert_data = array(
                'data' => $data,
                'cantitate' => $cantitate,
                'produs_id' => $produs_id
            );

            $this->db->insert('vanzari', $insert_data);

            return "Data inserted successfully!";
        } else {
            return "Product not found.";
        }
    }

    public function deleteByDate($date) {
        $this->db->where('data', $date);
        $this->db->delete('vanzari');

        return "Records deleted successfully for date: " . $date;
    }
}
?>
