<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Load library and url helper
		$this->load->helper('url');
		$this->load->library('session');
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
			$from = empty($this->input->post('proposal')) ? 'Proposal' : $this->input->post('proposal');
			$name = empty($this->input->post('nama')) ? 'default' : $this->input->post('nama');
			$telp = empty($this->input->post('telp')) ? 0 : $this->input->post('telp');
			$email = empty($this->input->post('email')) ?  'default' : $this->input->post('email');
			$date = empty($this->input->post('date')) ?  'default' : $this->input->post('date');
			$city = empty($this->input->post('city')) ?  'default' : $this->input->post('city');
			$code = $this->_check();
			$this->load->database();
			$data = array(
		        'nama' => $name,
		        'email' => $email,
		        'telp' => $telp,
		        'from' => $from,
		        'date' => $date,
		        'city' => $city,
		        'kode' => $code
			);
			// $this->db->insert('proposal', $data);
			// print_r($this->db->insert('proposal', $data));
			if ($this->db->insert('user', $data) == 1){
				//$this->load->view('redirect-download');
				if ($this->_sendEmail($email, $code)){
					$this->load->view('berhasil');
				}
				else{
					//echo "Terjadi Kesalahan mohon input ulang";
					$this->load->view('gagal');
				}
			}
			else
				redirect(base_url());
		}
		
	}

	private function _delete($param){
		$this->load->database();
		$this->db->where('kode', strval($param));
		$this->db->delete('user');
	}

	private function _check(){
		$rand = mt_rand(1,50000);
		$code = str_pad($rand, 5, '0', STR_PAD_LEFT);
		$this->load->database();
		$sql = $this->db->select('kode')->from('user')->where('kode',$code)->get();
		while ($sql->num_rows() != 0){
			$this->_check();
		}
		return $code;
	}

	private function _sendEmail($email, $kode){
		$config = Array(
			'protocol' => 'smtp',
			// 'smtp_host' => 'smtp.topcareer.id',
			'smtp_host' => 'smtp.permataindonesia.com',
			'smtp_port' => '587',
			// 'smtp_user' => 'support@topcareer.id',
			// 'smtp_pass' => 'topcareer12345', 
			'smtp_user' => 'tes@permataindonesia.com',
			'smtp_pass' => 'permata123456789', 
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		$data['kode'] = $kode;
		$message = $this->load->view('email',$data,TRUE);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('support@topcareer.id'); 
		$this->email->to($email);
		$this->email->subject('Kode Registrasi');
		$this->email->message($message);
		if($this->email->send())
		{
			return true;
		}
		else
		{
			//show_error($this->email->print_debugger());
			$this->_delete($kode);
			return false;
		}
		
	}

	public function admin(){
		$this->load->database();
		if (!empty($this->session->userdata('admin'))){
			$this->adminDashboard();
		}
		else
			$this->load->view('login-admin');
	}

	public function admin_login(){
		$username_ = $this->input->post('username');
		$pass_ = $this->input->post('password');
		$user = "adminTci";
		$pass = "topcareeR12345";
		if($username_ == $user && $pass_ == $pass){
			$this->session->set_userdata('admin', 'ada');
			redirect('dashboard');
		}
		else{
			$this->session->set_flashdata('gagal', 'Password / Username salah');
			redirect("/admin");
		}
		//$this->load->view("gentelella/production/index");
	}

	public function adminDashboard(){
		$this->load->database();
		if (!empty($this->session->userdata('admin'))){

			$query = $this->db->get('user');
			$data['user'] = $query->result();
			$data['user_count'] = $query->num_rows();
			$query = $this->db->get('proposal');
			$data['perusahaan_count'] = $query->num_rows();
			$data['perusahaan'] = $query->result();

			$this->load->view("gentelella/production/index", $data);
		}
		else{
			redirect('/');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/admin');
	}
}
