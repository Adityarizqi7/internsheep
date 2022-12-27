<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model("Pengajuan_model");
		$this->load->library('Templates');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->templates->admin('admin/login');
		} else {
			//validation success
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['username' => $username])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				// password_verify($password, $user['password'])
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                    Correct Password! </div>');
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger " role="alert">
                    Incorrect Password! </div>');
				redirect('admin');
			}
		}
	}

	public function dashboard()
	{
		$queryallAjuan = $this->Pengajuan_model->getAll();
		$DATA = array('queryallAjuan' => $queryallAjuan);

		$this->load->view('admin/dashboard', $DATA);
	}

	public function edit($id)
	{
		$querySepesificLaporan = $this->Pengajuan_model->getSpesificLaporan($id);
		$DATA = array('querySpesificLaporan' => $querySepesificLaporan);
		$this->load->view('admin/editLaporan', $DATA);
	}

	public function editLaporan()
	{
		$id = $this->input->post('id_pengajuan');
		$npm1 = $this->input->post('npm1');
		$name1 = $this->input->post('name1');
		$email1 = $this->input->post('email1');
		$npm2 = $this->input->post('npm2');
		$name2 = $this->input->post('name2');
		$email2 = $this->input->post('email2');
		$npm3 = $this->input->post('npm3');
		$name3 = $this->input->post('name3');
		$email3 = $this->input->post('email3');
		$perusahaan = $this->input->post('perusahaan');

		$ArrUpdate = array(
			'npm1' => $npm1,
			'name1' => $name1,
			'email1' => $email1,
			'npm2' => $npm2,
			'name2' => $name2,
			'email2' => $email2,
			'npm3' => $npm3,
			'name3' => $name3,
			'email3' => $email3,
			'perusahaan' => $perusahaan
		);

		$this->Pengajuan_model->update($npm1, $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-success text-center col-md-8 offset-md-2" role="alert">
                    Data berhasil diubah! </div>');
		redirect('/dashboard');
	}

	public function deleteLaporan($id_pengajuan)
	{
		$this->Pengajuan_model->delete($id_pengajuan);
		$this->session->set_flashdata('message', '<div class="alert alert-danger text-center col-md-8 offset-md-2" role="alert">
                    Data berhasil dihapus! </div>');
		redirect('/dashboard');
	}
}
