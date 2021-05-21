<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content')?>

 <!-- message de succés ou erreur -->
 <?php if (session()->getFlashdata()): ?>
          <div class="bg-green-500 border-2 border-green-700 text-green-900 m-3 p-3 rounded-md shadow-md" >
            <?= session()->getFlashdata('success') ?>
          </div>
        <?php endif; ?>

<div class="flex justify-center">
  <div class="flex flex-col w-3/4 p-5 m-5 divide-y-2 divide-gray-700 bg-gray-100 shadow-md rounded-md">
    <div class="flex justify-between  items-center">
      <h3>Nombre de services: <?= $nombre_services?></h3>
      <a href="/services/ajout" class="rounded-md shadow-md bg-green-400 text-white m-2 p-2 px-3 hover:bg-green-300 font-semibold l">Ajouter un service</a>
    </div>
    

     <?php foreach($results as $result):?>
        <!-- services cards -->
        <div class="flex justify-center">
          <div class="flex items-center p-3 m-2  w-full">
            <img class="w-40 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8f57XRrYoWPdX9NQssA79oCwvBVaTnSDEkA&usqp=CAU" alt="">
            <div class="flex flex-col mx-5 w-full">
              <h3><?=$result->titre ?></h3>
              <p><?=$result->description ?></p>
              <div class="flex">
                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result->categorie ?></p>
                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result->tarif ?> DA</p>
                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result->duree_delivration ?> Jours</p>
              </div>
              <div class="flex  space-x-3 justify-end">
                  <a href="#" class="bg-green-600 p-2 rounded-md ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                  </a>
          
                  <a href="/Services/delete/<?=$result->id_service ?>" class="bg-red-600 p-2 rounded-md ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </a>
          
          
              </div>
        
            </div>
          </div>
        </div>
  
  

      <?php endforeach; ?> 
  
  
  


  
  </div>
</div>

<?= $this->endSection() ?>