<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BookingModel;
use App\Models\PropertyModel;
use App\Models\LoginModel;
use App\Models\SumberModel;
use App\Models\PembayaranModel;
use App\Controllers\Helper;
use App\Models\UploadModel;

class Booking extends BaseController

{
    protected $BookingModel;
    // protected $PropertyModel;



    public function __construct()
    {
        parent::__construct();
        $this->BookingModel = new BookingModel();
        $this->PropertyModel = new PropertyModel();
        $this->LoginModel = new LoginModel();
        $this->SumberModel = new SumberModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->UploadModel = new UploadModel();
        $pager = \Config\Services::pager();
        $db      = \Config\Database::connect();
        $builder = $db->table('booking');
    }



    public function index()
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 4this
        $property = new PropertyModel();
        $data = [
            'title' => 'Booking List',
            'booking' => $this->BookingModel->get_booking(),
            'pagination' => $this->BookingModel->paginate(10),
            'pagina' => $this->BookingModel->pager,
            'isi' => 'booking/booking_list',
        ];

        // dd($this->BookingModel->get_booking());
        echo view('layout/v_wrapper', $data);
    }


    function dropdown()
    {
        $query = $this->db->get('layanan');
        return $query->result_array();
    }

    public function extend()
    {

        helper('form');
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 4this


        $data = [
            'title' => 'Booking Extend',
            // 'booking' => $this->BookingModel->get_booking_join(),
            'admin' => $this->LoginModel->get_admin(),
            'booking' =>  $this->BookingModel->get_booking_join(),
            'isi' => 'booking/booking_extend',
            'validation' => $this->validator,
            'sumber' => $this->SumberModel->get_sumber(),
            'pembayaran' => $this->PembayaranModel->get_pembayaran(),
            // 'dropdown' => $this->PropertyModel->get_property_opt(),
        ];
        $db      = \Config\Database::connect();
        $query = $db->getLastQuery();
        // echo (string) $query;

        // dd($data['sumber']);
        echo view('layout/v_wrapper', $data);
    }

    public function add()
    {

        helper('form');
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 4this


        $data = [
            'title' => 'Booking_add List',
            // 'booking' => $this->BookingModel->get_booking_join(),
            'admin' => $this->LoginModel->get_admin(),
            'booking' =>  $this->BookingModel->get_booking_join(),
            'isi' => 'booking/booking_add',
            'validation' => \Config\Services::validation(),
            'pembayaran' => $this->PembayaranModel->get_pembayaran(),
            'sumber' => $this->SumberModel->get_sumber()
            // 'dropdown' => $this->PropertyModel->get_property_opt(),
        ];
        $db      = \Config\Database::connect();
        $query = $db->getLastQuery();
        // echo (string) $query;

        // dd($data['sumber']);
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {

        // validation 
        if (!$this->validate([
            'booking_sales' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Nama sales harus diisi',
                ]
            ],
            'booking_guest_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '* Nama sales harus diisi',
                ]
            ],
            'booking_ktp_img' => [
                'rules' => 'max_size[booking_ktp_img,1024]|is_image[booking_ktp_img]|mime_in[booking_ktp_img,image/jpg,image/jpeg,image/gif,image/png]',
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
            return redirect()->to('/booking/add')->withInput();
        }
        // ambil gambar
        $booking_ktp_img = $this->request->getFile('property_picture');

        if ($booking_ktp_img->getError() == 4) {
            $nama_booking_ktp_img = 'default.png';
        } else {

            $nama_booking_ktp_img = $booking_ktp_img->getRandomName();
            // pindahkan gambar
            $booking_ktp_img->move('ktp_customer', $nama_booking_ktp_img);
        }

        $data = [
            'booking_sales' => $this->request->getPost('booking_sales'),
            'property_id' => $this->request->getPost('property_id'),
            'booking_guest_name' => $this->request->getPost('booking_guest_name'),
            'booking_phone_guest' => $this->request->getPost('booking_phone_guest'),
            'booking_email_guest' => $this->request->getPost('booking_email_guest'),
            'booking_ktp_img' => $nama_booking_ktp_img,
            'property_room_daily' => $this->request->getPost('property_room_daily'),
            'property_room_weekly' => $this->request->getPost('property_room_weekly'),
            'booking_phone_guest' => $this->request->getPost('booking_phone_guest'),
            'sumber_id' => $this->request->getPost('sumber_id'),
            'pembayaran_id' => $this->request->getPost('pembayaran_id'),
        ];


        $this->BookingModel->insert_booking($data);
        session()->setFlashdata('success', 'Save Successfully');
        return redirect()->to(base_url('property'));
    }



    public function edit($property_id)
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 
        $data = [
            'title' => 'Property List',
            'property' => $this->PropertyModel->edit_property($property_id),
            'isi' => 'property/v_edit'
        ];

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
            'title' => 'Property List',
            'property' => $this->PropertyModel->edit_property($property_id),
            'isi' => 'property/v_detail'
        ];

        echo view('layout/v_wrapper', $data);

        // echo view('layout/v_wrapper', $data);
        // $property = $this->PropertyModel->get_property($slug);
    }

    // // public function detail($slug)
    // // {
    //     // return $this->db->table('property')->where('property_id', $property_id)->get()->getRowArray();
    //     echo $slug;
    // }

    public function update($property_id)
    {
        //proteksi halaman
        if (session()->get('username') == '') {
            session()->setFlashData('gagal', 'PLEASE LOGIN FIRST');
            return redirect()->to(base_url('login'));
        }
        //end 
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
            'property_room_monthly' => $this->request->getPost('property_room_monthly')

        ];


        $this->PropertyModel->update_property($data, $property_id);
        session()->setFlashdata('success', 'Update Successfully');
        return redirect()->to(base_url('property'));
    }

    // public function detail($slug)
    // {
    //     // $property = $this->PropertyModel->findAll();

    //     // return $this->propertyModel
    //     $property = $this->PropertyModel->where(['slug' => $slug]);

    // return $this->db->table('property')->delete(array('property_id' => $property_id));
    // }
    // public function delete($property_id)
    // {
    //     $this->PropertyModel->delete_property($property_id);
    //     session()->setFlashdata('success', 'Delete Successfully');
    //     return redirect()->to(base_url('property'));
    // }

    // public function delete($product_id){
    //     $this->ProductModel->delete_product($product_id);
    //     session()->setFlashdata('success','Delete Successfully');
    //     return redirect()->to(base_url('product'));
    // }
}
