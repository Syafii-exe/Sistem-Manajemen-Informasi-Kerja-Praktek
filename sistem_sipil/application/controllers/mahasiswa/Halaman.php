<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
	}
	public function index()
	{
		$nama1 = $this->session->userdata('ses_id');
		$x['daftar'] = $this->db->query("SELECT * FROM daftar WHERE siswa_id = '$nama1'")->row_array();
		$x['proyek'] = $this->db->query("SELECT * FROM proyek WHERE siswa_id = '$nama1'")->row_array();
		$x['file'] = $this->db->query("SELECT * FROM file_siswa WHERE siswa_id = '$nama1'")->row_array();
		$x['laporan'] = $this->db->query("SELECT * FROM laporan WHERE siswa_id = '$nama1'")->row_array();
		$this->load->view('depan/halaman',$x);
	} 	
}