<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $allowedFields = [ 'type','username', 'nom', 'prenom', 'date_naissance','num_tel_perso','wilaya','daira','commune','code_postal','num_tel_pro','email','pwd','profile_image_url'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];




  protected function beforeInsert(array $data){
    $data = $this->passwordHash($data);
    $data['data']['dat_inscription'] = date('Y-m-d H:i:s');

    return $data;
  }

  protected function beforeUpdate(array $data){
    $data = $this->passwordHash($data);
  
    return $data;
  }

  protected function passwordHash(array $data){
    if(isset($data['data']['pwd']))
      $data['data']['pwd'] = password_hash($data['data']['pwd'], PASSWORD_DEFAULT);

    return $data;
  }


}