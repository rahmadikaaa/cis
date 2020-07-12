<?php

namespace App\Controllers;

use App\Models\AboutModel;

use CodeIgniter\About;
use CodeIgniter\Controller;


class Home extends BaseController
{

	protected $AboutModel;

	public function __construct()
	{
		// $AboutModel = model('App\Models\AboutModel');
		// $AboutModel = new \App\Models\AboutModel();
		// $this->AboutModel = new AboutModel();
	}

	public function index()
	{
		//proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
			return redirect()->to(base_url('login'));
		}
		//end 4this
		$data = [
			'title' => 'Carikost Inventory Sistem',
			'isi' => 'layout/v_dashboard',
		];
		//  echo site_url('/property');
		echo view('layout/v_wrapper', $data);
	}

	public function admin()
	{
		$data = [
			'title' => 'rahmadikaaa',
			'isi' => 'landing/v_home',
			// 'about' => $this->AboutModel->get_About(),
		];
		echo view('laout/v_wrapper', $data);
	}



	//--------------------------------------------------------------------

}
