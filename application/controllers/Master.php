<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_masterdata');
    }
    
	public function index()
	{
        $data['user'] = $this->M_masterdata->tampil_data()->result();
        $data['judul'] = 'fafsfa';
		$this->load->view('template/header');
		$this->load->view('master/index',$data);
		$this->load->view('template/footer');
	}
}
