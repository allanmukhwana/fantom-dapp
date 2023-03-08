<?php 

$servertype = "mysql"; // mysql, pgsql
$servername = "localhost";
$serverport = 3306; // mysql: 3306, pgsql: 5432
$username = "clinton_demo";
$password = "xe.Z*e3YDRQ_";
$dbname = "clinton_web3";
$tablename = "web3users";

try {
        if ($servertype == "pgsql") {
                $dsn = "pgsql:host=$servername;port=$serverport;dbname=$dbname;";
        } elseif ($servertype == "mysql") {
                $dsn = "mysql:host=$servername;port=$serverport;dbname=$dbname;";
        } else {
                die ('DB config error');
        }
        $conn = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOException $e) {
        die($e->getMessage());
}