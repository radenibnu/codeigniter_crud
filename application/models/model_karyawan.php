<?php


class model_karyawan extends CI_Model{

	private $_table = 'data_karyawan';

	public $id;
	public $nip;
	public $nama;
	public $jenis_kelamin;
	public $jabatan;
	public $tanggal_aktif;
	public $tanggal_masuk;
	public $status;

	public function rules(){
		return [
			['field' => 'nip',
			'label' => 'NIP',
			'rules' => 'required'],

			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'jenis_kelamin',
			'label' => 'Jenis Kelamin',
			'rules' => 'required'],

			['field' => 'jabatan',
			'label' => 'Jabatan',
			'rules' => 'required'],

			['field' => 'tanggal_aktif',
			'label' => 'Tanggal Aktif',
			'rules' => 'required'],

			['field' => 'tanggal_masuk',
			'label' => 'Tanggal Masuk',
			'rules' => 'required'],
			
			['field' => 'status',
			'label' => 'Status',
			'rules' => 'required']
		];
	}
	
    function tampil_data(){
		return $this->db->get('data_karyawan');
    }
	
	function getdataById($id)
	{
		$query=$this->db->query("select * from data_karyawan where id='".$id."'");
		return $query->result();
	}

    function input_data(){
		$post = $this->input->post();
		$this->id = uniqid();
		$this->nip = $post['nip'];
		$this->nama = $post['nama'];
		$this->jenis_kelamin = $post['jenis_kelamin'];
		$this->jabatan = $post['jabatan'];
		$this->tanggal_aktif = $post['tanggal_aktif'];
		$this->tanggal_masuk = $post['tanggal_masuk'];
		$this->status = $post['status'];
        $this->db->insert($this->_table, $this);
    }

    function update_data()
    {
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nip = $post['nip'];
		$this->nama = $post['nama'];
		$this->jenis_kelamin = $post['jenis_kelamin'];
		$this->jabatan = $post['jabatan'];
		$this->tanggal_aktif = $post['tanggal_aktif'];
		$this->tanggal_masuk = $post['tanggal_masuk'];
		$this->status = $post['status'];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

	function hapus($id){
		return $this->db->delete($this->table, array('id' => $id));
	}

}