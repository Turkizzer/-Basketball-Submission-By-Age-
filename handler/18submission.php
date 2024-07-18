<?php

$fname=htmlspecialchars($_POST["fname"]);
$midname=htmlspecialchars($_POST["midname"]);
$lname=htmlspecialchars($_POST["lname"]);

try {
    
    require_once("dbc.php");
    $myQuerry="INSERT INTO below18(fname,midname,lname) VALUES (:fname,:midname,:lname);";
    $stmt=$connector->prepare($myQuerry);
    $stmt->bindParam(":fname", $fname);
    $stmt->bindParam(":midname", $midname);
    $stmt->bindParam(":lname", $lname);
    $stmt->execute();

    header("Location: ../index.php");
    die();

} catch (PDOException $th) {
    echo"Error in 18 below ". $th->getMessage();
}
