<?php
require 'database.php';


$id=$_GET['id'];
//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM fietsen WHERE FietsID = :ph_FietsID";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_FietsID", $id );
$stmt->execute();
header('location: fietsenoverzicht.php');
?>