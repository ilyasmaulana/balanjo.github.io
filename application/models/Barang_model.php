<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
  public function getBarang()
  {
    return $this->db->get('barang')->result_array();
  }

  public function insertBarang()
  {
    $data = [
      'barang' => $this->input->post('barang', true),
      'qty' => $this->input->post('qty'),
      'modal' => $this->input->post('modal'),
      'jual' => $this->input->post('jual')
    ];
    $this->db->insert('barang', $data);
  }

}
