<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari extends CI_Controller{
	private $conn;
	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if ($this->session->userdata('pencari') != "pencari") {
			redirect(base_url('index.php'));
		}

		// $this->load->helper('url');
		// $this->load->helper('form');
		// $this->load->library('form_validation');
		// $servername = "localhost";
		// $username = "root";
		// $password = "";
		// $db = "kost";
		// $this->conn = mysqli_connect($servername,$username, $password, $db);
	}

	public function index(){
		// if (empty($_SESSION['pencari'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_pencari FROM pencari WHERE id_pencari = '$_SESSION[id_pencari]';";
        //     $data['nama']   = $this->conn->query($sql);
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();

			// $sql      		= "SELECT * FROM kosan";
            // $data['result']   = $this->conn->query($sql);
			// $data['result'] = $this->M_All->get('kosan')->result();
		$data['result'] = $this->M_All->join('pemilik','kosan')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/dashboard', $data);
		$this->load->view('pencari/foot_pencari');
		// }
	}

	public function logout(){
		session_destroy();
		header("location: ".base_url());
	}

	public function pencarian(){
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari');
		$this->load->view('pencari/pencarian');
		$this->load->view('pencari/footer_pencari');
	}



}
