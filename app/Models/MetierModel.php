<?php namespace App\Models;

use CodeIgniter\Model;

class MetierModel extends Model{
  protected $table = 'metiers';
  protected $primaryKey = 'id_metier';
  protected $allowedFields = [ 'nom_metier']; 


}