<?php
include("database.php");

$allusers = $link->query('SELECT * FROM users ORDER BY id DESC');
$arobase = '@';

if (isset($_POST['name'])) {
    $search = $_POST['name'];
    $requet_search = 'SELECT username FROM users WHERE username LIKE "%' . $search . '%" ORDER BY id DESC';
    $result_search = $link->prepare($requet_search);
    $result_search->execute();
    $row_search = $result_search->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recherche</title>
    <meta charset="UTF-8">

</head>

<body>

    <form method="POST">
        <input type="search" name="name" placeholder="Rechercher sur Twitter">
        <input type="submit" name="valider">
    </form>

    <section class="'afficher-users">

        <?php

        if ($allusers == 1) {

            foreach ($row_search as $allusers) {
                ?>
                <a href='profil.php?username=<?php echo urlencode($allusers["username"]); ?>'><?php echo $arobase . $allusers["username"]; ?><br></a>
                <?php
            }
        } else {
            echo 'Aucun resultat';
        }

        ?>
      

    </section>

</body>

</html>