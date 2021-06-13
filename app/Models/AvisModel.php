<?php namespace App\Models;

use CodeIgniter\Model;

class AvisModel extends Model{
  protected $table = 'avis';
  protected $primaryKey = 'avis_id';
  protected $allowedFields = [ 'avis_id','user_id','service_id','user_rating','user_review']; 


}