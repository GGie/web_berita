<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller {
	

	
	
	
	
	public function __construct() {
		parent::__construct();

		$this->load->model('Berita/Berita_model');
	}

	
	
	
	
	
	public function index()
    {
       $data['berita'] = $this->Berita_model->get_berita();

       echo $this->load->view('berita', $data);
  
    }

	
	
	
	
	
	public function posting()
    {
       echo $this->load->view('posting', $data);
  
    }

	
	
	
	
	
	public function posting_edit($id)
    {
		
		$berita = $this->Berita_model->get_id_berita($id);
		
		foreach ( $berita->result() as $detail ) {
			$data['id_berita']	= $detail->id_berita;
			$data['judul']		= $detail->judul;
			$data['kategori']	= $detail->kategori;
			$data['isi']		= $detail->isi;
		}
       echo $this->load->view('posting_edit', $data);
  
    }

	
	
	
	
	
	public function save()
    {
       $this->Berita_model->save_berita();
	   
	   redirect('/');
    }
	
	
	
	
	
	public function update_berita($id)
    {
       $this->Berita_model->update_berita($id);
	   
	   redirect('/');
    }

	
	
	
	
	
	public function deletex($id)
    {
       $this->Berita_model->delete_berita($id);
	   
	   redirect('/');
    }
	
}