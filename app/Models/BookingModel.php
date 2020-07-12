<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{



    protected $table = 'booking';


    public function get_booking()
    {
        // if ($slug === false)
        // {
        //     return $this->findAll();
        // }
        //join('property','property.property_id=booking.property_id')->
        // return $this->asArray()
        //             ->where(['slug' => $slug])
        //             ->first();



        return $this->db->table('booking')->get()->getResultArray();
    }

    public function get_booking_join()
    {
        $array = [
            'property', 'booking.property_id = property.property_nama', 'right',
            'login', 'booking.user_id = user.id'
        ];
        $db      = \Config\Database::connect();
        $builder = $db->table('booking');
        $builder->select('*');
        $builder->join = array(
            'property', 'booking.property_id = property.property_nama', 'right',
            // 'login', 'booking.user_id = user.id'
        );
        // $builder->join('user', 'booking.user_id = user.id');
        $query   = $builder->get();


        return $this->db->table('booking')->join('property', 'booking.property_id = property.property_nama', 'right')->get()->getResultArray();

        // return $builder->;
    }

    public function get_klien_opt($use_default = false)
    {

        $return = array();

        if ($use_default) {
            $return[''] = "-- Pilih Klien --";
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('booking');
        $db->where = array();
        $db->order_by = "user_nama asc";

        if (!empty($klien)) {
            foreach ($klien as $key => $value) {
                $return[$value['klien_id']] = $value['user_nama'];
            }
        }
        return $return;
    }


    public function join()
    {
        return $this->db->table('property')
            ->join('property', 'booking.property_id=property.property_id')
            ->get()->getResultArray();
    }

    public function insert_booking($data)
    {
        return $this->db->table('booking')->insert($data);
    }

    public function edit_property($property_id)
    {
        return $this->db->table('property')->where('property_id', $property_id)->get()->getRowArray();
    }
    // public function detail($slug)
    // {
    //     // return $this->db->table('property')->where('property_id', $property_id)->get()->getRowArray();
    //     $property = $this->PropertyModel->get_property($slug);
    //     dd($property);
    //     // $pro
    // }

    public function update_property($data, $property_id)
    {
        return $this->db->table('property')->update($data, array('property_id' => $property_id));
    }

    // public function delete($property_id)
    // {

    //     // return $this->propertyModel
    //     // $property = $this->PropertyModel->findAll();

    //     return $this->db->table('property')->delete(array('property_id' => $property_id));
    // }
}
