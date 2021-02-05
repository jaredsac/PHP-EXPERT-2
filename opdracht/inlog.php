<?php

require 'database.php';
include 'header.php';




if(isset($_POST['form_login'])){

  $email    =$_POST['form_email'];
  $password =$_POST['form_password'];


  $sql = "SELECT * FROM gebruikers WHERE email= :ph_email";
  $statement = $db_conn->prepare($sql);
  $statement->bindParam(":ph_email", $email); 
  $statement->execute();
  $database_gegevens= $statement->fetch(PDO::FETCH_ASSOC);

  if($database_gegevens != FALSE){

        if($database_gegevens['Wachtwoord'] == $password){
          
          session_start();

          $_SESSION['Voornaam'] = $database_gegevens['Voornaam'];
          $_SESSION['ID'] = $database_gegevens['ID'];
          
            
          
        }

        if($database_gegevens['Rol'] == "klant"){
          header('location: klant_reparatie.php');
        }else{
          header('location: klantoverzicht.php');
        }
  }
 
}



  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    <title></title>
</head>
<body class="text-center">
    <main class="form-signin">
      <form method="post" action="">
        <h1 class="h3 mb-3 fw-normal"> Sign In</h1>

        <label for="form_email" class="visually-hidden">Email address</label>
        <input type="email" id="form_email" class="form-control" name="form_email" placeholder="Email address" required autofocus>

        <label for="form_password" class="visually-hidden">Password</label>
        <input type="password" id="form_password" name="form_password" class="form-control" placeholder="Password" required>

        <button class="w-100 btn btn-lg " Style="background-color: #F6AA1C ;" type="submit" name="form_login">Sign in</button>
        
        <a class="nav-link" href="account_create.php">Account aanmaken</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>

      </form>
    </main>
    
    
        
      </body>
</html>
