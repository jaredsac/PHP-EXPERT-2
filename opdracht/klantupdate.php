<?php

session_start();

require 'database.php';
include 'header.php';


$id=$_GET['id'];
$sql = "SELECT * FROM gebruikers WHERE ID = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


if(isset ($_POST['submit']) && $_POST['Voornaam'] && $_POST['Achternaam'] && $_POST['Telefoonnummer'] && $_POST['Email'] && $_POST['Wachtwoord'] && $_POST['Rol'] !=""){
    $naam = $_POST['Voornaam'];
    $anaam = $_POST['Achternaam'];
    $nummer = $_POST['Telefoonnummer'];
    $mail = $_POST['Email'];
    $ww = $_POST['Wachtwoord'];
    $rol = $_POST['Rol'];
//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "UPDATE gebruikers SET Voornaam = :ph_Voornaam, Achternaam = :ph_Achternaam,
Telefoonnummer = :ph_Telefoonnummer, Email = :ph_Email, Wachtwoord = :ph_Wachtwoord, Rol = :ph_Rol WHERE ID = :ph_id ";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_Voornaam", $naam );
$stmt->bindParam(":ph_Achternaam", $anaam );
$stmt->bindParam(":ph_Telefoonnummer", $nummer );
$stmt->bindParam(":ph_Email", $mail );
$stmt->bindParam(":ph_Wachtwoord", $ww );
$stmt->bindParam(":ph_Rol", $rol );
$stmt->bindParam(":ph_id", $id );
$stmt->execute();
header('location: klantoverzicht.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.79.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="klusOpdracht_index.php">Fietesenmaker Snelle Jelle</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    <a class="nav-link" href="inlogscherm.php">Sign out</a>
    </li>
  </ul>
</header>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2">Update klant</h1>
        
      </div>

      <div class="container">
    <h4 class="display-4"></h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="Voornaam" class="form-control" value="<?php echo $database_gegevens['Voornaam'];?>">
        <input type="text" name="Achternaam" class="form-control" value="<?php echo $database_gegevens['Achternaam'];?>">
        <input type="text" name="Telefoonnummer" class="form-control" value="<?php echo $database_gegevens['Telefoonnummer'];?>">
        <input type="text" name="Email" class="form-control" value="<?php echo $database_gegevens['Email'];?>">
        <input type="text" name="Wachtwoord" class="form-control" value="<?php echo $database_gegevens['Wachtwoord'];?>">
        <input type="text" name="Rol" class="form-control" value="<?php echo $database_gegevens['Rol'];?>">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>