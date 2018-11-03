<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_Masuk extends Rsbt 
{
	public $query;
	public function __construct()
	{
		parent::__construct();
		$this->query = $this->input->get('query');
		// $this->load->js(base_url('assets/public/app/bobot.js'));
		// $this->load->js(base_url('assets/public/app/tabel.js'));
		$this->load->model('Mtiketmasuk');
		// $this->per_page = (!$this->input->get('per_page')) ? 20 : $this->input->get('per_page');
		// $this->page = $this->input->get('page');
		$this->query = $this->input->get('query');
	}

	public function index() 
	{
		$this->page_title->push('<i class="fa fa-envelope"></i> TIKET MASUK');

		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		$this->form_validation->set_rules('id_masuk', 'id_masuk', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		//$this->form_validation->set_rules('file', 'lampiran', 'trim|required');
		//$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');


		if ($this->form_validation->run() == TRUE)
		{
			$this->Mtiketmasuk->create1();

			redirect(current_url());
		}

		$this->data = array(
			'title' => "Tiket - Help Desk IT RS. Bhakti Timah", 
			'breadcrumb' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			'category' => $this->Mtiketmasuk->get_all(),
			'id_masuk' => $this->Mtiketmasuk->get_no_invoice(),
			'get' => $this->Mtiketmasuk->get_account($this->ADMIN),
			'data' => $this->Mtiketmasuk->join(),
		);

		$this->template->view('Test/Tiket_Masuk/Tiket_Masuk',$this->data);
	}

	public function get_no_invoice()
	{
		$this->Mtiketmasuk->get_no_invoice();
	}

	// public function create()
	// {
		
	// 	$this->template->view('Test/Tiket_Masuk/Tiket_Masuk', $this->data);
	// }
}
