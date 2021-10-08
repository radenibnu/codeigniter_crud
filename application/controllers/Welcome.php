<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
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
			redirect(site_url());
		}

		redirect(site_url());
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
			redirect(site_url());
		}
	}

	public function hapusdata($id = null){
		if (!isset($id)) show_404();

		if ($this->model_karyawan->hapus($id)){
			$this->session->set_flashdata('delete', 'Data berhasil dihapus');
			redirect(site_url());
		}

	}
}
