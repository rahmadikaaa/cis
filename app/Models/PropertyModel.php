<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{


    protected $primaryKey = 'property_id';

    protected $table = 'property';


    public function get_property()
    {
        // if ($slug === false) {
        //     return $this->findAll();
        // }

        // return $this->asArray()
        //     ->where(['slug' => $slug])
        //     ->first();
        return $this->db->table('property')->get()->getResultArray();
    }

    public function join()
    {
        return $this->db->table('property')
            ->join('product', 'product.property_id=property.property_id')
            ->get()->getResultArray();
    }

    public function get_property_opt($use_default = false)
    {

        $return = array();

        if ($use_default) {
            $return[''] = "-- Pilih Property --";
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('property');
        $db->where = array();
        $db->order_by = "property_nama asc";

        $query = $db->query("SELECT * FROM property;");

        // foreach ($query->getResult('property') as $property)


        if (!empty($property)) {
            foreach ($property as $key => $value) {
                $return[$value['property_id']] = $value['property_nama'];
            }
        }
        return $return;
    }

    public function insert_property($data)
    {
        return $this->db->table('property')->insert($data);
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
}
