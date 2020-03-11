<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	// private $conn;
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
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/foot_admin');
		}
	}

	public function logout(){
		session_destroy();
		header("location: ".base_url());
	}

	public function data_penghuni(){
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/data_penghuni');
			$this->load->view('admin/foot_admin');
		}
	}

	public function data_kos(){
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$sql="SELECT * FROM kosan";
			$data['result']=$this->conn->query($sql);
			$this->load->view('admin/sidebar_admin',$data);
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/data_kos');
			$this->load->view('admin/foot_admin');
		}
	}

	public function data_pemilik(){
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/data_pemilik');
			$this->load->view('admin/foot_admin');
		}
	}

	public function transaksi(){
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/transaksi');
			$this->load->view('admin/foot_admin');
		}
	}

	public function artikel(){
		if (empty($_SESSION['admin'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/artikel');
			$this->load->view('admin/foot_admin');
		}
	}




}
