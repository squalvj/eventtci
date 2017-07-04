<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load library and url helper
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view("index");
	}

	public function proposal(){
		$this->load->helper('download');
		$name = 'regs.txt';
		$data = file_get_contents("./assets/pdf/reg.txt");
		//force_download($name, $data);
	 	redirect(base_url());
	}
}
