<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\MetierModel;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		
		

			if ($this->request->getMethod() == 'post') {
				
				$rules = [
					'email' => 'required',
					'password' => 'required',
				];

				

				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new UserModel();

					$user = $model->where('email', $this->request->getVar('email'))
												->first();

					$this->setUserSession($user);
					//$session->setFlashdata('success', 'Successful Registration');
					
					

					if($user['type'] == 'fournisseur'){
						return redirect()->to('dashboard/');
					}else return redirect()->to('dashboard/client');
					

				}
			}
	

		
		
		return view('login',$data);
		
	}



	private function setUserSession($user){
		$data = [
			'userid' => $user['id'],
			'firstname' => $user['nom'],
			'lastname' => $user['prenom'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}


	public function register()
	{
		
		$data = [];
		helper(['form']);
		
		
		if($this->request->getMethod() == 'post'){
			$rules = [
				'nom' => 'required|min_length[3]|max_length[50]',
				'prenom' => 'required|min_length[3]|max_length[50]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
				'username' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
				'dateNaissance' => 'required',
				'persoNumb' => 'required|min_length[10]|max_length[10]',
				'proNumb' => 'required|min_length[10]|max_length[10]',
				'dateMetier' => 'required',

			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'type' => "fournisseur",
					'metier' => $this->request->getVar('metier'),
					'username' => $this->request->getVar('username'),
					'nom' => $this->request->getVar('nom'),
					'prenom' => $this->request->getVar('prenom'),
					'date_naissance' => $this->request->getVar('dateNaissance'),
					'num_tel_perso' => $this->request->getVar('persoNumb'),
					'num_tel_pro' => $this->request->getVar('proNumb'),
					'wilaya' => $this->request->getVar('wilaya'),
					'daira' => $this->request->getVar('daira'),
					'commune' => $this->request->getVar('commune'),
					'code_postal' => $this->request->getVar('postalcode'),
					'email' => $this->request->getVar('email'),
					'pwd' => $this->request->getVar('password'),
					'date_debut_metier' => $this->request->getVar('dateMetier'),
					
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}
		}



		
		echo view('register');
		
	}

	public function client()
	{
		$data = [];
		helper(['form']);
		
		if($this->request->getMethod() == 'post'){
			$rules = [
				'nom' => 'required|min_length[3]|max_length[50]',
				'prenom' => 'required|min_length[3]|max_length[50]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
				'username' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
				'dateNaissance' => 'required',
				'persoNumb' => 'required|min_length[10]|max_length[10]',
				
				

			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'type' => "client",
					'username' => $this->request->getVar('username'),
					'nom' => $this->request->getVar('nom'),
					'prenom' => $this->request->getVar('prenom'),
					'date_naissance' => $this->request->getVar('dateNaissance'),
					'num_tel_perso' => $this->request->getVar('persoNumb'),
					'wilaya' => $this->request->getVar('wilaya'),
					'daira' => $this->request->getVar('daira'),
					'commune' => $this->request->getVar('commune'),
					'code_postal' => $this->request->getVar('postalcode'),
					'email' => $this->request->getVar('email'),
					'pwd' => $this->request->getVar('password'),
					
					
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}
		}



		
		echo view('registerclient');
		
	}



	

	public function logout(){
		$session = session();
		$session->destroy();

		return redirect()->to('/');
	}

	public function preregister() {
		return view('preRegistrationView');
	}

}
