<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Pengajuan_model");
		$this->load->library('Templates');
	}

	public function index()
	{
		$this->templates->student('student/index');
	}

	public function cekLaporan()
	{
		$this->templates->student('student/cekLaporan');
	}

	public function pengajuan()
	{
		$this->templates->student('student/pengajuan');
	}
}
