<?php namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
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