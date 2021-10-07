<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_karyawan');
		$this->load->library('form_validation');
		$this->load->helper('url');
	} 


	public function index()
	{
		$data['karyawan'] = $this->model_karyawan->tampil_data()->result();
		$this->load->view('data_karyawan', $data);
	}

	public function tambah(){
		$this->load->view('tambah_data');
	}

	public function tambah_aksi(){
		$karyawan = $this->model_karyawan;
		$validation = $this->form_validation;
		$validation->set_rules($karyawan->rules());

		if ($validation->run()){
			$karyawan->input_data();
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect(site_url('welcome/tambah'));
		}

		redirect(site_url('welcome/tambah'));
	}

	public function edit($id = null){
		if(!isset($id)) redirect('welcome/tambah');

		$data['karyawan'] = $this->model_karyawan->getdataById($id);
		if (!$data['karyawan']) show_404();
		$this->load->view('edit_karyawan', $data);
	}

	public function update(){
		$karyawan = $this->model_karyawan;
		$validation = $this->form_validation;
		$validation->set_rules($karyawan->rules());

		if ($validation->run()){
			$karyawan->update_data();
			$this->session->set_flashdata('success', 'Data berhasil diperbaharui');
			redirect(site_url('welcome'));
		}

	
	}

	public function hapusdata($id = null){
		if (!isset($id)) show_404();

		if ($this->model_karyawan->hapus($id)){
			$this->session->set_flashdata('delete', 'Data berhasil dihapus');
			redirect(site_url('welcome'));
		}

	}
}
