<?= $this->extend('layouts/clientdashboard.php') ?>
<?= $this->section('content')?>

        <!-- main content -->
    <div class="flex flex-col justify-center m-5">
        <div class="flex  justify-center">
            <h3 class="font-semibold text-2xl">Que chercher vous ?</h3>
        </div>
        <form action="/services/recherche" method="post" class="flex flex-col items-center justify-center " >
            
               
                    
                    <select name="categories" id="" class="m-2 rounded-md border-2 p-2  border-blue-500 w-1/3">
                        <option value="" disabled selected>--Choisir une catégorie</option>
                        <option value="massonerie">Maçonnerie</option>
                        <option value="elecricite">Electricité</option>
                    </select>
                  

               
                    
                    <select name="wilayas" id="" class="m-2 rounded-md border-2 p-2  border-blue-500 w-1/3">
                        <option value="" disabled selected>--Choisir une Wilaya</option>
                        <option value="Béjaia">Béjaia</option>
                    </select>
                  

                    
                    <select name="dairas" id="" class="m-2 rounded-md border-2 p-2  border-blue-500 w-1/3">
                        <option value="" disabled selected>--Choisir une Daira</option>
                        <option value="Sidi Aich">Sidi Aich</option>
                        <option value="Chemini">Chemini</option>
                    </select>
               

                
                    
                    <select name="communes" id="" class="m-2 rounded-md border-2 p-2  border-blue-500 w-1/3">
                        <option value="" disabled selected>--Choisir une Commune</option>
                        <option value="El Flaye">El Flaye</option>
                    </select>
                

                
                    <input name="tarif" type="number" placeholder="Le tarif maximum en DA" class="m-2 rounded-md border-2 p-2  border-blue-500 w-1/3">
                
            

            <button type="submit" class="bg-blue-500 rounded p-3 text-white shadow-sm  hover:bg-blue-400">Rechercher</button>
        </form>

        
        
            <?php if (isset($results)): ?>
                <?php foreach($results as $result):?>
                    <div class="flex justify-center bg-gray-100 shadow-md rounded-md m-2 ">
                        <div class="flex items-center p-3 m-2  w-full">
                            <img class="w-40 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8f57XRrYoWPdX9NQssA79oCwvBVaTnSDEkA&usqp=CAU" alt="">
                            <div class="flex flex-col mx-5 w-full">
                            <h3 class="font-bold"><?=$result['titre'] ?></h3>
                            <p><?=$result['description'] ?></p>
                            <div class="flex">
                                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result['categorie'] ?></p>
                                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result['tarif'] ?> DA</p>
                                <p class="bg-blue-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2"><?=$result['duree_delivration'] ?> Jours</p>
                            </div>
                            <div class="flex justify-end">
                                <a href="/Services/consulter/<?= $result['id_service'] ?>" class="bg-gray-500 font-bold text-sm text-white rounded-md shadow-md p-2 m-2">Consulter</a>
                            </div>

                            <div class="flex justify-end">
                                <p class="font-semibold">Date de mise en ligne : </p><?= $result['date_mise_enligne']?>
                            </div>
                            
                        
                            </div>
                        </div>
                     </div>
                <?php endforeach; ?> 
            <?php endif; ?>        
           

        
    </div>
    <!-- end of the main section -->








    <?= $this->endSection() ?>