<?php
$host = 'localhost';
$dbname = 'commonDatabase';
$username = 'benjamin';
$password = '2602';

try {

  $link = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  echo "Connecté à $dbname sur $host avec succès.";

} catch (PDOException $e) {

  die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());

}
?>
<div class="text-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
