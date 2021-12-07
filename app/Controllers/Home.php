<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('html');
		echo view('header');
		echo view('index');
		echo view('footer');
	}
	public function viaje()
	{
		helper('html');
		$data['pageid'] = 1;
		$data['title'] = 'jaGO - Viaje Conosco';
		echo view('header', $data);
		echo view('viajeconosco');
		echo view('footer');
	}
	public function contato()
	{
		helper('html');
		$data['pageid'] = 2;
		$data['title'] = 'jaGO - Contato';
		echo view('header', $data);
		echo view('contato');
		echo view('footer');
	}
}
