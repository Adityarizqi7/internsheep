<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pengajuan_model");
        $this->load->library('form_validation');
        $this->load->library('Templates');
    }

    public function add()
    {
        $pengajuan = $this->Pengajuan_model;
        $pengajuan->save();

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
        $this->templates->student('student/cekLaporan', $data);
    }

    // public function do_upload()
    // {
    //     $config['upload_path']          = base_url().'uploads/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;

    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);

    //     if (!$this->upload->do_upload('files')) {
    //         $error = array('error' => $this->upload->display_errors());

    //         $this->templates->student('student/pengajuan', $error);
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());

    //         // $this->load->view('upload_success', $data);
    //         $pengajuan = $this->Pengajuan_model;
    //         $pengajuan->save();
    
    //         $this->session->set_flashdata('message', '
    //             <div class="alert alert-success col-md-4 offset-md-4 poppins text-center" role="alert">
    //                 <strong>Success!</strong> Data ajuan berhasil diunggah.
    //                 <button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>
    //         ');
    
    //         redirect("/");
    //     }

    // }
}
