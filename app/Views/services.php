<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content')?>

<div class="flex justify-center">
  <div class="flex flex-col w-3/4 p-5 m-5 divide-y-2 divide-gray-700 bg-gray-100 shadow-md rounded-md">
    <div class="flex justify-between  items-center">
      <h3>Nombre de services: <?= $nombre_services?></h3>
      <a href="/services/ajout" class="rounded-md shadow-md bg-green-400 text-white m-2 p-2 px-3 hover:bg-green-300 font-semibold l">Ajouter un service</a>
    </div>
    

     <?= foreach($results as $result) :?>
        <div>
          <p><?=print_r($result->titre)?></p>
        </div>

      <?= endforeach; ?> 
  
  
  


  
  </div>
</div>

<?= $this->endSection() ?>