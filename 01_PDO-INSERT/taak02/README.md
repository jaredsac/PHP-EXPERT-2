# PHP-EXPERT-2

## Locatie toevoegen (INSERT)

## Uitleg

In deze opdracht ga je nog meer data toevoegen aan de database `toolsforever`. Maar nu ga je een locatie toevoegen.

```php
//gegevens uit een formulier ophalen.
$name = $_POST['form_name'];
$address = $_POST['form_address'];
$city = $_POST['form_city'];

$sql = "INSERT INTO users (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;//sql query
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_name", $name ); //verbind de waardes
$stmt->bindParam(":ph_address", $address ); //verbind de waardes
$stmt->bindParam(":ph_city", $city ); //verbind de waardes
$stmt->execute();
```

## Leerdoelen

> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een create_location.php
> 3. Maak een database connectie zoals hierboven beschreven
> 4. Maak een formulier waarbij je een naam, adres en stad van een lokatie uit het formulier kan ophalen.
> 5. Maak gebruik van bovenstaande code om een locatie in de db op te slaan.
> 6. Check PHPAdmin of de nieuwe gebruiker is opgeslagen.

## Eindresultaat

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
