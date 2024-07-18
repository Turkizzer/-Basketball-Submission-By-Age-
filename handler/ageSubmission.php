<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age"])=="") {
    if (isset($_POST['age'])) {
        $age = htmlspecialchars($_POST['age']);
        
        try {
            if ($age <= 18 && $age >= 15) {
                header("Location: ../direction/below18.php");
                exit();
            } elseif ($age <= 30 && $age>18) {
                header("Location: ../direction/below30.php");
                exit();
            } else {
                header("Location: ../direction/notAllowed.php");
                exit();
               
            }
        } catch (Exception $e) { // Catching a general exception if necessary
            echo "Something went wrong in submitting: " . $e->getMessage();
        }
    } else {
        echo "Age is required";
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
