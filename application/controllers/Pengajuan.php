<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pengajuan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $queryallAjuan = $this->Pengajuan_model->getAll();
        $DATA = array('queryallAjuan' => $queryallAjuan);
        $this->templates->display('dashboard', $DATA);
    }

    public function add()
    {

        $hosting = $this->Pengajuan_model;
        $hosting->save();

        $this->session->set_flashdata('message', '
			<div class="alert alert-success col-md-4 offset-md-4 poppins text-center" role="alert">
				<strong>Success!</strong> Data ajuan berhasil diunggah.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');

        redirect("/");
    }

    public function searchnpm()
    {
        $data['keyword'] = $this->input->get('keyword');
        $this->load->model('Pengajuan_model');

        $data['search_result'] = $this->article_model->search($data['keyword']);

        $this->load->view('cek-laporan', $data);
    }

    // public function index()
    // {
    //     $data["pengajuan"] = $this->product_model->getAll();
    //     $this->load->view("", $data);
    // }

    // public function add()
    // {
    //     $pengajuan = $this->Pengajuan_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($pengajuan->rules());

    //     if ($validation->run()) {
    //         $pengajuan->save();
    //         $this->session->set_flashdata('success', 'Pengajuan berhasil disimpan');
    //     }

    //     $this->load->view("student/index");
    // }
}
