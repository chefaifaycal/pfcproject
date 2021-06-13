<?php namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model{
  protected $table = 'images';
  protected $primaryKey = 'id';
  protected $allowedFields = [ 'url', 'uploaded_by','service_id']; 

  

  function where($id){
    $db      = \Config\Database::connect();
    $builder = $db->table('images');
    /* return $this->db->table('images')->where(['uploaded_by' => $id])->get()->getResult(); */
    return $builder->where('uploaded_by', $id)->get()->getResultArray();
  }

}