<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PropertyModel;
use App\Models\BookingModel;
use CodeIgniter\Entity;

class Property extends BaseController

{
    protected $PropertyModel;

    public function __construct()
    {
        $this->PropertyModel = new PropertyModel();
        $this->BookingModel = new BookingModel();
        $pager = \Config\Services::pager();
    }



    public function index()
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 4this
        // $property = $this->PropertyModel->findAll();

        $data = [
            'title' => 'Property List',
            // 'property' => $property,
            'booking' => $this->BookingModel->get_booking(),
            'property' => $this->PropertyModel->get_property(),
            'pagination' => $this->PropertyModel->paginate(10),
            'pagina' => $this->PropertyModel->pager,
            'isi' => 'property/v_list'
            // $konik = $this->KomikModel->findAll();
        ];

        // dd($data['booking']);
        echo view('layout/v_wrapper', $data);
    }

    public function add()
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 
        $data = [
            'title' => 'Property List',
            'isi' => 'property/v_add',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        // validation 
        if (!$this->validate([
            'property_nama' => [
                'rules' => 'required|is_unique[property.property_nama]',
                'errors' => [
                    'required' => '* Nama Properti Harus Diisi',
                    'is_unique' => '* Nama Properti Sudah Terdaftar'
                ]
            ],
            'property_picture' => [
                'rules' => 'max_size[property_picture,1024]|is_image[property_picture]|mime_in[property_picture,image/jpg,image/jpeg,image/gif,image/png]',
                'errors' => [
                    // 'uploaded' => '* Property ini harus mempunyai gambar',
                    'max_size' => '* Gambar tidak melebihi dari 1024 kb, silahkan compress file di https://compressjpeg.com/',
                    'is_image' => '* Gambar yang diizinkan hanya JPG,JPEG,PNG'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // dd('berh');
            // return redirect()->to('/property/add')->withInput()->with('validation', $validation);
            return redirect()->to('/property/add')->withInput();
        }
        // ambil gambar
        $property_image = $this->request->getFile('property_picture');

        if ($property_image->getError() == 4) {
            $nama_property_image = 'default.png';
        } else {

            $nama_property_image = $property_image->getRandomName();
            // pindahkan gambar
            $property_image->move('image_property', $nama_property_image);
        }




        $data = [
            'property_nama' => $this->request->getPost('property_nama'),
            'property_kode' => $this->request->getPost('property_kode'),
            'property_address' => $this->request->getPost('property_address'),
            'property_facility' => $this->request->getPost('property_facility'),
            'property_room_occupied' => $this->request->getPost('property_room_occupied'),
            'property_room_left' => $this->request->getPost('property_room_left'),
            'property_room_sellable' => $this->request->getPost('property_room_sellable'),
            'property_room_daily' => $this->request->getPost('property_room_daily'),
            'property_room_weekly' => $this->request->getPost('property_room_weekly'),
            'property_room_monthly' => $this->request->getPost('property_room_monthly'),
            'property_image' => $nama_property_image,
            'property_updated_at' => date('Y-m-d H:i:s')
        ];

        $this->PropertyModel->insert_property($data);
        // session()->setFlashdata('success','Save Successfully');
        session()->setFlashdata('success', 'Save Successfully');
        return redirect()->to(base_url('property'));
    }

    public function edit($id)
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 
        $data = [
            'title' => 'Property List',
            'property' => $this->PropertyModel->edit_property($id),
            'isi' => 'property/v_edit',
            'validation' => \Config\Services::validation()
        ];

        // dd($id);


        echo view('layout/v_wrapper', $data);
    }

    public function detail($property_id)
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        $data = [
            'title' => 'Property Detail',
            'property' => $this->PropertyModel->edit_property($property_id),
            'isi' => 'property/v_detail',

        ];
        // dd($data);
        // $this->PropertyModel->update_property($data, $property_id);
        echo view('layout/v_wrapper', $data);

        // echo view('layout/v_wrapper', $data);
        // $property = $this->PropertyModel->get_property($slug);
    }


    public function update($id)
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 

        //ambil gambar

        // hapus file lama
        // cek jika file gambar lama nya default




        // dd($data);

        if (!$this->validate([
            'property_picture' => [
                'rules' => 'max_size[property_picture,1024]|is_image[property_picture]|mime_in[property_picture,image/jpg,image/jpeg,image/gif,image/png]',
                'errors' => [
                    // 'uploaded' => '* Property ini harus mempunyai gambar',
                    'max_size' => '* Gambar tidak melebihi dari 1024 kb, silahkan compress file di https://compressjpeg.com/',
                    'is_image' => '* Gambar yang diizinkan hanya JPG,JPEG,PNG'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // dd('berh');
            // dd($id);
            // dd($this->PropertyModel->edit_property($id));
            // return redirect()->to('/property/add')->withInput()->with('validation', $validation);
            return redirect()->to('/property/edit/id')->withInput();
        }

        $file_image = $this->request->getFile('property_picture');
        //cek perubahan gambar
        if ($file_image->getError() == 4) {
            $nama_property_image = $this->request->getVar('name_pic_old');
        } else {
            //generate random img
            $nama_property_image = $file_image->getRandomName();
            //pindahkan/upload gambar
            $file_image->move('image_property', $nama_property_image);
            // delete old file
            // unlink('image_property/' . $this->request->getVar('name_pic_old'));
        }

        $data = [
            'property_nama' => $this->request->getPost('property_nama'),
            'property_kode' => $this->request->getPost('property_kode'),
            'property_address' => $this->request->getPost('property_address'),
            'property_facility' => $this->request->getPost('property_facility'),
            'property_room_occupied' => $this->request->getPost('property_room_occupied'),
            'property_room_left' => $this->request->getPost('property_room_left'),
            'property_room_sellable' => $this->request->getPost('property_room_sellable'),
            'property_room_daily' => $this->request->getPost('property_room_daily'),
            'property_room_weekly' => $this->request->getPost('property_room_weekly'),
            'property_room_monthly' => $this->request->getPost('property_room_monthly'),
            'property_image' => $nama_property_image,
            'property_created_at' => date('Y-m-d H:i:s')

        ];

        $this->PropertyModel->update_property($data, $id);
        session()->setFlashdata('success', 'Update Successfully');
        return redirect()->to(base_url('property'));
    }

    public function delete($id)
    {
        // caridata
        $property = $this->PropertyModel->find($id);

        // cek gambar default
        if ($property['property_image'] != 'default.png') {
            unlink('image_property/' . $property['property_image']);
        }


        $this->PropertyModel->delete($id);
        return redirect()->to('/property');
    }
}
