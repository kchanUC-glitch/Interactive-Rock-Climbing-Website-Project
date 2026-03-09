
<?php
#process data requested from AJAX in scripts.js and return the results(for adaptive searchbar)
#This will also take in the form data from contact.php and update the mySQL DB. MAKE SURE TO VALIDATE.

$type = 'mysql';
$server = 'localhost';
$db = "rockclimbdb";
$port = 80;
$charset = 'utf8mb4';

$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

$username = "";
$password = "";

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->query("SELECT $GET FROM "); # how to return all the names of the table? JS will do the filtering to find matches to the user search
$returnSearchQuery = $statement->fetchAll();

echo($returnSearchQuery); 


