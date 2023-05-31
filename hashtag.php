<?php
include("database.php");

$alltags = $link->query('SELECT message FROM tweet ORDER BY date_send DESC');


if (isset($_POST['resultat'])){
    $tags = $_POST['hashtag'];
    $hashtags = '%' .'#' . $tags . '%';
    $query = "SELECT message FROM tweet WHERE message LIKE :hashtag";
    $stmt = $link->prepare($query);
    $stmt->bindParam(":hashtag", $hashtags);
    $stmt->execute();
    $row_tags = $stmt->fetchAll();

}
?>



<html>
<head>
	<title>Recherche par hashtag</title>
</head>
<body>
	<h1>Recherche par hashtag</h1>
	<form action="hashtag.php" method="POST">
		<label for="hashtag">Rechercher par hashtag :</label>
		<input type="text" name="hashtag" id="hashtag">
		<input type="submit" value="Rechercher" name="resultat">
	</form>

    <section class="afficher-hashtag">

        <?php
        if(!empty($row_tags)){

            foreach ($row_tags as $alltags){
                ?>
                    <a href="hashtag.php?#message=<?php echo urlencode($alltags["message"]); ?>"><?php echo $alltags["message"]; ?><br></a>
                    <?php
                }
            }
        else {
            echo "Aucun hashtag trouvé.";
        }

        ?>

    </section>
</body>
</html>