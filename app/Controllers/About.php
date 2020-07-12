<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\AboutModel;

class About extends BaseController

{
    protected $AboutModel;

    public function __construct(){
        helper('form');
        $this->AboutModel = new AboutModel();
        $pager = \Config\Services::pager();
    }

    public function index(){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end

		$data=[
            'title' => 'About List',
            'about' => $this->AboutModel->get_About(10),
            'pagination' => $this->AboutModel->paginate(10),
            'pagina' => $this->AboutModel->pager,
            
			'isi' => 'about/a_list'
		];
		
        echo view('layout/v_wrapper',$data);
    }

    public function add(){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end 

		$data=[
            'title' => 'About Add',
			'isi' => 'about/a_add'
		];
		
		echo view('layout/v_wrapper',$data);
    }

    public function save(){
        helper('form');     
        $data = [
            'about_name' => $this->request->getPost('about_name'),
            'about_gender' => $this->request->getPost('about_gender'),
            'about_phone' => $this->request->getPost('about_phone'),
            'about_email' => $this->request->getPost('about_email'),
            'about_education' => $this->request->getPost('about_education'),
            'about_age' => $this->request->getPost('about_age'),
            'about_website' => $this->request->getPost('about_website'),
            'about_birthdplace' => $this->request->getPost('about_birthdplace'),
            'about_birthdate' => $this->request->getPost('about_birthdate'),
            'about_desc' => $this->request->getPost('about_desc')
        ];

        $this->AboutModel->insert_about($data);
        // session()->setFlashdata('success','Save Successfully');
        session()->setFlashdata('success','Save Successfully');
        return redirect()->to(base_url('about'));
    }
    
    public function edit($about_id){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end 
		$data=[
            'title' => 'About List',
            'about' => $this->AboutModel->edit_about($about_id) ,
			'isi' => 'about/a_edit'
		];
		
		echo view('layout/v_wrapper',$data);
    }

    public function update($about_id){
        $data = [
            'about_name' => $this->request->getPost('about_name'),
            'about_gender' => $this->request->getPost('about_gender'),
            'about_phone' => $this->request->getPost('about_phone'),
            'about_email' => $this->request->getPost('about_email'),
            'about_education' => $this->request->getPost('about_education'),
            'about_age' => $this->request->getPost('about_age'),
            'about_website' => $this->request->getPost('about_website'),
            'about_birthdplace' => $this->request->getPost('about_birthdplace'),
            'about_birthdate' => $this->request->getPost('about_birthdate'),
            'about_desc' => $this->request->getPost('about_desc')
        ];

        $this->AboutModel->update_about($data,$about_id);
        session()->setFlashdata('success','Update Successfully');
        return redirect()->to(base_url('product'));
    }

    public function delete($about_id){
        $this->AboutModel->delete_about($about_id);
        session()->setFlashdata('success','Delete Successfully');
        return redirect()->to(base_url('about'));
    }
}