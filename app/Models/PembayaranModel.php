<?php

namespace App\Models;

use CodeIgniter\Model;

class pembayaranModel extends Model
{



    protected $table = 'status_pembayaran';


    public function get_pembayaran()
    {
        return $this->db->table('status_pembayaran')->get()->getResultArray();
    }
}
