<?php
include("database.php");
$_SESSION['username'] = $pseudo;
$keep = $_COOKIE['bazou'];
$keep2 = $_COOKIE['ssk'];
$affichage = $link->query("SELECT * from users WHERE id = $keep2 ");
$tweets = $link->query("SELECT message, date_send, avatar, username, id_user, tweet.id from tweet INNER JOIN users on id_user = users.id WHERE id_user = $keep2  ORDER BY date_send DESC ");
$psg = $affichage->fetchAll();
$followings = $link->query("SELECT LENGTH(id_following) - LENGTH(REPLACE(id_following, ',' , '')) + 1 FROM users WHERE id=$keep2");
$followers = $link->query("SELECT LENGTH(id_follower) - LENGTH(REPLACE(id_follower, ',' , '')) + 1 FROM users WHERE id=$keep2");
$count_following = $followings->fetchColumn();
$count_follower = $followers->fetchColumn();

if (empty($count_following) && empty($count_follower) || $count_following == "" && $count_follower == "") {
    $following_count = 0;
    $follower_count = 0;
} else {
    $following_count = $count_following;
    $follower_count = $count_follower;
}

if (isset($_POST['follow'])) {
    $recherche = $link->query("SELECT id_following, id_follower FROM users WHERE id = $keep");
    $row = $recherche->fetch();

    $jefollow = $row['id_following'];
    $tufollow = $row['id_follower'];

    if (empty($jefollow) && empty($tufollow)) {
        $follow = $link->query("UPDATE users SET id_following = '$keep2' WHERE id = $keep");
        $follows = $link->query("UPDATE users SET id_follower = '$keep' WHERE id = $keep2");
    } else if (empty($jefollow) && !empty($tufollow)) {
        $follow = $link->query("UPDATE users SET id_following = '$keep2' WHERE id = $keep");
        $follows = $link->query("UPDATE users SET id_follower = CONCAT('id_follower', ',', '$keep') WHERE id = $keep2");
    } else if (!empty($jefollow) && empty($tufollow)) {
        $follow = $link->query("UPDATE users SET id_following = CONCAT(id_following , ',' , $keep2) WHERE id= $keep");
        $follows = $link->query("UPDATE users SET id_follower = '$keep' WHERE id = $keep2");
    }
    // else if(empty($jefollow) && !empty($tufollow) || !empty($jefollow) && empty($tufollow)){
    //     $follow = $link->query("UPDATE users SET id_following = CONCAT('$jefollow', ',', '$keep2') WHERE id = $keep");
    //     $follows = $link->query("UPDATE users SET id_follower = CONCAT('$tufollow', ',', '$keep') WHERE id = $keep2");
    // }
    // else if(!empty($jefollow) && !empty($tufollow)){
    //     $follow = $link->query("UPDATE users SET id_following = CONCAT('$jefollow', ',', '$keep2') WHERE id = $keep");
    //     $follows = $link->query("UPDATE users SET id_follower = CONCAT('$tufollow', ',', '$keep') WHERE id = $keep2");
    // }
}






if (isset($_POST['unfollow'])) {
    $recherche = $link->query("SELECT id_following, id_follower FROM users WHERE id = $keep");
    $row = $recherche->fetch();

    $jefollow = $row['id_following'];
    $tufollow = $row['id_follower'];

    if (strpos($jefollow, $keep2) !== false) {
        //On change l'id following de l'user connecté
        $new_following_list = str_replace($keep2, '', $jefollow);
        $new_following_list = str_replace(',,', ',', $new_following_list);
        $new_following_list = trim($new_following_list, ',');
        $unfollow = $link->query("UPDATE users SET id_following = '$new_following_list' WHERE id = $keep");

        //On change l'id follower de l'user à unfollow
        $new_follower_list = str_replace($keep, '', $tufollow);
        $new_follower_list = str_replace(',,', ',', $new_follower_list);
        $new_follower_list = trim($new_follower_list, ',');
        $unfollows = $link->query("UPDATE users SET id_follower = '$new_follower_list' WHERE id = $keep2");
    }
}





// foreach($tableau as $benjamin){

// }
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
    <script src="/JS/drop.js" defer></script>
    <script src="/JS/test.js" defer></script>

    <title>Profil</title>
