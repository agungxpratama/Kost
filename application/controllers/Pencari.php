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

	public function logoutt(){
		session_destroy();
		header("location: ".base_url());
	}

	function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/welcome'));
    }

	public function pencarian(){
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/konten');
		$this->load->view('pencari/foot_pencari');
	}

	public function view_data_kos($id)
	{
		$where_ = array('kode_kos' => $id);
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();
		$data['kos'] = $this->M_All->view_where('kosan', $where_)->row();
		$data['result'] = $this->M_All->view_where('kamar', $where_)->result();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pesan_kos', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pemesanan()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();
		$data['result'] = $this->M_All->get('transaksi')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pemesanan', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pembayaran()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();
		$data['result'] = $this->M_All->get('transaksi')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pembayaran', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pesan()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari', $where)->row();
		$data['result'] = $this->M_All->get('transaksi')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pesan_kamar()
	{
		$uang_muka = $this->input->post('uang_muka');
		$harga = $this->input->post('harga');
		$kode_kamar = $this->input->post('kode_kamar');
		$id_pencari = $this->input->post('id_pencari');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$selisih = strtotime($tgl_keluar) - strtotime($tgl_masuk);
		$total_bayar = $harga*floor($selisih/(60*60*24*365));
		$sisa_bayar = $total_bayar - $uang_muka;
		$data = array(
			'kode_kamar' => $kode_kamar,
			'id_pencari' => $id_pencari,
			'tgl_masuk' => $tgl_masuk,
			'tgl_keluar' => $tgl_keluar,
			'total_bayar' => $total_bayar,
			'sisa_pembayaran' => $sisa_bayar,
		);
		$this->M_All->insert('transaksi', $data);
		redirect('index.php/pencari');
	}
}
