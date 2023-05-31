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
      setcookie("connect", $id, time() + (86400*30));
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
          header('Location: profil_utilisateur2.php');
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