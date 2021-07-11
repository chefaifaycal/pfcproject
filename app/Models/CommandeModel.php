<?php namespace App\Models;

use CodeIgniter\Model;

class CommandeModel extends Model{
  protected $table = 'commande';
  protected $primaryKey = 'id';
  protected $allowedFields = [ 'id','client_id','fournisseur_id','service_id','statut_commande']; 


 

/* function where($id){
  $db      = \Config\Database::connect();
  $builder = $db->table('avis');
  return $builder->where('service_id', $id)->get()->getResultArray();
} */

}