<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Templates');
		$this->load->model("Hosting_model");
		$this->load->model("Domain_model");

		$this->load->library("session");
	}

	public function index()
	{
		$data["data_hosting"] = $this->Hosting_model->getAll();
		$data["data_domain"] = $this->Domain_model->getAll();

		$this->templates->home('admin/dashboard', $data);
	}


	// CRUD Hosting
	public function createHosting() {
		$this->templates->home('admin/hosting/create');
	}

	public function addHosting() {

		$hosting = $this->Hosting_model;
		$hosting->save(); 

		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil diunggah.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');

		redirect("admin/dashboard");
	}

	public function edit($id_hosting) {

		$hosting = $this->Hosting_model;
		$data["data_byId"] = $hosting->getById($id_hosting);

		$this->templates->home('admin/hosting/edit', $data);
	}

	public function updateHosting() {
		$hosting = $this->Hosting_model;
		$hosting->update();

		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil diubah.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
	
		redirect("admin/dashboard");
	}

	public function delete($id_hosting) {
		$hosting = $this->Hosting_model;
		$hosting->delete($id_hosting);

		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil dihapus.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');

		redirect("admin/dashboard");
	}


	// CRUD Domain
	public function createDomain() {
		$this->templates->home('admin/domain/create');
	}

	public function addDomain() {

		$domain = $this->Domain_model;
		$domain->save(); 

		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil diunggah.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');

		redirect("admin/dashboard");
	}

	public function editDomain($id_domain) {

		$domain = $this->Domain_model;
		$data["data_byId"] = $domain->getById($id_domain);

		$this->templates->home('admin/domain/edit', $data);
	}

	public function updateDomain() {
		$domain = $this->Domain_model;
		$domain->update();

		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil diunggah.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');
	
		redirect("admin/dashboard");
	}

	public function deleteDomain($id_domain) {
		$hosting = $this->Domain_model;
		$hosting->delete($id_domain);
		
		$this->session->set_flashdata('message', '
			<div class="alert alert-success fade show position-fixed top-3 poppins" role="alert">
				<strong>Success!</strong> Data berhasil dihapus.
				<button type="button" class="btn-close ml-auto" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		');

		redirect("admin/dashboard");
	}
}