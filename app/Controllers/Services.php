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

	public function update(){
		
	}

	public function recherche(){
		helper(['form']);
		$db = db_connect();

			$id = session('userid');
			$model = new UserModel();
			$user = $model->find($id);
			
			$data = [
				
				
			];

		


		if($this->request->getMethod() == 'post'){


			
			$model1 = new Ajoutservice($db);			
		

			$wilaya = $this->request->getVar('wilayas');
			$daira = $this->request->getVar('dairas');
			$commune = $this->request->getVar('communes');
			$tarif = $this->request->getVar('tarif');
			$categorie = $this->request->getVar('categories');

			$result = $model1->whereResearche($wilaya,$daira,$commune,$tarif,$categorie);
			$data = [
				'username' => $user['username'],
				'nom' => $user['nom'],
				'prenom' => $user['prenom'],
				'date_naissance' => $user['date_naissance'],
				'num_telephone_perso' => $user['num_tel_perso'],
				'wilaya' => $user['wilaya'],
				'daira' => $user['daira'],
				'commune' => $user['commune'],
				'codepostale' => $user['code_postal'],
				'email' => $user['email'],
				'profile_img_url' => $user['profile_image_url'],
				'results' => $result,
				
			];
			

			return view ('clientDashboardView',$data);
		}

		return view ('clientDashboardView',$data);
	}

	public static function consulter($id){
		$db = db_connect();
		$model = new Ajoutservice($db);		
		$service = $model->find($id);
		$model1 = new UserModel();
		$user = $model1->find($service['id_fournisseur']);
		
		$imagesModel = new ImageModel($db);
		$images = $imagesModel->where($user['id']);

		

		

		$avis = Avis::showAvis();
		
		$data = [
				
			'username' => $user['username'],
			'nom' => $user['nom'],
			'prenom' => $user['prenom'],
			'date_naissance' => $user['date_naissance'],
			'num_telephone_perso' => $user['num_tel_perso'],
			'wilaya' => $user['wilaya'],
			'daira' => $user['daira'],
			'commune' => $user['commune'],
			'codepostale' => $user['code_postal'],
			'email' => $user['email'],
			'profile_img_url' => $user['profile_image_url'],
			'titre' => $service['titre'],
			'description' => $service['description'],
			'tarif' => $service['tarif'],
			'duree_delivration' => $service['duree_delivration'],
			'date_mise_enligne' => $service['date_mise_enligne'],
			'categorie' => $service['categorie'],
			'images' => $images,
			'serviceid' => $id,
			'avis' => $avis,
			
		];
		
		
		return view('servicePage', $data);

	}

	public static function serviceData($id) {
        $db = db_connect();
		$model = new Ajoutservice($db);		
		$service = $model->find($id);
		$model1 = new UserModel();
		$user = $model1->find($service['id_fournisseur']);
		
		$imagesModel = new ImageModel($db);
		$images = $imagesModel->where($user['id']);


		

		

		
		
		$data = [
				
			'username' => $user['username'],
			'nom' => $user['nom'],
			'prenom' => $user['prenom'],
			'date_naissance' => $user['date_naissance'],
			'num_telephone_perso' => $user['num_tel_perso'],
			'wilaya' => $user['wilaya'],
			'daira' => $user['daira'],
			'commune' => $user['commune'],
			'codepostale' => $user['code_postal'],
			'email' => $user['email'],
			'profile_img_url' => $user['profile_image_url'],
			'titre' => $service['titre'],
			'description' => $service['description'],
			'tarif' => $service['tarif'],
			'duree_delivration' => $service['duree_delivration'],
			'date_mise_enligne' => $service['date_mise_enligne'],
			'categorie' => $service['categorie'],
			'images' => $images,
			'serviceid' => $id,
			
			
		];

        return $data;
    }



	

	

	
}