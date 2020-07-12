<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\SkillModel;

class Skill extends BaseController

{
    protected $SkillModel;

    public function __construct(){
        helper('form');
        $this->SkillModel = new SkillModel();
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
            'title' => 'Skill List',
            'skill' => $this->SkillModel->get_skill(10),
            'pagination' => $this->SkillModel->paginate(10),
            'pagina' => $this->SkillModel->pager,
            
			'isi' => 'skill/s_list'
		];
		
        echo view('layout/v_wrapper',$data);
    }

    public function save(){
        helper('form');     
        $data = [
            'skill_html' => $this->request->getPost('skill_html'),
            'skill_css' => $this->request->getPost('skill_css'),
            'skill_php' => $this->request->getPost('skill_php'),
            'skill_javascript' => $this->request->getPost('skill_javascript'),
            'skill_android_studio' => $this->request->getPost('skill_android_studio'),
            'skill_wordpress' => $this->request->getPost('skill_wordpress'),
            'skill_photoshop' => $this->request->getPost('skill_photoshop'),
        ];

        $this->SkillModel->insert_skill($data);
        // session()->setFlashdata('success','Save Successfully');
        session()->setFlashdata('success','Save Successfully');
        return redirect()->to(base_url('skill'));
    }

    public function edit($skill_id){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end 
		$data=[
            'title' => 'Skill List',
            'skill' => $this->SkillModel->edit_skill($skill_id) ,
			'isi' => 'skill/s_list'
		];
		
		echo view('layout/v_wrapper',$data);
    }

    public function update($skill_id){
        $data = [
            'skill_html' => $this->request->getPost('skill_html'),
            'skill_css' => $this->request->getPost('skill_css'),
            'skill_php' => $this->request->getPost('skill_php'),
            'skill_javascript' => $this->request->getPost('skill_javascript'),
            'skill_android_studio' => $this->request->getPost('skill_android_studio'),
            'skill_wordpress' => $this->request->getPost('skill_wordpress'),
            'skill_photoshop' => $this->request->getPost('skill_photoshop'),
        ];

        $this->SkillModel->update_skill($data,$skill_id);
        session()->setFlashdata('success','Update Successfully');
        return redirect()->to(base_url('product'));
    }
}