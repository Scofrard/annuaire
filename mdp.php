<?php

$title = "Page Mot de passe oublié";
include('./partials/header.php');
session_start();
?>


<div class="bg-white mt-12 mb-12 pt-10 pb-10 pl-5 pr-5 rounded-xl shadow-2xl sm:mx-auto sm:w-full  md:max-w-xl xl:max-w-2xl">

    <div class="flex content-center justify-center items-center">
        <img style="width:220px; margin-bottom:20px;" src="./assets/logoannuaire.png">
    </div>

    <h1 class="text-center font-bold text-3xl">Mot de passe oublié ?</h1>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg xl:max-w-2xl">

        <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) : ?>
            <div class="bg-red-500 text-white text-center p-2 mb-6 rounded">
                <?php foreach ($_SESSION['errors'] as $erreur) : ?>
                    <p><?php echo $erreur; ?></p>
                <?php endforeach; ?>
            </div>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>



        <form action="admin/admin_modifier_mdp.php" method="POST">

            <div class="ml-4 mr-4 mt-6 mb-6">
                <label class="block text-gray-600 font-light text-sm mb-1" for="nom_utilisateur">Nom d'utilisateur</label>
                <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="text" id="nom_utilisateur" name="nom_utilisateur" placeholder="Nom d'utilisateur">
            </div>

            <div class="mr-4 ml-4 mt-6 mb-4">
                <label class="block text-gray-600 font-light text-sm mb-1" for="question">Question secrète</label>
                <select class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" id="question" name="question">
                    <option value="select_question" disabled selected>Sélectionnez une question</option>
                    <option value="question1">Quel est le nom de votre premier animal de compagnie ?</option>
                    <option value="question2">Quelle est la ville de naissance de votre mère ?</option>
                    <option value="question3">Quel est le nom de votre professeur préféré ?</option>
                </select>
            </div>

            <div class="mr-4 ml-4 mt-6 mb-6">
                <label class="block text-gray-600 font-light text-sm mb-1" for="reponse">Réponse</label>
                <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="text" id="reponse" name="reponse" placeholder="Réponse">
            </div>


            <div class="grid gap-2 md:grid-cols-2">
                <div class="mr-4 ml-4 mb-6">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="password">Nouveau mot de passe</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="password" id="mdp" name="mdp" placeholder="Nouveau mot de passe">
                </div>

                <div class="mr-4 ml-4">
                    <label class="block text-gray-600 font-light text-sm mb-1" for="confirm_mdp">Confirmation mot de passe</label>
                    <input class="shadow-lg border border-[#533daf] py-2 px-2 w-full rounded-md focus:shadow-lg" type="password" id="confirm_mdp" name="confirm_mdp" placeholder="Confirmation mot de passe">
                </div>
            </div>


            <div class="m-4 mt-10 text-center">
                <button type="submit" name="bConfirmer" class="bg-gradient-to-b from-[#533daf] from-30% to-[#2A1F58] to-90% text-white text-lg font-bold px-8 py-2 rounded-xl hover:bg-orange-600">Confirmer</button>
            </div>

        </form>

    </div>

</div>


<?php include_once("./partials/footer.php") ?>