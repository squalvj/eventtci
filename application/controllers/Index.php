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

	public function downloadPage(){
		$this->load->helper('download');
		$name = 'regs.txt';
		$data = file_get_contents("./assets/pdf/reg.txt");
		force_download($name, $data);
	 	redirect(base_url());
	}

	public function proposal(){
		if (empty($this->input->post('telp')) && empty($this->input->post('nama')) && empty($this->input->post('email'))){
			redirect(base_url());
		}
		else{
			$proposal = empty($this->input->post('proposal')) ? 'Proposal' : $this->input->post('proposal');
			$name = empty($this->input->post('nama')) ? 'default' : $this->input->post('nama');
			$telp = empty($this->input->post('telp')) ? 0 : $this->input->post('telp');
			$email = empty($this->input->post('email')) ?  'default' : $this->input->post('email');
			$this->load->database();
			$data = array(
		        'nama' => $name,
		        'email' => $email,
		        'telp' => $telp,
		        'from' => $proposal
			);
			// $this->db->insert('proposal', $data);
			// print_r($this->db->insert('proposal', $data));
			if ($this->db->insert('proposal', $data) == 1){
				$this->load->view('redirect-download');
			}
			else
				redirect(base_url());
		}
		
	}

	public function user(){
		if (empty($this->input->post('telp')) && empty($this->input->post('nama')) && empty($this->input->post('email')) && empty($this->input->post('date')) && empty($this->input->post('city'))){
			redirect(base_url());
		}
		else{
			$proposal = empty($this->input->post('proposal')) ? 'Proposal' : $this->input->post('proposal');
			$name = empty($this->input->post('nama')) ? 'default' : $this->input->post('nama');
			$telp = empty($this->input->post('telp')) ? 0 : $this->input->post('telp');
			$email = empty($this->input->post('email')) ?  'default' : $this->input->post('email');
			$this->load->database();
			$data = array(
		        'nama' => $name,
		        'email' => $email,
		        'telp' => $telp,
		        'from' => $proposal
			);
			// $this->db->insert('proposal', $data);
			// print_r($this->db->insert('proposal', $data));
			if ($this->db->insert('proposal', $data) == 1){
				$this->load->view('redirect-download');
			}
			else
				redirect(base_url());
		}
		
	}
}
