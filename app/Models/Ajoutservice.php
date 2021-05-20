<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class Ajoutservice extends Model
{
    protected $db;
    protected $table      = 'services';
    protected $primaryKey = 'id_service';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['titre', 'description','tarif','duree_delivration','duree_validite', 'categorie','id_fournisseur'];

    public function __construct(ConnectionInterface &$db){
         $this->db =& $db;
    }

    function where($id){
        return $this->db->table('services')->where(['id_fournisseur' => $id])->get()->getResult();
    }

    
    

   
}