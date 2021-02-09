<?php

session_start();

require 'database.php';
include 'header.php';


$id=$_GET['id'];
$sql = "SELECT * FROM fietsen WHERE FietsID = :ph_FietsID";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_FietsID", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


if(isset ($_POST['submit']) && $_POST['Merk'] && $_POST['Model'] && $_POST['FietsSoort'] && $_POST['Kleur'] && $_POST['SoortRem'] !=""){
    $merk = $_POST['Merk'];
    $model = $_POST['Model'];
    $type = $_POST['FietsSoort'];
    $kleur = $_POST['Kleur'];
    $soortrem = $_POST['SoortRem'];
//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "UPDATE fietsen SET Merk = :ph_Merk, Model = :ph_Model,
FietsSoort = :ph_FietsSoort, Kleur = :ph_Kleur, SoortRem = :ph_SoortRem WHERE FietsID = :ph_FietsID ";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_Merk", $merk );
$stmt->bindParam(":ph_Model", $model );
$stmt->bindParam(":ph_FietsSoort", $type );
$stmt->bindParam(":ph_Kleur", $kleur );
$stmt->bindParam(":ph_SoortRem", $soortrem );
$stmt->bindParam(":ph_FietsID", $id );
$stmt->execute();
header('location: fietsenoverzicht.php');
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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="fietsenoverzicht.php">Fietesenmaker Snelle Jelle</a>
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
        <h1 class="h2">Update fiets</h1>
        
      </div>

      <div class="container">
    <h4 class="display-4"></h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="Merk" class="form-control" value="<?php echo $database_gegevens['Merk'];?>">
        <input type="text" name="Model" class="form-control" value="<?php echo $database_gegevens['Model'];?>">
        <input type="text" name="FietsSoort" class="form-control" value="<?php echo $database_gegevens['FietsSoort'];?>">
        <input type="text" name="Kleur" class="form-control" value="<?php echo $database_gegevens['Kleur'];?>">
        <input type="text" name="SoortRem" class="form-control" value="<?php echo $database_gegevens['SoortRem'];?>">
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