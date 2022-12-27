<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Templates');
	}

	public function index()
	{
		$this->templates->admin('admin/login');
	}
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public function editLaporan()
	{
		$this->load->view('admin/editLaporan');
	}
}