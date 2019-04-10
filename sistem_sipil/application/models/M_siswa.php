<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_tmp_lahir,siswa_tgl_lahir,siswa_alamat,siswa_kontak,siswa_photo) VALUES ('$nis','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$alamat','$kontak','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_tmp_lahir,siswa_tgl_lahir,siswa_alamat,siswa_kontak) VALUES ('$nis','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$alamat','$kontak')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_tmp_lahir='$tmp_lahir',siswa_tgl_lahir='$tgl_lahir',siswa_alamat='$alamat',siswa_kontak='$kontak',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$kontak){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_tmp_lahir='$tmp_lahir',siswa_tgl_lahir='$tgl_lahir',siswa_alamat='$alamat',siswa_kontak='$kontak' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

}