<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends Rsbt {

	public function index() 
	{
		$this->page_title->push('Tiket Masuk');

		$this->data = array(
			'title' => "Tiket - Help Desk IT RS. Bhakti Timah", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);
		$this->template->view('Test/Tiket/Tiket',$this->data);
	}
}
