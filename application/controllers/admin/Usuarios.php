<?php
defined('BASEPATH') OR exit('Ação não permitida');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//verificar se a sessão é valida
		//verificar se é admin
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Usuários cadastrados',
			'styles' => array(
				'public/admin/assets/bundles/datatables/datatables.min.css',
				'public/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'
			),
			'scripts' => array(
				'public/admin/assets/bundles/datatables/datatables.min.js',
				'public/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
				'public/admin/assets/bundles/jquery-ui/jquery-ui.min.js',
				'public/admin/assets/js/page/datatables.js'
			),
			'usuarios' => $this->ion_auth->users()->result()
		);

		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/usuarios/index');
		$this->load->view('admin/layout/footer');
	}
}