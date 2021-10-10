<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends Ci_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$date['judul'] = "Landasan Teori";
		$this->load->view('v_header',$date);
		$this->load->view('v_index',$date);
		$this->load->view('v_footer',$date);
	}
	public function about()
 	{
 		$data['judul'] = "Data Diri";
 		$this->load->view('v_header', $data);
 		$this->load->view('v_about', $data);
 		$this->load->view('v_footer', $data);
 	}
}