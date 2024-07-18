<?php
$host='localhost';
$port="5432";
$dbname="basketball";
$user="postgres";
$password="07082021";

try {

    $connector=new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $th) {
    echo "Error Connecting to database lods " . $th->getMessage();
}
