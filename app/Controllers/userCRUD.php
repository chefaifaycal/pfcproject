<?php

namespace App\Controllers;

use App\Models\UserCRUDModel;

class userCRUD extends BaseController
{
	function index()
	{
		//echo 'Hello Codeigniter 4';

		$userModel = new UserCRUDModel();
        $user = $userModel->where('username','faycal11')
                          ->first();
		
                   
	}
}

?>
