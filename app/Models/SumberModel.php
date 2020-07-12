<?php

namespace App\Models;

use CodeIgniter\Model;

class SumberModel extends Model
{



    protected $table = 'sumber_bisnis';


    public function get_sumber()
    {
        // if ($slug === false)
        // {
        //     return $this->findAll();
        // }
        //join('property','property.property_id=booking.property_id')->
        // return $this->asArray()
        //             ->where(['slug' => $slug])
        //             ->first();



        return $this->db->table('sumber_bisnis')->get()->getResultArray();
    }
}
