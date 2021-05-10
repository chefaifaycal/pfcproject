<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

<div class="flex items-center justify-center bg-gray-50 md:bg-white">
  <form action="/register" method="post" class="flex flex-col bg-gray-50  rounded-md  h-auto md:w-1/2  m-20 p-10 md:shadow-md">
  
    <select name="type" id="" class="m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md  w-full">
      <option value="client" >Client</option>
      <option value="fournisseur">Fournisseur</option>
      
    </select>

    <input type="text" name="nom"  placeholder="Nom" class="form-control m-2 p-2 rounded-md  border-2 border-blue-400 focus:border-blue-500 shadow-md " value="<?= set_value('nom') ?>">
      
    <input name="prenom" type="text" placeholder="Prénom" class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('prenom') ?>">
      <input name="username" type="text" placeholder="Nom d'utilisateur" class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('username') ?>">
      
      <input name="email" type="email" placeholder="Adresse Email" class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('email') ?>">
      
      <div>
        <label for="dateNaissance">Date de naissance</label>
      <input type="date" name="dateNaissance"   class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('dateNaissance') ?>">
      </div>
      
      <input type="phone" name="persoNumb" placeholder="Numero de telephone personnel"  class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('persoNumb') ?>">
      
      <input type="phone" name="proNumb" placeholder="Numero de telephone professionel"  class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('proNumb') ?>">
      
      <div>
        <label for="dateMetier">Date début métier</label>
      <input type="date" name="dateMetier"   class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md" value="<?= set_value('dateMetier') ?>" >
      </div>
      
      <input name="password" type="password" placeholder="Mot de passe" class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md">
      
      <input name="password_confirm" type="password" placeholder="Confirmez votre mot de passe" class="form-control m-2 p-2 rounded-md rounded border-2 border-blue-400 focus:border-blue-500 shadow-md">

  
    
      
      
      
    
    
    <button type="submit" class="bg-blue-500 rounded py-2 px-4 text-white shadow-sm my-4 mr-28 hover:bg-blue-400">Inscription</button>
    <p class="text-gray-900 text-md">Vous avez déja un compte? <a href="/" class="text-blue-400 font-semibold">Connectez-vous</a></p>
      
  
  
</form>

</div>
  


<?= $this->endSection() ?>