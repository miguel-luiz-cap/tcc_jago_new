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
		$request = service('request');
		helper('html');
		$data['pageid'] = 2;
		$data['title'] = 'jaGO - Contato';

		if($request->getPost('inputNome'))
		{
			$data['msg'] = 'Mensagem enviada com sucesso';
			$data['cor'] = 'alert-success';
			$data['icon'] = 
			"<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-check-circle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' aria-label='Success:'>
				<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
			</svg>";
		}

		echo view('header', $data);
		echo view('contato');
		echo view('footer');
	}
}
