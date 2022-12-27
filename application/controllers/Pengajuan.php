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
        $this->load->model('SearchModel');
        $keyword = $this->input->get('keyword');
        $data = $this->SearchModel->ambil_data($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data
        );
        $this->load->view('cek-laporan', $data);

        // $data['keyword'] = $this->input->get('keyword');
        // $this->load->model('Pengajuan_model');

        // $data['search_result'] = $this->article_model->search($data['keyword']);

        // $this->load->view('cek-laporan', $data);
    }
}
