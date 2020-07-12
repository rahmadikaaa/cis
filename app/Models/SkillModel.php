<?php namespace App\Models;
use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skill';

    public function get_skill(){
        
        return $this->db->table('skill')->get()->getResultArray();
       
    }

    public function insert_skill($data){
        return $this->db->table('skill')->insert($data);
    }

    public function edit_skill($skill_id){
        return $this->db->table('skill')->where('skill_id',$skill_id)->get()->getRowArray();
    }

    public function update_skill($data,$skill_id){
        return $this->db->table('skill')->update($data,array( 'skill_id'=>$skill_id));
    }

    public function delete_skill($skill_id){
        return $this->db->table('skill')->delete(array( 'skill_id'=>$skill_id));
    }
}