<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

    <div class="flex items-center justify-center ">
        <div class="flex flex-col ">
            <div class="flex justify-center">
                <h3 class="font-semibold text-xl">Qui etes-vous ?</h3>
            </div>
            
            <div class="flex">
                <a href="/client">
                    <div class="flex flex-col bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md shadow-md w-40 h-40 m-3 justify-center items-center">
                        <h3>Un Client</h3>
                    </div>
                </a>    
                
                <a href="/register">
                    <div class="flex flex-col bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-md shadow-md w-40 h-40 m-3 justify-center items-center">
                        <h3>Un Fournisseur</h3>
                    </div>
                </a>

            </div>
        </div>
    </div>

<?= $this->endSection() ?>