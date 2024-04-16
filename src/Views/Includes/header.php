<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon</title>
    <?php if (isset($_SESSION['connecté'])) { ?>

        <script>
            const HOME_URL = "<?= HOME_URL ?>";
        </script>

    <?php } ?>

</head>

<body>
    <header>
        <nav class="font-sans flex flex-row text-center content-center sm:flex-row sm:text-left justify-between py-2 px-6 bg-slate-50 shadow sm:items-baseline w-full">



            <div class="w-32">
                <span class="font-bold text-2xl no-underline text-grey-darkest">Simplon</span>
            </div>


            <div class=" w-42 sm:mb-0 self-center">
                <?php if (isset($_SESSION['connecté'])) { ?>
                    <a href="<?= HOME_URL ?>deconnexion" class="font-bold text-2xl no-underline text-grey-darkest hover:text-blue-dark ">Déconnexion</a>
                <?php } else { ?>
                    <a href="<?= HOME_URL ?>connexion" class="font-bold text-2xl no-underline text-grey-darkest hover:text-blue-dark ">Connexion</a>
                <?php } ?>

            </div>
        </nav>

    </header>