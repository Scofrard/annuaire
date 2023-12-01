<?php

$title = "Modifier un contact";
include('./partials/header.php');

?>


<div class="bg-white mt-12 mb-12 pt-10 pb-10 pl-5 pr-5 rounded-xl shadow-2xl sm:mx-auto sm:w-full  md:max-w-xl xl:max-w-2xl">

    <div class="flex content-center justify-center items-center">
        <img style="width:220px; margin-bottom:20px;" src="./assets/logoannuaire.png">
    </div>

    <h1 class="text-center font-bold text-3xl">Modifier le contact</h1>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg xl:max-w-2xl">


        <form action="admin/admin_gestion_contact.php" method="POST">

            <div class="grid gap-2 md:grid-cols-2">
                <div class="mr-4 ml-4">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="nom">Nom</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="text" id="nom" name="nom" placeholder="Nom">
                </div>

                <div class="mr-4 ml-4">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="prenom">Prénom</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="text" id="prenom" name="prenom" placeholder="Prénom">
                </div>
            </div>

            <div class="grid gap-2 md:grid-cols-2">
                <div class=" ml-4 mr-4 mt-6">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="email">E-mail</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="email" id="email" name="email" placeholder="E-mail">
                </div>

                <div class="mr-4 ml-4 mt-6 mb-6">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="telephone">Téléphone</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="tel" id="telephone" name="telephone" placeholder="Téléphone">
                </div>
            </div>

            <div class="mr-4 ml-4">
                <label class="block text-gray-600 font-light text-sm mb-1" for="confirm_mdp">Adresse</label>
                <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="text" id="adresse" name="adresse" placeholder="Adresse">
            </div>

            <div class="m-4 mt-10 text-center">
                <button type="submit" value="bModifier" class="bg-gradient-to-b from-[#533daf] from-30% to-[#2A1F58] to-90% text-white text-lg font-bold px-8 py-2 rounded-xl hover:bg-orange-600">Modifier</button>
            </div>

        </form>

    </div>

</div>


<?php include_once("./partials/footer.php") ?>