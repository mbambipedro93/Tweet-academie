<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="1.css">
    <!-- <script src="/JS/theme.js" defer></script> -->
    <script src="/JS/script.js"></script>
    <title>Accueil</title>

</head>

<button id="theme-btn">Changer de thème</button>

<body class="inscription">
    <div class="BG"></div>
    <header>
        <nav class="test">
            <strong>
                <h3>Africa Twitter</h3>
            </strong>
            <ul>
               
                <li><a href="register_benji.php">Connexion</a></li>
                <li><a href="inscription_benji.php">inscription</a></li>

            </ul>
        </nav>
    </header>
    <main>

        <div class="inscription">
            <h4>
                <p><strong>inscription</strong></p>
            </h4>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">
                    <form class="inscription" id="formulaire" name="inscription" method="POST" action="req.php">

                        <label for="banner">Banner:</label>
                        <input type="file" id="banner" name="banner"> <br>

                        <label for="avatar">Avatar:</label>
                        <input type="file" id="avatar" name="avatar"><br>
                        <br>
                        <label for="email"></label>
                        <input name="email" type="text" placeholder="email" required autocomplete="off"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            title="Veuiller entre une adresse email valide ! EXEMPLE : olivier@olivier.fr"> <br>

                        <label for="password"></label>

                        <input name="password" type="password" required autocomplete="off" placeholder="mot de passe"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                            title="Votre mot de passe doit contenir au moins un chiffre, une majuscule et une longueur de 6 caractères minimum"><br>

                        <label for="name"></label>
                        <input type="text" id="name" name="name" required placeholder="Nom"><br>

                        <label for="username"></label>
                        <input type="text" id="username" name="username" required placeholder="Pseudo"><br>

                        <label for="birthdate"></label>
                        <input type="date" id="birthdate" name="birthdate" required placeholder="Date de naissance ">
                        <br>

                        <label for="gender"></label>
                        <select id="gender" name="gender" required>
                            <option value="">Genre</option>
                            <option value="Homme">Male</option>
                            <option value="Femme">Female</option>
                            <option value="Autre">Other</option>
                        </select> <br>

                        <label for="city"></label>
                        <input type="text" id="city" name="city" placeholder="Ville" required><br>

                        <label for="bio"></label>
                        <textarea id="bio" name="bio" placeholder="BIO"></textarea><br>

                        <input type="submit" name="submit" value="Inscription">

                        </p>
                        <ul>
                            <li><a href="AfricaTwitter.html">Accueil</a></li>
                            <li><a href="register.php">Connexion</a></li>
                            <li><a href="inscription.php">inscription</a></li>

                        </ul>
                    </form>
                </div>
            </div>


        </div>
    </main>
    <footer></footer>
    <?php

    ?>

</body>

</html>