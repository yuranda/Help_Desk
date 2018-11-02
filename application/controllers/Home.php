<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Rsbt {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('mjson_location');
	
	}

	public function index() 
	{

		$this->page_title->push('Home', 'Selamat datang di Help Desk IT RS. Bhakti Timah');

		$this->data = array(
			'title' => "Home - Help Desk IT RS. Bhakti Timah", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Test/Home',$this->data);
	}
}
