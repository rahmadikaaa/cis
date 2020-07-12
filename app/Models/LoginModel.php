<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function get_admin()
    {

        return $this->db->table('user')->get()->getResultArray();
    }

    public function insert_user($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function edit_user($user_id)
    {
        return $this->db->table('user')->where('user_id', $user_id)->get()->getRowArray();
    }

    public function cek_login($username, $password)
    {

        return $this->db->table('user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
