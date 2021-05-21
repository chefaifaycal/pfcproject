<?php

namespace App\Controllers;
use App\Models\Ajoutservice;
use App\Models\UserModel;
use App\Models\ImageModel;

class Services extends BaseController
{
    public function index()
    {
        $id = session('userid');
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


	
		
		 $db = db_connect();
		 $model = new Ajoutservice($db);
		 $result = $model->where(session('userid'));
		$data['results']	= $result;	



        return view('services',$data);



		
		
    }

	public function ajout()
	{
		$db = db_connect();
		$data = [];
		helper(['form']);

		$id = session('userid');
		$model = new UserModel();
		$user = $model->find($id);
		if($user){
			$data = [
				'username' => $user['username'],
				'nom' => $user['nom'],
				'prenom' => $user['prenom'],
				'profile_img_url' => $user['profile_image_url'],
			];
		} 

        
		
		if($this->request->getMethod() == 'post'){
			

			
				$model = new Ajoutservice($db);
				$model1 = new UserModel();

			
				

				$newData = [
                    'titre' => $this->request->getVar('titre'),
					'description' => $this->request->getVar('description'),
					'tarif' => $this->request->getVar('tarif'),
					'duree_delivration' => $this->request->getVar('duree'),
					'duree_validite' => $this->request->getVar('dureevalidite'),
					'categorie' => $this->request->getVar('categorie'),
					'id_fournisseur' => session('userid'),
					
					
					
				];
				$model->insert($newData);
				$serviceID = $model->getInsertID();

				

				if($image = $this->request->getFiles())
					{
					
						foreach($image['images'] as $img)
						{
						if ($img->isValid() && ! $img->hasMoved())
						{
								$model = new ImageModel();
								
								$newName = $img->getRandomName();
								$img->move('uploads/images', $newName);
								$path ='uploads/images/'.$newName;
								$imgData = [
									'url' => $path,
									'uploaded_by' => session('userid'),
									'service_id' => $serviceID,
									
								];
									

								$model->save($imgData);
						}
						}
						
					
					}

					


                	
				session()->setFlashdata('success', 'Service ajouter avec succés !');
				return redirect()->to('/dashboard');
				

            
		}
        return view('ajoutservice',$data);
	}

	public function delete($id){
		$db = db_connect();
		$service = new Ajoutservice($db);
		$service->delete($id);
		session()->setFlashdata('success', 'Service supprimer avec succés !');
		return redirect()->to('/Services');


	}

	

	
}