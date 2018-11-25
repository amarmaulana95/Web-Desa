<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('M_tulisan');
		$this->load->model('M_pengumuman');
		$this->load->model('M_agenda');
		$this->load->model('M_pengunjung');
		$this->M_pengunjung->count_visitor();
	}

	function index(){
	$x['artikel']=$this->M_tulisan->get_berita_home();
	$x['pengumuman']=$this->M_pengumuman->get_pengumuman_home();
	$x['agenda']=$this->M_agenda->get_agenda_home();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
	$this->template->load('beranda','layout/portal',$x);
	}

}

