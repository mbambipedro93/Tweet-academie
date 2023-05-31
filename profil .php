;<?php
require "req.php";
require "verification.php";
$_SESSION['username'] = $pseudo;
$keep = $_COOKIE["bazou"];

if(isset($_POST['username'])) {
    $username = $_POST["username"];
}

// $req_id = $link->prepare("SELECT id FROM users WHERE username = '$username'");
// $req_id->execute();
// $fetch_id = $req_id->fetchAll();
var_dump($fetch_id);


$req_show_infos = 'SELECT id, name, username, birthdate, email, city FROM users WHERE id = "'.$keep.'" ';
$prep_infos = $link->prepare($req_show_infos);
$prep_infos->execute();
$fetch_infos = $prep_infos->fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="./scss/style.css"> -->
    <link rel="stylesheet" href="1.css">
    <script src="drop.js" defer></script>
    <script src="/JS/test.js" defer></script>

    <title>Profil</title>
</head>

<body>
    <header>
        <nav>
            <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Icon-only">
                    <svg class="bi pe-none" width="40" height="32">
                        <use xlink:href="#bootstrap"><img src="./images/africa.png" alt="afrique " srcset="" width="65">
                        </use>
                    </svg>
                    <span class="visually-hidden">Icon-only</span>
                </a>
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                    <li class="nav-item">
                        <a href="actualites.php" class="nav-link active py-3 border-bottom rounded-0"
                            aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                            data-bs-original-title="Home">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                                <use xlink:href="#home"><img src="./images/home.svg" alt="home" srcset=""></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><img
                                    src="./images/bell.svg" alt="">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders">
                                <use xlink:href="#table"><img src="./images/comment-discussion.svg" alt="" srcset="">
                                </use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="profil.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                                <use xlink:href="#grid"><img src="./images/person.svg" alt="" srcset=""></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                                <img src="./images/plus-circle.svg" alt="" srcset="">
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="dropdown border-top">
                    <a href="profil.php"
                        class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://tinyurl.com/ycku5ym8" alt="mdo" width="24" height="24" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Parametre</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Deconection</a></li>
                    </ul>
                </div>
            </div>

            <!-- <div>
                <img src="/images/africa.png" alt="" width="80">
            </div>
            <div class="logo-nav">

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-dark"><a href="actualites.php"><img src="./images/maison.png"
                                alt="" width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./images/notif.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./images/message.png" alt=""
                                width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="profil.php"><img src="./images/profil.png"
                                alt="" width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./images/logo_plus.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark">Twitter</button>
                </div>
            </div> -->

        </nav>
    </header>

    <main>
        <button id="theme-btn"><img src="./images/sun.svg" alt="" srcset=""></button>



        <div class="card text-center">


            <div class="card-body">

                <div class="PR">

                    <div class="card mb-3">
                        <div class="banner">
                            <img class="card-img-top" alt="..." style="width: 100%; height: 400px;">
                            <?php echo $infos["banner"] ?>

                        </div>

                        <?php foreach ($fetch_infos as $infos): ?>
                            <div class="card-body">
                                <div><img src="https://tinyurl.com/ycku5ym8" class="PPP" alt="...">
                                </div>
                                <h5 class="card-title">
                                    <?php echo $infos["username"] ?>
                                </h5>
                                <div><small class="text-muted">Nom/Prénom :
                                        <?php echo $infos["name"]; ?>
                                    </small>
                                </div>
                                <div><small class="text-muted">Ville :
                                        <?php echo $infos["city"] ?>
                                </div>

                                <div><br></small><small class="text-muted">Compte crée le **/**/**** </small>
                                </div>
                                <div><small class="text-muted">0 Following </small><small class="text-muted">0
                                        Followers</small>
                                </div>
                                <div>
                                <?php endforeach ?>
                                <p class="card-text"><br>This is a wider card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <a href="#" class="modification">Editer le Profil</a>



                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a id="ok" class="nav-link active" aria-current="page" href="">Mes Tweets</a>


                                <!-- </li>
                                <li class="nav-item">
                                    <a id="nav" class="nav-link active" href="">Repost</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active">Likes</a>
                                </li> -->
                        </ul>
                        <div class="card-body">


                            <div class="search-bar">
                                <form action="" method="post">
                                    <input name="twiter" type="text" placeholder="Twitter vos envie">
                                    <button type="submit">
                                        <i class="fa fa-search"><img src="./images/paper-airplane (1).svg" alt=""
                                                srcset=""></i>
                                    </button>
                                </form>
                            </div>


                            <div class="twitter">

                            </div>
                            <?php
                            if ($query->rowCount() > 0) {
                                while ($donnee = $query->fetchAll()) {
                                    foreach ($donnee as $value) {

                                        ?>
                                        <li class="list-group-item">
                                            <div class="mestwit">

                                                <p>
                                                <div>
                                                    <img src=" <?php echo $value['avatar'] ?>" alt="avatar" srcset="" class="PPT"
                                                        width="50">

                                                </div>
                                                <div>
                                                    <p><strong>
                                                            <?php echo $value['username'] ?>
                                                        </strong> <small class="text-muted">
                                                            <?php echo $value['date_send'] ?>
                                                        </small></p>
                                                </div>

                                                <div class="contenue">
                                                    <p><br>
                                                        <?php echo $texte = $value['message'] ?>
                                                    </p>
                                                    <!-- </div>
                                                                                                                                                             <?php echo $id = $value['id_user'] ?>
                                                </p> -->
                                                    <!-- <p>
                                                                                                                                                            <?php echo $id_tweet = $value['id'] ?>
                                                </p> -->
                                                    <div>
                                                        <?php $like = $link->query("SELECT * from likes WHERE id_user = $keep AND id_tweet = $id_tweet");
                                                        ?>
                                                        <?php $liked = $link->query("SELECT * FROM likes WHERE id_user = $keep AND id_tweet = $id_tweet");

                                                        if ($liked->rowCount() > 0) {
                                                            // Si l'utilisateur a aimé le message, afficher un bouton "Je n'aime plus"
                                                            echo '<form action="" method="post">
                                <input type="submit" name="follow" value="Follow">
                                <input type="hidden" name="cache5" value="' . $texte . '">
                                <input type="hidden" name="cache" value="' . $id_tweet . '">
                                <input type="hidden" name="like1" value="' . $id_tweet . '">
                                <input type="hidden" name="id" class="id" value="' . $id . '">     
                                <input type="submit" name="retweet" ><img src="./images/iterations.svg" alt="" srcset=""></input>
                                <button type="submit" name="unlike"><img src="./images/thumbsdown.svg" alt="" srcset=""></button>
                                <input name="reponse2" type="text" width="100" placeholder="Twitter votre réponse">
                                <button type="submit"><img src="./images/paper-airplane (1).svg" alt="" srcset=""></button>
                                </form>';
                                                        } else {
                                                            // Si l'utilisateur n'a pas aimé le message, afficher un bouton "J'aime"
                                                            echo '<form action="" method="post">
                                    <input type="submit" name="follow" value="Follow">
                                    <input type="hidden" name="cache5" value="' . $texte . '">
                                    <input type="hidden" name="cache" value="' . $id_tweet . '">
                                    <input type="hidden" name="like1" value="' . $id_tweet . '">
                                    <input type="hidden" name="id" class="id" value="' . $id . '">
                                    <input type="submit" name="retweet" ><img src="./images/iterations.svg" alt="" srcset=""></input>
                                    <button type="submit" name="like"><img src="./images/thumbsup.svg" alt="" srcset=""></button>
                                    <input name="reponse2" type="text" width="100" placeholder="Twitter votre réponse">
                                    <button type="submit"><img src="./images/paper-airplane (1).svg" alt="" srcset=""></button>
                                    </form>';
                                                        }
                                                        ?>

                                                        <div class="like">
                                                            <div><img src="./images/code-review.svg" alt="" srcset=""></div>
                                                            <div><img src="./images/sync.svg" alt="" srcset=""></div>
                                                            <div><img src="./images/heart.svg" alt="" srcset=""></div>
                                                            <!-- Example split danger button -->
                                                            <div class="dropdown">
                                                                <button onclick="myFunction()" class="dropbtn"><img
                                                                        src="./images/link-external.svg" alt="" srcset=""></button>
                                                                <div id="myDropdown" class="dropdown-content">
                                                                    <a href="#">Partager</a>
                                                                    <a href="#">Message priver</a>
                                                                    <a href="#">Copier le lien</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                    }
                                    ?>

                                                <?php

                                } ?>
                                            <?php
                            }
                            ?>


                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-header">

                                        <div class="container-fluid">
                                            <form class="d-flex" role="search" method="POST">
                                                <input class="form-control me-2" name="name" type="search"
                                                    placeholder="Rechercher" aria-label="Search">
                                                <button class="btn btn-outline-success" type="submit"><img
                                                        src="./images/codescan-checkmark.svg" alt="" name="valider"
                                                        srcset=""></button>

                                            </form>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Resultat des recherches</h5>
                                            <p class="card-text">
                                            <div class="resulta">
                                                <ul>
                                                    <li>


                                                        <?php
                                                        if ($allusers == 1) {
                                                            foreach ($row_search as $allusers) {
                                                                ?>
                                                                <a
                                                                    href='actualites.php?username=<?php echo urlencode($allusers["username"]); ?>'>
                                                                    <section class="afficher-users">
                                                                        <?php echo $arobase . $allusers["username"]; ?>
                                                                    </section><br>
                                                                </a>
                                                                <?php
                                                            }
                                                        } else {
                                                            echo 'Aucun résultat';
                                                        }
                                                        ?>




                                                    </li>
                                                </ul>
                                            </div>
                                            </p>
                                        </div>

                                    </div>

                                </div>





                        </div>

                        <div class="card">
                            <div class="card-header">

