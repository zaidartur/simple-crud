<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

    private $_note = "notepad";


    public function getAll()
    {
        return $this->db->get($this->_note)->result();
    }

    public function getbyId($id)
    {
        return $this->db->get_where($this->_note, array('kode' => $id))->row();
    }

    public function save()
    {
        $data = array('kode' => $this->input->post('kode'),
                'judul' => $this->input->post('judul'),
                'pengisi' => $this->input->post('pengisi'),
                'catatan' => $this->input->post('catatan'),
                'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal')))
        );
        
        $this->db->insert($this->_note, $data);
    }

    public function update()
    {
        $data = array('judul' => $this->input->post('judul'),
                'pengisi' => $this->input->post('pengisi'),
                'catatan' => $this->input->post('catatan'),
                'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal')))
        );
        
        $this->db->update($this->_note, $data, array('kode' => $this->input->post('kode')));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_note, array('kode' =>$id));
    }

    public function nomor_id()
    {  
        $this->db->select('RIGHT(notepad.kode,4) as kode', FALSE);
		  $this->db->order_by('kode','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('notepad');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "KJ".$kodemax;   
		  return $kodejadi;  
    }


}