# PHP-EXPERT-2

## Entiteit toevoegen

## Uitleg

Deze opdracht gaan we nog meer data toevoegen. Maar omdat te doen hebben we nog een databasetabel nodig.
We gaan producten toevoegen aan de database via een formulier. Bij deze taak heb je kennis nodig die bij PHP Expert voorbij is gekomen.

## Leerdoelen

> 1. [ ] Ik maak een nieuwe database tabel via phpmyadmin
> 1. [ ] Ik voeg gegevens toe aan een databasetabel

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Maak een nieuwe databasetabel genaamd `products`
> 3. Voeg de volgende gegevens toe:
>       - `id` (int:11),
>       - `name` (varchar:60),
>       - `purchase_price`  (decimal:5,2),
>       - `selling_price`  (decimal:5,2)
> 4. Maak een formulier waarbij je een naam, aankoopprijs en verkoopprijs van het product uit het formulier kan ophalen. (denk aan de method: post of get)
> 5. Gebruik de code uit de vorige opdracht en verander de code zodanig dat de code overeenkomt met deze opdracht. Kom je er niet uit vraag om hulp
>
> ```php
> $sql = "INSERT INTO users (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;//sql query
> $stmt = $db_conn->prepare($sql); //stuur naar mysql.
> $stmt->bindParam(":ph_name", $name ); //verbind de waardes
> $stmt->bindParam(":ph_address", $address ); //verbind de waardes
> $stmt->bindParam(":ph_city", $city ); //verbind de waardes
> $stmt->execute();
> ```
>
> 6. Check PHPAdmin of het nieuwe product is opgeslagen.

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
