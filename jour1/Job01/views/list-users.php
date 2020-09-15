
<?php 
//un tableau qui liste les utilisateurs présents dans la base de données
require 'config/db.php';
require 'controllers/Utilisateurs.php';
//$users = new Utilisateurs($model);
$bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$reponse = $bdd->query('SELECT * FROM utilisateurs');
$donnees = $reponse->fetchALL();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Solenn purple haze</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="script.js"></script>
</head>
<body>
<?php include 'views/header.php'; ?>
<main>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Users</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
<?php
  foreach ($donnees as $value)
  {?>
    <tr>
      <th scope="row"><?php echo $donnees[0][0];?></th>
      <td><?php echo $donnees[0][1];?></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>



</main>
</body>
<?php include 'views/footer.php';?>
</html>
