# PHP-EXPERT-2

## Gebruiker toevoegen (INSERT)

## Uitleg

In deze opdracht ga je data toevoegen aan een database halen met behulp van het PDO-object. Je weet uit de module PHP EXPERT 1 dat je eerst een connectie moet maken om daarna het object te gebruiken.

Om data toe te voegen gebruiken we de volgende SQL statement:

`INSERT INTO <tablename> (column1, column2, column2) VALUES (value1, value2, value3)`

Stel je wilt een gebruiker toevoegen aan je database:

```php
//gegevens uit een formulier ophalen met de post method.
$firstName = $_POST['form_firstname'];
$lastName = $_POST['form_lastname'];

$sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;//sql query
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_firstname", $firstName ); //verbind de waardes
$stmt->bindParam(":ph_lastname", $lastName ); //verbind de waardes
$stmt->execute();
```

## Leerdoelen

> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een create.php
> 3. Maak een database connectie
> 4. Maak een formulier waarbij je een voornaam en achternaam kan ophalen uit het formulier.
> 5. Maak gebruik van bovenstaande code om een gebruiker in de db op te slaan.
> 6. Check PHPAdmin of de nieuwe gebruiker is opgeslagen.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
