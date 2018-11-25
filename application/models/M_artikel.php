<?php
class M_artikel extends CI_Model{

	function get_all_artikel(){
		$this->db->order_by("tulisan_id", "ASC");
		$query = $this->db->get("tbl_tulisan");
		return $query;
	}
	
	function get_artikel_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM artikel WHERE id_artikel='$kode'");
		return $hsl;
	}

	function simpan_artikel($jdl,$artikel,$gambar,$slug){
		$hsl=$this->db->query("INSERT INTO artikel (judul_artikel,isi_artikel,image_artikel,slug_artikel) VALUES ('$jdl','$artikel','$gambar','$slug')");
		return $hsl;
	}

	
    //Front-End

	function get_artikel_by_slug($slug){
		$hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(tgl_artikel,'%d/%m/%Y') AS tanggal FROM artikel where slug_artikel='$slug'");
		return $hsl;
	}

}