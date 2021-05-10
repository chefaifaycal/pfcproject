<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

<div class="flex flex-col items-center bg-gray-50 md:bg-white">
  <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
    <form action="/" method="post" class="flex flex-col bg-gray-50 rounded-md items-center h-auto md:w-1/2 m-20 p-10 md:shadow-md">
  
    <input type="email" name="email" id="email" placeholder="Adresse mail" class="form-control m-2 p-2 rounded-md border-2 border-blue-400 focus:border-blue-500 shadow-md">
    <input name="password" id="password" type="password" placeholder="Votre mot de passe" class="form-control m-2 p-2 rounded-md border-2 border-blue-400 focus:border-blue-500 shadow-md">
      <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
      
    <a href="#" class="text-blue-400 text-sm md:ml-20 ">Mot de passe oublié ?</a>
    
    <button type="submit" class="bg-blue-500 rounded py-2 px-4 text-white shadow-sm my-4 mr-28 hover:bg-blue-400">Connexion</button>
    <p class="text-gray-900 text-md">Vous n'avez pas de compte? <a href="/register" class="text-blue-400 font-semibold">Inscrivez-vous</a></p>
      
  
  
</form>
</div>
  

  


<?= $this->endSection() ?>