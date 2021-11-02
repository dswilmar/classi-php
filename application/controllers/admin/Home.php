<?php
defined('BASEPATH') OR exit('Ação não permitida');

/*
* Controller responsável pelo Admin
*/
class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		//verificar se a sessão é valida
		//verificar se é admin
	}

	public function index()
	{
		$this->load->view('admin/layout/header');
		$this->load->view('admin/home/index');
		$this->load->view('admin/layout/footer');
	}
}