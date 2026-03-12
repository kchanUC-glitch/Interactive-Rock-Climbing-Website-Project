<?php
// sets credentials for later use in dsn
$host = '127.0.0.1';
$db   = 'test2';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// DSN (data source name) is used for the "adress" of the database
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [

    // Makes it so it will though errors instead of silently failing
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    // Makes it so it fetches an associative array
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    // This forces PHP to use real "Prepared Statements," which makes it harder for sql injections
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// tries to open up the connection to the database
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Log the error and show a user-friendly message in case the connection fails
    error_log($e->getMessage());
    die("Internal Server Error. Please try again later.");
}
?>

<!-- Webpage start -->
<!DOCTYPE html>
<html lang="en">
    <head>
        </head>
    <body>
        <?php include('navHeading.php'); ?>


        <div class="container mt-5">
            <h1>Welcome to the Site</h1>
            <img id="bannerImage" src="../images/pageBanner.png" class="img-fluid">
            
            <!-- Displays if the database connected. Can be deleted later after tests -->
            <?php 
                // 2. Use the connection here to show content
                echo "<p>The database is ready to fetch your data!</p>"; 
            ?>
        </div>
    </body>
</html>