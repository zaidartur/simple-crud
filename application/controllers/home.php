<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
    }

    public function index()
    { 
        $data['content'] = "Home &middot; My Notes";
        $data['notepad'] = $this->crud->getAll();
        $this->load->view('header', $data);
        $this->load->view('view');
        $this->load->view('footer');
        //$this->add();
    }

    public function add()
    {
        $data['content'] = "Add &middot; My Notes";
		  $data['nomor'] = $this->crud->nomor_id();
        $this->load->view('header', $data);
        $this->load->view('add');
        $this->load->view('footer');
    }

    public function edit($id)
    {
        $data['content'] = "Edit &middot; My Notes";
        $data['note'] = $this->crud->getById($id);
        $this->load->view('header', $data);
        $this->load->view('edit');
        $this->load->view('footer');
    }

	 public function detail($id)
	 {
		  $data['content'] = "Detail &middot; My Notes";
        $data['note'] = $this->crud->getById($id);
        $this->load->view('header', $data);
        $this->load->view('detail');
        $this->load->view('footer');
	 }

    public function save()
    {
        $judul = $this->input->post('judul');
        $pengisi = $this->input->post('pengisi');
        $catatan = $this->input->post('catatan');
        $tanggal = $this->input->post('tanggal');

        if (empty($judul) || empty($pengisi) || empty($catatan) || empty($tanggal)) {
            $this->session->set_flashdata('error', 'Gagal menyimpan catatan "'.$judul.'" !');
            $this->add();
        } else {
				$a = microtime(true);
            $this->crud->save();
				$b = microtime(true);

				$c = round(($b-$a), 4);

            $this->session->set_flashdata('success', 'Catatan "'.$judul.'" berhasil disimpan dengan waktu '.$c.' detik.');
            redirect('home');
        }
    }

    public function update()
    {
        $id = $this->input->post('kode');
        $judul = $this->input->post('judul');
        $pengisi = $this->input->post('pengisi');
        $catatan = $this->input->post('catatan');
        $tanggal = $this->input->post('tanggal');
        
        if (empty($judul) || empty($pengisi) || empty($catatan) || empty($tanggal)) {
            $this->session->set_flashdata('error', 'Gagal menyimpan catatan "'.$id.'" !');
            $this->edit($id);
        } else {
            $a = microtime(true);
            $this->crud->update();
            $b = microtime(true);
            $c = round($b-$a, 4);

            $this->session->set_flashdata('updated', 'Catatan "'.$judul.'" berhasil diupdate dengan waktu '.$c.' detik.');
            redirect('home');
        }
    }

    public function delete($id)
    {
        if ($this->crud->delete($id)) {
            $this->session->set_flashdata('del', 'Berhasil dihapus!');
            redirect('home');
        }
    }
   

}