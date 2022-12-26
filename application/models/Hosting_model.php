<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hosting_model extends CI_Model {
    private $table = 'hosting';

    public function getById($id_hosting) {
        $data = $this->db->query("SELECT * FROM hosting WHERE id_hosting='$id_hosting'");
        return $data->result();
    }

    public function getAll() {
        $this->db->from($this->table);
        $this->db->order_by("id_hosting", "asc");
        $this->db->select('id_hosting, nama_hosting, has_cpanel, has_ssl, has_subdomain, has_storage, num_database, harga');
        $query = $this->db->get();
        return $query->result();
    }

    public function save() {

        $data = array(
            "nama_hosting" => $this->input->post('nama_hosting'),
            "has_cpanel" => $this->input->post('has_cpanel'),
            "has_ssl" => $this->input->post('has_ssl'),
            "has_subdomain" => $this->input->post('has_subdomain'),
            "has_storage" => $this->input->post('has_storage'),
            "num_database" => $this->input->post('num_database'),
            "harga" => $this->input->post('harga'),
        );
        $this->db->insert($this->table, $data);
    }

    public function update() {
        $data = array(
            "nama_hosting" => $this->input->post('nama_hosting'),
            "has_cpanel" => $this->input->post('has_cpanel'),
            "has_ssl" => $this->input->post('has_ssl'),
            "has_subdomain" => $this->input->post('has_subdomain'),
            "has_storage" => $this->input->post('has_storage'),
            "num_database" => $this->input->post('num_database'),
            "harga" => $this->input->post('harga'),
        );
        $this->db->where('id_hosting', $this->input->post('id_hosting'));
        $this->db->update('hosting', $data);
    }

    public function delete($id_hosting) {
        $this->db->where('id_hosting', $id_hosting);
        $this->db->delete('hosting');
    }
}