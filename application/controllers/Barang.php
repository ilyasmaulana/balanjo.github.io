<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model', 'bm');
	}

	// public function index()
	// {
	// 	$data['title'] = "Barang";
	// 	$data['barang'] = $this->bm->getBarang();

	// 	$this->load->view('layout/header');
	// 	$this->load->view('barang/index', $data);
	// 	$this->load->view('layout/footer');
	// }

	public function index()
	{
		$data['title'] = "Barang";
		$data['barang'] = $this->bm->getBarang();

		$this->form_validation->set_rules('barang', 'NISN', 'required');
		$this->form_validation->set_rules('modal', 'Nama Barang', 'required|trim');
		$this->form_validation->set_rules('jual', 'Alamat', 'required|trim');

		if ($this->form_validation->run() == false) {

			$this->load->view('layout/header', $data);
			$this->load->view('barang/index', $data);
			$this->load->view('layout/footer');
		} else {
			$this->bm->insertBarang();

			$this->session->set_flashdata('barang_message', '<div class="alert alert-success" role="alert">
			Data berhasil ditambahkan!
			</div>');
			redirect('barang');
		}
	}

	public function deleteBarang($id)
	{
		$this->db->delete('barang', ['id' => $id]);
		$this->session->set_flashdata('barang_message', '<div class="alert alert-danger" role="alert">
			Data berhasil dihapus!
			</div>');
		redirect('barang');
	}
}
