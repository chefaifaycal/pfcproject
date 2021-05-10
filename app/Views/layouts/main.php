<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/style.css">
    
    <title>Pfc Project</title>
</head>
<body>

    <!-- navbar goes here -->
    <nav class="bg-blue-600 text-white">
        <!--   se div contient la navbar -->
        <div class="flex justify-between px-8 py-2">
            <!--     se div est le premier fils flex, il contient le logo et le menu -->
            <div class="flex space-x-10 items-center">
            <!--       se dive contient le logo -->
            <div >
                <a href="#" class="flex items-center">
                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667              9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89               11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026               0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0                           00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                <span>Mon Appli</span>
                </a>
            </div>
            
            <!--       se div contient le menu -->
            <div class="space-x-5 hidden md:flex">
                <a href="#" class="hover:text-gray-900">Accueille</a>
                <a href="#" class="hover:text-gray-900">Contact</a>
                <a href="#" class="hover:text-gray-900">A propos</a>
            </div>
            
            </div>
            <!-- secondery navbar -->
            <div class=" hidden md:flex items-center space-x-5">
            <a href="/register" class="text-white font-semibold hover:text-gray-900">Inscription</a>
            <a href="/" class="text-white bg-gray-900 rounded-md p-2 px-3 hover:bg-gray-800 transition duration-300 ">Connexion</a>
            
            </div>
            
            <!-- le hamburger button -->
            <div class="flex md:hidden item-center">
            <button class="mobile-menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6            w-6" fill="none" viewBox="0 0 24 24"                      stroke="currentColor">
                <path stroke-linecap="round" stroke-                        linejoin="round" stroke-width="2" d="M4 6h16M4            12h16M4 18h16" />
            </svg>
            </button>
            </div>
        </div>
        
        <!-- le menu mobile -->
            <div class="mobile-menu md:hidden hidden  py-1">
            <a href="#" class="block py-2 px-8 hover:bg-blue-800">Accueille</a>
            <a href="#" class="block py-2 px-8 hover:bg-blue-800">Contact</a>
            <a href="#" class="block py-2 px-8 hover:bg-blue-800">A propos</a>
            <div class=" flex items-center space-x-5 justify-end p-5">
            <a href="/register" class="text-white font-semibold hover:text-gray-900">Inscription</a>
            <a href="/" class="text-white bg-gray-900 rounded-md p-2 px-3 hover:bg-gray-800 transition duration-300 ">Connexion</a>
            
            </div>
            </div>
        </nav>

        <div>
            <?= $this->renderSection('content') ?>
        </div>


        <script src="assets/mobileNavbarScript.js"></script> 
</body>
</html>