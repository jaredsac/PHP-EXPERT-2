<?php
include 'header.php';
require 'database.php';


session_start();



$sql = "SELECT * FROM reparatie JOIN gebruikers ON gebruikers.id = reparatie.medewerker
  JOIN fietsen on fietsen.Fietsid = reparatie.fiets";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);


print_r($database_gegevens);
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Fietsenmaker Snelle Jelle</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="inlog.php">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <?php
            $name = $_SESSION['Voornaam'];

            echo "Welkom"  . $name;
            ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reparatieoverzicht.php">
              Reparatie Overzicht
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klantoverzicht.php">
            Klant Overzicht
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fietsenoverzicht.php">
              Fietsen Overzicht
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
         
        </h6>
        <ul class="nav flex-column mb-2">
          
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Reparaties</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Medewerker</th>
              <th>Fiets</th>
              <th>titel</th>
              <th>datum</th>
              <th>opmerking</th>
              <th>kosten</th>
              <th>Verwijder</th>
              <th>Bijwerken</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($database_gegevens as $item):?>
            <tr>
                <td><?php echo $item['Voornaam'] ." ". $item['Achternaam']?></td>
                <td><?php echo $item['FietsSoort']?></td>
                <td><?php echo $item['Titel']?></td>
                <td><?php echo $item['Datum']?></td>
                <td><?php echo $item['Opmerkingen']?></td>
                <td><?php echo $item['Kosten']?></td>
                <td>
                <a href="reparatiedelete.php?id=<?php echo $item['ReparatieID']?>">DELETE</a>
                </td>
                <td>  
                <a href="reparatieupdate.php?id=<?php echo $item['ReparatieID']?>">UPDATE</a>
                </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <form action="reparatiecreate.php">
    <input class=" btn btn-success  mt-3" type="submit" value="create reparatie" />
      </form>

    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

