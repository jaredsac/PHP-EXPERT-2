<?php
require 'database.php';


$id=$_GET['id'];
//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM fietsen WHERE id = :ph_ID";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_ID", $id );
$stmt->execute();

header('location: fietsenoverzicht.php');
?>