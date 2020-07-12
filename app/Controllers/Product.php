<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController

{
    protected $ProductModel;

    public function __construct(){
        $this->ProductModel = new ProductModel();
        $pager = \Config\Services::pager();
    }

    public function index(){
		$data=[
            'title' => 'Product List',
            'product' => $this->ProductModel->get_product(10),
            'pagination' => $this->ProductModel->paginate(10),
            'pagina' => $this->ProductModel->pager,
            
			'isi' => 'product/v_list'
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
            'title' => 'Product List',
			'isi' => 'product/v_add'
		];
		
		echo view('layout/v_wrapper',$data);
    }

    public function save(){
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_desc' => $this->request->getPost('product_desc')
        ];

        $this->ProductModel->insert_product($data);
        // session()->setFlashdata('success','Save Successfully');
        session()->setFlashdata('success','Save Successfully');
        return redirect()->to(base_url('product'));
    }

    public function edit($product_id){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end 
		$data=[
            'title' => 'Product List',
            'product' => $this->ProductModel->edit_product($product_id) ,
			'isi' => 'product/v_edit'
		];
		
		echo view('layout/v_wrapper',$data);
    }

    public function update($product_id){
        //proteksi halaman
        if(session()->get('username')==''){
            session()->setFlashData('gagal','PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));   
        }
        //end 
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_desc' => $this->request->getPost('product_desc')
        ];

        $this->ProductModel->update_product($data,$product_id);
        session()->setFlashdata('success','Update Successfully');
        return redirect()->to(base_url('product'));
    }

    public function delete($product_id){
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success','Delete Successfully');
        return redirect()->to(base_url('product'));
    }

}