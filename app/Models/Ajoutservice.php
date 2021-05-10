<?php

namespace App\Models;

use CodeIgniter\Model;

class ajoutservice extends Model
{
    protected $table      = 'services';
    protected $primaryKey = 'id_service';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    

    protected $allowedFields = ['titre', 'description','tarif','duree_delivration','duree_validite', 'categorie'];

    
    

   
}