<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MetierModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$id = session('userid');
		$model = new UserModel();
		$model1 = new MetierModel();
		$user = $model->find($id);

		$metier_id = $user['metier'];
		$metier = $model1->find($metier_id);
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
				'date_debut_metier' => $user['date_debut_metier'],
				'metier' => $metier['nom_metier'],
			];
		}

		return view('dashboardView', $data);

		
		
		
	}

	public function client(){
		$id = session('id');
		$model = new UserModel();
		$user = $model->find($id);
		if($user){
			$data = [
				'type' => $user['type'],
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

		return view('clientDashboardView', $data);
	}

	//--------------------------------------------------------------------
}