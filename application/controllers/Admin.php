<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	// private $conn;
	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if ($this->session->userdata('admin') != "admin") {
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
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/foot_admin');
		// }
	}

	public function logoutt(){
		session_destroy();
		header("location: ".base_url());
	}

	function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/welcome'));
    }

	public function data_penghuni(){
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->join_transaksi('transaksi', 'kamar', 'kosan', 'pemilik', 'pencari')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/data_penghuni', $data);
		$this->load->view('admin/foot_admin');
		// }
	}

	public function data_kos(){
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();

			// $sql="SELECT * FROM kosan";
			// $data['result']=$this->conn->query($sql);
		$data['result'] = $this->M_All->get('kosan')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/data_kos', $data);
		$this->load->view('admin/foot_admin');
		// }
	}

	public function data_pemilik(){
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();

		$data['result'] = $this->M_All->get('pemilik')->result();

		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/data_pemilik', $data);
		$this->load->view('admin/foot_admin');
		// }
	}

	public function transaksi(){
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		// $data['result'] = $this->M_All->join_transaksi('transaksi', 'kamar', 'kosan', 'pemilik', 'pencari')->result();
		$data['result'] = $this->M_All->get('transaksi')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/transaksi', $data);
		$this->load->view('admin/foot_admin');
		// }
	}

	public function artikel(){
		// if (empty($_SESSION['admin'])) {
  		// header("location: ".base_url());
		// } else{
		// 	$sql      		= "SELECT nama_admin FROM admin WHERE username = '$_SESSION[username]';";
        //     $data['nama']   = $this->conn->query($sql);
		$username = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->get('artikel')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/artikel', $data);
		$this->load->view('admin/foot_admin');
		// }
	}

	public function tambah_artikel()
	{
		$config['upload_path']          = './asset_admin/artikel/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 1024;
		// $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			echo "<script> alert('Foto Artikel Gagal diunggah');</script>";
        }else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$judul = $this->input->post('judul_artikel');
			$kategori_artikel = $this->input->post('kategori_artikel');
			$deskripsi = $this->input->post('deskripsi_artikel');
			$foto = $this->upload->data('file_name');

			$data = array(
				'judul' => $judul,
				'kategori_artikel' => $kategori_artikel,
				'deskripsi' => $deskripsi,
				'tgl_upload' => 'now()',
				'tgl_ubah' => 'now()',
				'foto' => $foto,
			);
			if ($this->M_All->insert('artikel', $data) != true) {
				redirect('index.php/admin/artikel');
				// echo "<script> alert('Data Artikel berhasil ditambah');</script>";
			}else{
				redirect('index.php/admin/artikel');
				echo "<script> alert('Data Artikel gagal ditambah');</script>";
			}
        }
	}

	public function hapus_artikel($id)
	{
		$where = array('id_artikel' => $id);
		$this->M_All->delete($where, 'artikel');
		redirect('index.php/admin/artikel');
	}

	public function hapus_kos($id)
	{
		$where = array('kode_kos' => $id);
		$this->M_All->delete($where,'kosan');
		redirect('index.php/pemilik/view_data_kos');
	}



}
