<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('busca_model');

		$dados['usuarios'] = $this->busca_model->usuarios();

		$this->load->view('pages/index', $dados);
	}

	public function resultado()
	{

		$this->load->model('busca_model');

		$dados['listagem'] = $this->busca_model->buscar($_POST);

		$this->load->view('pages/resultado', $dados);
	}
}