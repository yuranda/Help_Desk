<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_Selesai extends Rsbt {

	public function index() 
	{
		$this->page_title->push('<i class="fa fa-envelope"></i> TIKET Selesai');

		$this->data = array(
			'title' => "Tiket - Help Desk IT RS. Bhakti Timah", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);
		$this->template->view('Test/Tiket_Selesai/Tiket_Selesai',$this->data);
	}
}
