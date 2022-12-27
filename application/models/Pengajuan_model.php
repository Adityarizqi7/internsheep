<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    private $table = 'pengajuan';

    public function getById($id_pengajuan)
    {
        $data = $this->db->query("SELECT * FROM pengajuan WHERE id_pengajuan='$id_pengajuan'");
        return $data->result();
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_pengajuan", "asc");
        $this->db->select('id_pengajuan, npm1, name1, email1, npm2, name2, email2, npm3, name3, email3, perusahaan');
        $query = $this->db->get();
        return $query->result();
    }

    public function search($keyword)
    {
        if (!$keyword) {
            return null;
        }
        $this->db->like('npm1', $keyword);
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    function getSpesificLaporan($id)
    {
        $this->db->where('npm1', $id);
        $query = $this->db->get('pengajuan');
        return $query->row();
    }

    public function save()
    {

        $data = array(
            "npm1" => $this->input->post('npm1'),
            "name1" => $this->input->post('name1'),
            "email1" => $this->input->post('email1'),
            "npm2" => $this->input->post('npm2'),
            "name2" => $this->input->post('name2'),
            "email2" => $this->input->post('email2'),
            "npm3" => $this->input->post('npm3'),
            "name3" => $this->input->post('name3'),
            "email3" => $this->input->post('email3'),
            "perusahaan" => $this->input->post('perusahaan'),
        );
        $this->db->insert($this->table, $data);
    }

    // public function update()
    // {

    //     $data = array(
    //         "npm1" => $this->input->post('npm1'),
    //         "name1" => $this->input->post('name1'),
    //         "email1" => $this->input->post('email1'),
    //         "npm2" => $this->input->post('npm2'),
    //         "name2" => $this->input->post('name2'),
    //         "email2" => $this->input->post('email2'),
    //         "npm3" => $this->input->post('npm3'),
    //         "name3" => $this->input->post('name3'),
    //         "email3" => $this->input->post('email3'),
    //         "perusahaan" => $this->input->post('perusahaan'),
    //     );
    //     $this->db->where('id_pengajuan', $this->input->post('id_pengajuan'));
    //     $this->db->update('pengajuan', $data);
    // }

    function update($id, $data)
    {
        $this->db->where('npm1', $id);
        $this->db->update('pengajuan', $data);
    }

    public function delete($id_pengajuan)
    {
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->delete('pengajuan');
    }
}
