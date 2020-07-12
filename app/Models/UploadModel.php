<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{


    protected $table = 'upload';


    public function get_property()
    {
        return $this->db->table('upload')->get()->getResultArray();
    }

    public function insert_gambar($data)
    {
        return $this->db->table('upload')->insert($data);
    }
}
