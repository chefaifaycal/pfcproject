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
    

    protected $allowedFields = ['id_service','titre', 'description','tarif','duree_delivration','duree_validite', 'categorie','id_fournisseur'];

    public function __construct(ConnectionInterface &$db){
        parent::__construct();
         $this->db =& $db;
    }

    function where($id){
        return $this->db->table('services')->where(['id_fournisseur' => $id])->get()->getResult();
    }

   

    function whereResearche($wilaya,$daira,$commune,$tarif,$categorie){
        /* $this->select('s.titre, s.description, s.tarif, s.date_mise_enligne, s.duree_delivration, s.categorie');
        $this->where('u.wilaya=', $wilaya);
        $this->from('services s, users u');
        $this->where('u.daira=', $daira);
        $this->where('u.commune=', $commune);
        $this->where('s.tarif <=', $tarif);
        $this->where('s.categorie=',$categorie);
        $this->where('s.id_fournisseur =u.id');

        $query = $this->get(); */


        /* $query = "SELECT s.titre, s.description, s.tarif, s.date_mise_enligne, s.duree_delivration, s.categorie 
        FROM services s, users u 
        WHERE u.wilaya='$wilaya' AND u.daira='$daira' AND u.commune='$commune' AND s.id_fournisseur =u.id AND s.categorie='$categorie' AND s.tarif <= $tarif";
        $query1=$this->db->query($query);  */
       /*  foreach ($query1->getResultArray() as $row)
            {
                $data[
                    'titre' =>  $row['titre'],
                    'description' =>  $row['description'],
                    'duree_delivration' =>  $row['duree_delivration'],
                    'date_mise_enligne' =>  $row['date_mise_enligne'],
                    'categorie' =>  $row['categorie'],
                    'id_fournisseur' =>  $row['id_fournisseur'],
                ];
                  
                
            }; */

            $builder = $this->db->table('services');  
            $builder->where(['services.categorie'=> $categorie ,'services.tarif <=' => $tarif]);
            $builder->where(['users.wilaya'=> $wilaya ,'users.daira' => $daira, 'users.commune'=> $commune ]);
            $builder->join('users', 'users.id = services.id_fournisseur');
/*             $builder->where(['u.wilaya' =>$wilaya,'u.daira' => $daira, 'u.commune'=> $commune , 's.id_fournisseur' => 'u.id' , 's.categorie'=> $categorie ,'s.tarif <=' => $tarif]);
 */          $query   = $builder->get()->getResultArray(); 


        /* $results = $query1->getResultArray(); */
        return $query;
    }

    

    
    

   
}