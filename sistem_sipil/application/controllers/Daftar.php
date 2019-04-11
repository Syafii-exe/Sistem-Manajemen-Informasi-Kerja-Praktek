<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->library('upload');
	}
	function index(){
		$this->load->view('depan/daftar');
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $photo=$gbr['file_name'];
							$nis=strip_tags($this->input->post('xnim'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$kontak=strip_tags($this->input->post('xkontak'));
							
							$this->m_siswa->simpan_siswa($nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('home');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('home');
	                }
	                 
	            }else{
	            	$nis=strip_tags($this->input->post('xnim'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$alamat=strip_tags($this->input->post('xalamat'));
					$kontak=strip_tags($this->input->post('xkontak'));
					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak);
					echo $this->session->set_flashdata('msg','success');
					redirect('home');
				}
				
	}
}