<?php

include __DIR__ . "/Includes/header.php";
?>
<main>

    <div class="flex items-center justify-center h-screen">
        <div class="w-3/4 md:w-1/2 h-1/2 bg-gray-100 p-8 rounded-lg">
            <h1 class="h-1/4 text-center text-3xl font-bold mb-4">Bienvenue</h1>
            <label for="email" class=" block text-gray-700 font-semibold mb-2">Email*</label>
            <input id="email" class=" w-full bg-white border border-gray-300 rounded-md py-2 px-4 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" placeholder="Entrez votre adresse e-mail" />
            <label for="password" class=" block text-gray-700 font-semibold mb-2">Mot de passe*</label>
            <input id="password" class=" w-full bg-white border border-gray-300 rounded-md py-2 px-4 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" placeholder="Entrez votre mot de passe" />
            <?php if (isset($erreur)) { ?>
                <div class="echec">
                    <p>Mot de passe ou identifiant incorrect.</p>
                </div>
            <?php } ?>
            <div class="h-1/6 flex items-center justify-center ">

                <button class=" mx-auto w-32 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md" type="submit">Connexion</button>
            </div>

        </div>
    </div>



</main>
<?php
include __DIR__ . "/Includes/footer.php";

?>