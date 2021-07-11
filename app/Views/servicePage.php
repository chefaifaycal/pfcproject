<?= $this->extend('layouts/clientdashboard.php') ?>
<?= $this->section('content')?>

<div class="flex justify-between ">
   <div class="flex flex-col items-center bg-gray-200 w-3/5 h-auto shadow-md m-3 p-5 rounded-md ">
        <h2 class="font-semibold text-2xl"><?= $titre ?></h2>   
        <div class="bg-gray-400 border-black border-2 w-full h-1/2 my-3">
           
            

            
        </div>
        <div class="flex flex-col space-y-3 ">
            <p class="font-semibold">DESCRIPTION</p>
            <p><?= $description ?></p>
        </div>

        <!-- ratting system -->
        <div class="flex flex-col mt-5">
            <form action="/Avis/index/<?= $serviceid ?>" method="post" class="flex flex-col items-center space-y-3">
                <input class="w-full p-2 border-2 border-blue-500 rounded-md" type="number" placeholder="Votre note sur 5" name="note">
                <textarea class="w-full p-2 border-2 border-blue-500 rounded-md" name="comment" id="" cols="30" rows="5" placeholder="Votre commentaire"></textarea>
                <button type="submit" class="modal-open bg-blue-500  text-white  font-bold py-2 px-4 rounded-md">Ajouter un avis</button>
            </form>

            
                <?php if (isset($avis) ) : ?>
                        <?php foreach($avis as $row) : ?>
                            <div class="flex flex-col w-full shadow-md  m-2 p-3 bg-white">
                            <p class="font-semibold text-xl "><?= $row['username'] ?></p>
                                <div class="flex  ">
                                    
                                    
                                    <div class="flex">
                                        <?php for ($x = 1; $x <= $row['user_rating']; $x++): ?> 
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="yellow" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        <?php endfor; ?> 
                                    </div>

                                </div>
                                
                                <?= $row['user_review'] ?>
                                
                            
                            </div>
                        <?php endforeach; ?>

                        
                <?php endif; ?>
                
                
               
                    
                    
                
               
                
            
                
               
                
                

            
            
        </div>
        <!-- End of ratting system -->
   </div>
   <div class="flex flex-col bg-gray-200 w-2/5 h-screen shadow-md m-3 p-5 rounded-md ">
        <div class="flex flex-col items-center">
            <a class="rounded-md shadow-md text-white font-semibold bg-blue-500 m-2 p-3" href="/Services/commander/<?= $serviceid ?>">Commander</a>
            <a class="rounded-md shadow-md text-white font-semibold bg-green-500 m-2 p-3" href="#">Contacter le fournisseur</a>
        </div>

        <div class="flex flex-col items-center w-full">
            <img src="<?= $fournisseurData['profile_img_url'] ?>" alt="" class="h-28 w-28 object-center rounded-full mb-3 ">
            <h3><?= $fournisseurData['username']?></h3>
            <div class="flex flex-col">
                <div class="flex justify-between">
                    <p>Adresse :</p>
                    <p><?= $fournisseurData['wilaya'] ?>, <?= $fournisseurData['daira'] ?>, <?= $fournisseurData['username']?></p>
                </div>
            </div>
        </div>
   </div>
    
</div>
    

<?= $this->endSection() ?>