<<<<<<< HEAD:profil.php
                                <div class="container-fluid">
                                    <form class="d-flex" role="search" method="POST">
                                        <input name="name" class="form-control me-2" type="search"
                                            placeholder="Rechercher sur Twitter" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit"
                                            name="valider">Recharger</button>
=======
                            <div class="container-fluid">
                                <form class="d-flex" role="search">
                                    <input name="search" class="form-control me-2" type="search" placeholder="Rechercher"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Recharger</button>
>>>>>>> 31619ec50beaf94eb7c82b6f75664f48f950cd2b:profil .php

                                    </form>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Resultat des recherches</h5>
                                    <!-- <p class="card-text">
                                <div class="resulta">
                                    <ul>
                                        <li>Resultat 1 </li>
                                        <li>Resultat 2 </li>
                                        <li>Resultat 3 </li>
                                        <li>esultat 4</li>
                                    </ul>
                                </div>
                                </p> -->
                                    <section class="'afficher-users">
                                        <div class="resulta">
                                            <p>
                                                <?php

                                                if ($allusers == 1) {

                                                    foreach ($row_search as $allusers) {
                                                        ?>
                                                        <a
                                                            href='profil.php?username=<?php echo urlencode($allusers["username"]); ?>'><?php echo $arobase . $allusers["username"]; ?><br></a>
                                                        <?php
                                                    }
                                                } else {
                                                    echo 'Aucun resultat';
                                                }

                                                ?>
                                            </p>
                                        </div>

                                    </section>
                                </div>

                            </div>

                        </div>




                    </div>

                </div>

            </div>
        </div>


    </main>
    <footer></footer>
</body>

</html>