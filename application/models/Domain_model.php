<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Domain_model extends CI_Model {
    private $table = 'domain';

    public function getById($id_domain) {
        $data = $this->db->query("SELECT * FROM domain WHERE id_domain='$id_domain'");
        return $data->result();
    }

    public function getAll() {
        $this->db->from($this->table);
        $this->db->order_by("id_domain", "asc");
        $this->db->select('id_domain, nama_domain');
        $query = $this->db->get();
        return $query->result();
    }

    public function search($keyword) {
        if(!$keyword){
            return null;
        }
        $this->db->like('nama_domain', $keyword);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function save() {

        $data = array(
            "nama_domain" => $this->input->post('nama_domain'),
        );
        $this->db->insert($this->table, $data);
    }

    public function update() {
        $data = array(
            "nama_domain" => $this->input->post('nama_domain'),
        );
        $this->db->where('id_domain', $this->input->post('id_domain'));
        $this->db->update('domain', $data);
    }

    public function delete($id_domain) {
        $this->db->where('id_domain', $id_domain);
        $this->db->delete('domain');
    }
}