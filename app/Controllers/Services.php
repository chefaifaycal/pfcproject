<?php

namespace App\Controllers;
use App\Models\Ajoutservice;
use App\Models\UserModel;

class Services extends BaseController
{
    public function index()
    {
        $id = session('id');
		$model = new UserModel();
		$user = $model->find($id);
		if($user){
			$data = [
				'username' => $user['username'],
				'nom' => $user['nom'],
				'prenom' => $user['prenom'],
				'date_naissance' => $user['date_naissance'],
				'num_telephone_perso' => $user['num_tel_perso'],
				'num_telephone_pro' => $user['num_tel_pro'],
				'email' => $user['email'],
				'profile_img_url' => $user['profile_image_url'],
				'nombre_services' => $user['nombre_services'],
			];
		} 

        return view('services',$data);



		
		
    }

	public function ajout()
	{
		$data = [];
		helper(['form']);

		$id = session('id');
		$model = new UserModel();
		$user = $model->find($id);
		if($user){
			$data = [
				'username' => $user['username'],
				'nom' => $user['nom'],
				'prenom' => $user['prenom'],
				'date_naissance' => $user['date_naissance'],
				'num_telephone_perso' => $user['num_tel_perso'],
				'num_telephone_pro' => $user['num_tel_pro'],
				'email' => $user['email'],
				'profile_img_url' => $user['profile_image_url'],
			];
		} 

        
		
		if($this->request->getMethod() == 'post'){

			
				$model = new Ajoutservice();
                $fournisseur = new UserModel();

				$newData = [
                    'titre' => $this->request->getVar('titre'),
					'description' => $this->request->getVar('description'),
					'tarif' => $this->request->getVar('tarif'),
					'duree_delivration' => $this->request->getVar('duree'),
					'duree_validite' => $this->request->getVar('dureevalidite'),
                    'id_fournisseur' => session('id'),
					'categorie' => $this->request->getVar('categorie'),
					
					
					
				];
				$model->save($newData);

                
				
				session()->setFlashdata('success', 'Service ajouter avec succés !');
				return redirect()->to('/dashboard');

			
            
		}
        return view('ajoutservice',$data);
	}

	
}