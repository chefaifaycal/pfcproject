<?= $this->extend('layouts/html') ?>
<?= $this->section('content')?>

  <!-- dashboard navigation -->
<div class="grid grid-cols-4">
  <div class="flex flex-col bg-gray-900 shadow-lg h-full min-w-full text-white items-center">
    <div class="flex flex-col items-center py-5">
      <img src="<?= $profile_img_url?>" alt="" class="h-40 w-40 object-center rounded-full mb-3 ">
      <span><?= $nom?> <?= $prenom?> </span>
      <span>@<?= $username?></span>
    
    </div>
  
    <a href="#" class=" block p-3 hover:bg-gray-800 w-full ">Mon profile</a>
    <a href="/Services" class=" block p-3 hover:bg-gray-800 w-full ">Mes services</a>
    <a href="#" class="block p-3 hover:bg-gray-800 w-full ">Mes commandes</a>
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

    <!-- Ceci est la partie ou s'affiche quelques statistiques -->
    <div class="flex justify-center m-5 space-x-5">
      <div class=" flex flex-col items-center rounded-md bg-blue-500 shadow-md w-48 h-48 font-semibold text-white p-3 ">
        <h2>Nombre de services actif</h2>
        <h1 class="text-7xl">3</h1>
      </div>

      <div class=" flex flex-col items-center rounded-md bg-blue-500 shadow-md w-48 h-48 font-semibold text-white p-3 ">
        <h2>Nombre de commandes</h2>
        <h1 class="text-7xl">5</h1>
      </div>
    </div>

    <!-- cette partie affiche les donnée personnel de l'utilisateur -->
    <div class="flex justify-center p-5 m-5 bg-gray-100 shadow-md rounded-md">
      <div class="divide-y-2 divide-gray-700 w-3/4">
        <div class="flex items-center space-x-2 p-3 ">
          <img class="w-6 h-6" src="https://img.icons8.com/pastel-glyph/64/000000/person-male--v3.png"/>
          <h3>Informations Personnel</h3>
        </div>
        <div class="flex flex-col py-4 px-5 space-y-2">
          <div class="flex justify-between">
              <div class="flex space-x-3">
                <p class="font-semibold">Nom:</p>
                <p><?= $nom?></p>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
              </svg>
          </div>
    
      <div class="flex justify-between">
        <div class="flex space-x-3">
          <p class="font-semibold">Prénom:</p>
          <p><?= $prenom?></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
        </svg>
      </div>
    
      <div class="flex justify-between">
        <div class="flex space-x-3">
          <p class="font-semibold">Nom d'utilisateur:</p>
          <p><?= $username?></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
        </svg>
      </div>
    
      <div class="flex justify-between">
        <div class="flex space-x-3">
          <p class="font-semibold">Date de naissance:</p>
          <p><?= $date_naissance?></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
        </svg>
      </div>
    
    <div class="flex justify-between">
      <div class="flex space-x-3">
        <p class="font-semibold">Adresse:</p>
        <p>El Flaye, Sidi Aich, Bejaia 06043</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
    </div>
    
    <div class="flex justify-between">
      <div class="flex space-x-3">
        <p class="font-semibold">Numéro de téléphone:</p>
        <p><?= $num_telephone_perso?></p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
    </div>
    
    <div class="flex justify-between">
      <div class="flex space-x-3">
        <p class="font-semibold">Adresse mail:</p>
        <p><?= $email?></p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
    </div>
    
    
  </div>
</div>
</div>
    
  </div>
    
    
    
  
</div>




<!-- dashboard content -->

<?= $this->endSection() ?>