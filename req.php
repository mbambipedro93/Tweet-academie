<?php
include "database.php";

  if (isset($_POST["submit"])) {
    if (isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["birthdate"]) && isset($_POST["city"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["gender"])) 
      {

      $name = $_POST["name"];
      $username = $_POST["username"];
      $birthdate = $_POST["birthdate"];
      $city = $_POST["city"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $password_hashed = hash("ripemd160", $password);
      $gender = $_POST["gender"];
      $dateNow = date("Y-m-d");
      
      $calcul_age = date_diff(date_create($birthdate), date_create($dateNow));
      $age = $calcul_age->format("%y");
      // echo $age;
      // echo "Vous avez " . $age . " ans";


      $isUsernameAlreadyUse = false;
      
      $req_check_user = "SELECT username FROM user WHERE usermane LIKE '$username'";
      $prep_check_user = $link->prepare($req_check_user);
      $prep_check_user->execute();
      $fetch_check_user = $prep_check_user->fetchAll();
      print_r($fetch_check_user);
      foreach($fetch_check_user as $username) {
        echo $username["username"];
      }

       
      if ($age < 18) {
        echo "Vous n'avez pas l'age minimum pour vous inscrire !";
      } else {
        echo "Vous êtes inscrit !";
        $req_create_user = "INSERT INTO user(banner, avatar, email, password, name, username, birthdate, gender, city) VALUES('https://tinyurl.com/ycku5ym8', 'https://tinyurl.com/ycku5ym8','$email', '$password_hashed', '$name', '$username', '$birthdate', '$gender', '$city')";
        $prep_req_user = $link->prepare($req_create_user);
        $prep_req_user->execute();
        }

        
      }

      
    }
?>
