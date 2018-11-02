<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_Masuk extends Rsbt {

	public function index() 
	{
		$this->page_title->push('<i class="fa fa-envelope"></i> TIKET MASUK');

		$this->data = array(
			'title' => "Tiket - Help Desk IT RS. Bhakti Timah", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);
		$this->template->view('Test/Tiket_Masuk/Tiket_Masuk',$this->data);
	}
}
