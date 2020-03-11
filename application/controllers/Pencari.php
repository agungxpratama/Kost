<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari extends CI_Controller{
	private $conn;
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "kost";
		$this->conn = mysqli_connect($servername,$username, $password, $db);
	}

	public function index(){
		if (empty($_SESSION['pencari'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pencari FROM pencari WHERE id_pencari = '$_SESSION[id_pencari]';";
            $data['nama']   = $this->conn->query($sql);
			$sql      		= "SELECT * FROM kosan";
            $data['result']   = $this->conn->query($sql);
			$this->load->view('pencari/sidebar_pencari');
			$this->load->view('pencari/header_pencari', $data);
			$this->load->view('pencari/dashboard', $data);
			$this->load->view('pencari/foot_pencari');
		}
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
