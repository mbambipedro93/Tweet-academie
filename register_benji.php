<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./theme.js" defer></script>
    <title>Accueil</title>
</head>
<button id="theme-btn">Changer de thème</button>
<body>
    <div class="BG"></div>
    <header>
        <nav>
        </nav>
    </header>
    <main>
        <div class="log_in">
            <div>

                <ul>
                    <li><a href="register_benji.php">Connexion</a></li>
                    <li><a href="inscription_benji.php">inscription</a></li>

                </ul>
            </div>
            <div name="connexion">
                <h4>
                    <p><strong>connexion</strong></p>
                </h4>
                <form name="connexion" method="POST" action="register_benji.php">
                    <input name="username" type="text" placeholder="Pseudo" required autocomplete="off"> <br>
                    <input name="password" type="password" placeholder="mdp" required autocomplete="off"><br>
                    <button name="valider" type="submit">Connexion</button>
            </div>
        </div>

    </main>
    <footer></footer>
</body>

<?php

session_start();

require("req.php");


if (isset($_POST['valider'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hashed = hash("ripemd160", $password);
   if (!empty($_POST['username']) && !empty($_POST['password'])) {

      $requsers = $link->prepare("SELECT * FROM users WHERE username = '$username' AND password = '$password_hashed'");
      $requsers->execute();
      $fetch = $requsers->fetchAll();
      foreach($fetch as $donnee){
         $id = $donnee['id'];
         var_dump($fetch);
      }
      setcookie("bazou", $id, time() + (86400*30));
      // var_dump($fetch) . "\n";
      foreach($fetch as $infos) {
         echo $infos["password"];
      }
      // var_dump($fetch["5"]) . "\n";


      if($requsers->rowCount() > 0 && in_array($password_hashed, $infos)){

         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password_hashed;
         $_SESSION['id'] = $requsers->fetch()['id'];
         // echo $password_hashed;
         // var_dump(hash_equals($password, $password_hashed));
         echo "CONNEXION REUSSIE";
          header('Location: profil.php');
         exit;

        }
        else{
           echo 'Mot de passe ou pseudo incorrect !';
         }

      } else {
         echo 'Veuillez renseignez tous les champs!';
      }


   }
?>
</html>