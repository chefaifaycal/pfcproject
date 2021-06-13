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

            
                <?php if (isset($data)) : ?>
                        <?php foreach($data as $row) : ?>
                            <div class="flex">
                                <?= $row['user_rating'] ?>
                            </div>
                        <?php endforeach; ?>
                <?php endif; ?>
            

            
            
        </div>
        <!-- End of ratting system -->
   </div>
   <div class="flex flex-col bg-gray-200 w-2/5 h-screen shadow-md m-3 p-5 rounded-md ">
        <div class="flex flex-col items-center">
            <a class="rounded-md shadow-md text-white font-semibold bg-blue-500 m-2 p-3" href="#">Commander</a>
            <a class="rounded-md shadow-md text-white font-semibold bg-green-500 m-2 p-3" href="#">Contacter le fournisseur</a>
        </div>

        <div class="flex flex-col items-center w-full">
            <img src="<?= $profile_img_url?>" alt="" class="h-28 w-28 object-center rounded-full mb-3 ">
            <h3><?= $username?></h3>
            <div class="flex flex-col">
                <div class="flex justify-between">
                    <p>Adresse :</p>
                    <p><?= $wilaya?>, <?= $daira?>, <?= $commune?></p>
                </div>
            </div>
        </div>
   </div>
    
</div>
    

<?= $this->endSection() ?>



