<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;


class Login extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }


    public function index()
    {
        echo view('layout/v_login');
    }
    public function admin()
    {
        // $property = $this->PropertyModel->findAll();

        $data = [
            'title' => 'Admi List',
            // 'property' => $property,
            'admin' => $this->LoginModel->get_admin(),
            // 'pagination' => $this->PropertyModel->paginate(10),
            // 'pagina' => $this->PropertyModel->pager,
            'isi' => 'admin/admin_list'
            // $konik = $this->KomikModel->findAll();
        ];

        // dd($property);
        echo view('layout/v_wrapper', $data);
    }
    // public function admin()
    // {
    //     $data = [
    //         'title' => 'Admin List',
    //         'property' => $this->LoginModel->get_property(10),
    //         // 'pagination' => $this->LoginModel->paginate(10),
    //         'pagina' => $this->LoginModel->pager,

    //         'isi' => 'admin/v_list'
    //     ];

    //     echo view('layout/v_wrapper', $data);;
    // }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password)) {
            //cek login
            session()->set('username', $cek['username']);
            session()->set('nama_user', $cek['nama_user']);
            session()->set('level', $cek['level']);
            return redirect()->to(base_url('/'));
        } else {
            //jika salah passwordi
            session()->setFlashData('gagal', 'WRONG USERNAME AND PASSWORD !!! PLEASE TRY AGAIN');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
