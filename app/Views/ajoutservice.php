<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content')?>

<div class="flex flex-col items-center bg-gray-50 md:bg-white ">
  
  <form action="/Services/ajout" method="post" class ="flex flex-col bg-gray-50 md:shadow-md reounded-md items-center h-auto w-1/2 p-3 px-10 m-10">
    <?= csrf_field() ?>
    <input  name ="titre" type="text" placeholder="Titre du service" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md w-full ">
    
    <textarea name="description" id="" cols="30" rows="10" placeholder="Description du service" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full"></textarea>
    
    <select name="categorie" id="" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full">
      <option value="massonerie" >Massonerie</option>
      <option value="elecricite">Electricité</option>
      <option value="peinture">Peinture</option>
    </select>
    
    <input name="tarif" type="text" placeholder="Tarif du service en DA" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full">
    
    <input name="duree" type="text" placeholder="Durée de delivration en Jours" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full">
    
    <input name="dureevalidite" type="text" placeholder="Durée de validité en Jours" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full">
    
    <button class="m-2 p-2 px-3 rounded-md shadow-md bg-blue-500 text-white hover:bg-blue-400  ">Uploder des images</button>
    
    <button name="ajoutservice" type="submit" class="rounded-md shadow-md bg-green-400 text-white m-2 p-2 px-3 hover:bg-green-300 font-semibold l">Ajouter le service </button>
    
  </form>
</div>

<?= $this->endSection() ?>

