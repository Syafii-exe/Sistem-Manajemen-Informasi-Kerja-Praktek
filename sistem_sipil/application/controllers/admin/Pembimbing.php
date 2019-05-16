<?php
class Pembimbing extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_files');
		$this->load->model('m_pengguna');
	}


	function index(){
		
		$x['data']=$this->m_files->get_all_files();
		$this->load->view('admin/v_pembimbing',$x);
	}

	

	function update_file(){

						$kode=$this->input->post('kode');
	                    $level=$this->input->post('xlevel');
						$this->m_files->update_file($kode,$level);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/files');
	            } 

	function hapus_file(){
		$kode=$this->input->post('kode');
		$data1=$this->input->post('file1');
		$data2=$this->input->post('file2');
		$this->m_files->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/files');
	}

}