<?php namespace App\Models;
use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'about';

    public function get_about(){
        
        return $this->db->table('about')->get()->getResultArray();
       
    }

    public function join(){
        return $this->db->table('About')
        ->join('product','product.about_id=about.about_id')
        ->get()->getResultArray();
    }

    public function insert_about($data){
        return $this->db->table('about')->insert($data);
    }

    public function edit_about($about_id){
        return $this->db->table('about')->where('about_id',$about_id)->get()->getRowArray();
    }

    public function update_about($data,$about_id){
        return $this->db->table('about')->update($data,array( 'about_id'=>$about_id));
    }

    public function delete_about($about_id){
        return $this->db->table('about')->delete(array( 'about_id'=>$about_id));
    }
}