<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function get_berita()
	{
		return $this->db->query("SELECT *,
					(SELECT kategori FROM kategori_berita WHERE id_kategori=berita.kategori) AS kat
					FROM berita");
	}
	
	public function get_id_berita($id)
	{
		return $this->db->query("SELECT * FROM berita WHERE id_berita='" . $id ."'");
	}
	
	
	public function save_berita()
	{
		return $this->db->insert('berita',
				array(
				'judul'			=> $this->input->post('judul',true),
				'kategori'		=> $this->input->post('kategori',true),
				'isi'			=> "REPUBLIKA.CO.ID, " . $this->input->post('isi',true),
				'aktif' 		=> 1,
				'input_by'			=> $this->session->userdata('user_id'),
				'input_date' 		=> date('Y-m-d H:i:s')
		));
	}
	
	public function update_berita($id)
	{
		$this->db->where('id_berita', $id);
		return $this->db->update('berita',
			array(
				'judul'			=> $this->input->post('judul',true),
				'kategori'		=> $this->input->post('kategori',true),
				'isi'			=> $this->input->post('isi',true),
				'aktif' 		=> 1,
				'update_by'		=> $this->session->userdata('user_id'),
				'update_date'	=> date('Y-m-d H:i:s')
		));
	}

	public function delete_berita($id)
	{
		return $this->db->delete('berita', array('id_berita' => $id)); 
	}

	
}

/* End of file Berita_model.php */
/* Location: ./application/controllers/Berita_model.php */