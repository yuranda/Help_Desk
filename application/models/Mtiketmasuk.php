<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtiketmasuk extends Rsbt_Model 
{
	public function __construct()

	{
		parent::__construct();
	}

	public function get_all($limit = 20, $offset = 0, $type = 'result')
	{
		if($this->input->get('query') != '')
			$this->db->like('category.id_kategori', $this->input->get('query'))
						->or_like('category.isi_kategori', $this->input->get('query'));

		if($type == 'result')
		{
			return $this->db->get('category', $limit, $offset)->result();
		} else {
			return $this->db->get('category')->num_rows();
		}
	}

	public function get_no_invoice()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_masuk,1)) AS kd_max FROM t_masuk ");

		//return($q->row());

	    $kd = "";
	    if($q->num_rows()>0)
			{
			    foreach($q->result() as $k )
				{
			        $urut = ((int)$k->kd_max)+1;
			        $kd = sprintf("US %04s", $urut);
			    }
			    }else{
			        $kd = "0001";
		    	}
		    date_default_timezone_set('Asia/Jakarta');
		    
		    return $kd;
	}

	public function get_account($param = 0)
    {
      return $this->db->get_where('users', array('id_user' => $param))->row();
    }

   	public function kate($param = 0)
    {
      return $this->db->get_where('category', array('id_kategori' => $param))->row();
    }

    public function join($param = 0)
	{
		// $this->db->select('*');
		// $this->db->from('t_masuk');
		// $this->db->join('users', '.t_masuk.id_masuk = users.id_user');
		// $this->db->join('category','.category.id_kategori = t_masuk.id_masuk');
		// $this->db->where('t_masuk.id_masuk', $param);
		// return $this->db->get()->result();
		return $this->db->get('t_masuk')->result();
	}

   public function create1()
	{

		$config['upload_path'] = './assets/images/documen/';
		$config['allowed_types'] = 'gif|jpg|JPG|png|pdf|PDF|jpeg|JPEG';
		$config['max_size']  = '5120';
		$config['max_width']  = '4000';
		$config['max_height']  = '3000';
		
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('foto')) 
		{
			$foto = $this->upload->file_name;
		} else {
			$foto = 'No Images';
		}

		$tgl=date('Y-m-d');

		$masuk = array(
			'id_masuk'=> $this->input->post('id_masuk'),
			'id_user'=> $this->input->post('id_user'),
			'id_kategori' => $this->input->post('id_kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
			'tanggal' => $tgl,
			'foto' => $foto,
			
			);

		$this->db->insert('t_masuk', $masuk);

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Telah Terkirim.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal Dikirim.', 
				array('type' => 'warning','icon' => 'times')
			);
		}
	} 
}

/* End of file Mtiketmasuk.php */
/* Location: ./application/models/Mtiketmasuk.php */