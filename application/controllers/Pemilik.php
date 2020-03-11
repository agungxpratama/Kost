<?php
// session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller{
	private $conn;
	function __construct(){
		parent::__construct();
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
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/dashboard');
			$this->load->view('pemilik/foot_pemilik');
		}
	}

	public function booking(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{

			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/booking');
			$this->load->view('pemilik/foot_pemilik');
		}
	}

	public function data_tamu(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/data_tamu');
			$this->load->view('pemilik/foot_pemilik');
		}
	}

	public function pemasukan(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/pemasukan');
			$this->load->view('pemilik/foot_pemilik');
		}
	}

	public function pengeluaran(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/pengeluaran');
			$this->load->view('pemilik/foot_pemilik');
		}
	}
	public function view_data_kos(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$sql="SELECT * FROM kosan WHERE id_pemilik='$_SESSION[id_pemilik]'";
			$data['result']=$this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik',$data);
			$this->load->view('pemilik/data_kos', $data);
			$this->load->view('pemilik/foot_pemilik');
		}
	}
	public function logout(){
		session_destroy();
		header("location: ".base_url());
	}

	public function input_data_kos(){
		if (empty($_SESSION['pemilik'])) {
  		header("location: ".base_url());
		} else{
			$sql      		= "SELECT nama_pemilik FROM pemilik WHERE id_pemilik = '$_SESSION[id_pemilik]';";
            $data['nama']   = $this->conn->query($sql);
			$this->load->view('pemilik/sidebar_pemilik');
			$this->load->view('pemilik/header_pemilik', $data);
			$this->load->view('pemilik/input_data_kos');
			$this->load->view('pemilik/foot_pemilik');
		}
	}
	public function insert_data_kos(){
		$target_dir   = "././asset_admin/upload_kos/"; // Untuk Foto
	    $target_dir2   = "asset_admin/upload_kos/"; // Untuk Foto
	    $file_name    = basename($_FILES["foto"]["name"]); // Untuk Foto
	    $target_file  = $target_dir . $file_name; // Untuk Foto
	    $target_file2  = $target_dir2 . $file_name; // Untuk Foto
	    $imageFileType  = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // untuk foto
	    if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {
			$nama_kos = $_POST['nama_kos'];
			$karakter= '123456789';
			$string = '';
			for ($i = 0; $i < 4; $i++) {
			$pos = rand(0, strlen($karakter)-1);
			$string .= $karakter{$pos};
			    }
			$kode_kos = substr($nama_kos, 1,4).$string;
			$alamat = $_POST['alamat'];
			$deskripsi = $_POST['deskripsi'];
			$jenis_kosan = $_POST['jenis_kosan'];
			$saldo_kos = 0;
			$id_pemilik=$_SESSION['id_pemilik'];
			$sql="INSERT INTO kosan VALUES ('$kode_kos', '$nama_kos', '$alamat', '$deskripsi', '$target_file2', '$jenis_kosan', $saldo_kos, '$id_pemilik')";
			$result=$this->conn->query($sql);
			if ($result == true) {
			    echo "<script> alert('data kost berhasil disimpan');</script>";
			} else {
			    echo "<script> alert('data kost berhasil disimpan');</script>";
			}
			header("location: ".base_url('index.php/pemilik'));

		} else {
		echo "<script> alert('Foto Gagal diunggah');</script>";
		header("location: ".base_url('index.php/pemilik/input_data_kos'));
		}
			mysqli_close($this->conn);
	}
}
