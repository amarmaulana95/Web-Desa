<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_artikel');
	}

	public function index()
	{
		
		$x['data']=$this->M_artikel->get_all_artikel();
		$this->template->load('beranda','layout/portal',$x);
	}

	function detail($slug){
		$data=$this->M_artikel->get_artikel_by_slug($slug);
		$q=$data->row_array();
		$kode=$q['id_artikel'];
		$x['data']=$this->M_artikel->get_artikel_by_slug($slug);
		$this->template->load('index','portal/detail',$x);
	}
}
