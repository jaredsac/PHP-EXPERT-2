<?php
require 'database.php';

$id=$_GET['id'];
var_dump($_GET);
//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM reparatie WHERE ReparatieID = :ph_ReparatieID";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_ReparatieID", $id );
$stmt->execute();

//header('location: reparatieoverzicht.php');
?>