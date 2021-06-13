<?php

namespace App\Controllers;

use App\Models\AvisModel;
use App\Models\Ajoutservice;
use App\Models\UserModel;
use App\Models\ImageModel;

class Avis extends BaseController
{
	public function index($serviceid)
	{
        if($this->request->getMethod() == 'post'){
            
            $model = new AvisModel();
            
		    $data = [
                'user_id' => session('userid'),
                'service_id' => $serviceid,
                'user_rating' => $this->request->getVar('note'),
                'user_review' => $this->request->getVar('comment'),
                
            ];
           
            $model->save($data);
            
            $data = [];
            $data = Services::serviceData($serviceid);
            
            return view('servicePage',$data);

        }


	}

    public static function showAvis(){

        $data = [];
        $users_id = [];
        $model = new AvisModel();
        $data = $model->findAll();

        foreach($data as $row) {
            $users_id['id'] = $row['user_id'];
        } 

        $user = new UserModel();
        $users = $user->find($users_id['id']);

        $avis = [
            'data' => $data,
            'users' => $users,
        ];

        return $avis;
    }

    
}
