# PHP-EXPERT-2

## Entiteit verwijderen

## Uitleg

Nu je data hebt toegevoegd moet data ook weer verwijderd worden. Let daarbij op dat je niet _alle_ data van een tabel verwijderd maar wel een enkele rij.

Met een simpele SQL statement kun je dit bereiken.

## Leerdoelen

> 1. [ ] Ik verwijder een enkele rij gegevens uit een database tabel.

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een `<a>` aan die een GET request uitvoert naar `products_delete.php?id=1`
> 3. Als je op `products_delete.php` komt voer je onderstaande code uit.
> 4. Houd er rekening mee dat je parameters mee stuurt.
> 5. Check PHPAdmin of het product is verwijderd.

```php
$id = 1;// Het cijfer 1 moet jij vervangen voor een waarde uit de GET array. $_GET

//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM products WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $id );
$stmt->execute()

```

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
