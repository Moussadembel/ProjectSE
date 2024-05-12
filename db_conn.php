<?php

$sName = "mysql";
$uName = "root";
$pass = "root";
$db_name = "todolist";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;port=$port", $uName, $pass);
    // Set PDO attributes here if needed
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
