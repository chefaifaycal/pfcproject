<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/assets/style.css">
    
    <title>Pfc Project</title>
</head>
<body>

  <!-- dashboard navigation -->
    <div class="grid grid-cols-4">
        <div class="flex flex-col bg-gray-900 shadow-lg h-full min-w-full text-white items-center">
            <div class="flex flex-col items-center py-5">
                <img src="<?= $profile_img_url?>" alt="" class="h-40 w-40 object-center rounded-full mb-3 ">
                <span><?= $nom?> <?= $prenom?> </span>
                <span>@<?= $username?></span>
    
            </div>
  
            <a href="#" class=" block p-3 hover:bg-gray-800 w-full ">Mon profile</a>
            <a href="#" class="block p-3 hover:bg-gray-800 w-full ">Mes avis</a>
    
  
        </div>
  
  <!-- cette partie est la top navigation -->
        <div class="flex flex-col  col-span-3  ">
            <div class=" flex bg-gray-800 w-full justify-end items-center space-x-5 px-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="white">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                </svg>
                
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 " fill="white" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
        
                <a href="http://localhost/dashboard/logout" class="bg-blue-600 hover:bg-blue-500 rounded-md shadow-md my-3 p-2 px-3 text-white ">Déconnexion</a>
        
            </div>

            <?= $this->renderSection('content') ?>

    
        </div> 
    
    
  
    </div>




<!-- dashboard content -->

</body>
</html>