</head>

<body>
    <header>
        <nav>
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

            <!-- <div>
                <img src="/image/WOMAN.png" alt="" width="80">
            </div>
            <div class="logo-nav">

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-dark"><a href="actualiter.php"><img src="./image/home.png"
                                alt="" width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/notif.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/message.png" alt=""
                                width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="profil.php"><img src="./image/Profile.png"
                                alt="" width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/plus.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark">Twitter</button>
                </div>
            </div> -->

        </nav>
    </header>

    <main>

        <button id="theme-btn">Changer de thème</button>

        <div class="TR">

            <div class="card text-center">


                <div class="card-body">
                    <div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>

                    <div class="PR">

                        <div class="card mb-3">
                            <div class="banner">
                                <img src="/image/akira.gif" class="card-img-top" alt="..."
                                    style="width: 100%; height: 400px;">

                            </div>

                            <?php foreach ($psg as $benjamin) {
                                $nom = $benjamin['name'];
                                $username = $benjamin['username'];
                                $ville = $benjamin['city'];
                                $bio = $benjamin['bio'];
                                $avatar = $benjamin['avatar'];
                                $date = $benjamin['register_date']; ?>
                                <div class="card-body">
                                    <div class="PP"><img src="<?php echo $avatar ?>" class="PPP" alt="..." width="100">
                                    </div>
                                    <h5 class="card-title">
                                        <?php echo $nom ?>
                                    </h5>
                                    <div><small class="text-muted">Pseudo:
                                            <?php echo $username ?>
                                        </small>
                                    </div>
                                    <div><small class="text-muted">
                                            <?php echo $ville ?>
                                        </small><br><small class="text-muted">Compte crée en
                                            <?php echo $date ?>
                                        </small>
                                    </div>
                                    <div><small class="text-muted">Following :
                                            <?php echo $following_count ?>
                                        </small><small class="text-muted">Followers :
                                            <?php echo $follower_count ?>
                                        </small>
                                    </div>
                                <?php } ?>
                                <div>
                                    <p class="card-text">
                                        <?php echo $bio ?>
                                    </p>
                                </div>
                                <?php
                                $check_follow = $link->query("SELECT id_following FROM users WHERE id = $keep AND FIND_IN_SET($keep2, id_following) > 0");
                                if ($check_follow->rowCount() > 0) {
                                    echo '<form action="" method="post">
                                    <input type="submit" name="unfollow" value="Unfollow"</input></form> ';
                                } else {
                                    echo '<form action="" method="post">
                                    <input type="submit" name="follow" value="Follow"</input></form> ';
                                }
                                ?>

                            </div>

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a id="ok" class="nav-link active" aria-current="page" href="">Mes Tweets</a>

                                </li>
                                <li class="nav-item">
                                    <a id="nav" class="nav-link active" href="">Repost</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active">Likes</a>
                                </li>
                            </ul>
                            <ul class="list-group list-group-flush">
                                <?php
                                if ($tweets->rowCount() > 0) {
                                    while ($om = $tweets->fetchAll()) {
                                        foreach ($om as $value) {


                                            ?>
                                            <li class="list-group-item">
                                                <div class="mestwit">
                                                    <div>
                                                        <img src="<?php echo $value['avatar'] ?>" alt="carapuce" srcset=""
                                                            class="PPT" width="50">

                                                    </div>
                                                    <div>
                                                        <p><strong>
                                                                <?php echo $value['username'] ?>
                                                            </strong> <small class="text-muted">
                                                                <?php echo $value['date_send'] ?>
                                                            </small></p>
                                                    </div>

                                                </div>
                                                <div class="contenue">
                                                    <p><br>
                                                        <?php echo $texte = $value['message'] ?>
                                                    </p>
                                                </div>
                                                <div class="like">
                                                    <div>♠7</div>
                                                    <div>♣9</div>
                                                    <div>♥10</div>
                                                    <!-- Example split danger button -->
                                                    <div class="dropdown">
                                                        <button onclick="myFunction()" class="dropbtn">+</button>
                                                        <div id="myDropdown" class="dropdown-content">
                                                            <a href="#">Partager</a>
                                                            <a href="#">Message priver</a>
                                                            <a href="#">Copier le lien</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php
                                        }
                                    }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>