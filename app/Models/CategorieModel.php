<?php namespace App\Models;

use CodeIgniter\Model;

class CategorieModel extends Model{
  protected $table = 'categories';
  protected $allowedFields = [ 'nom_categorie'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];
  protected $returnType     = 'array';




  

  

  


}