<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    try {
        require_once("dbc.php");
        $myQuerry1="SELECT *FROM below18;";
        $myQuerry2="SELECT *FROM above18;";
        $stmt=$connector->prepare($myQuerry1);
        $stmt2=$connector->prepare($myQuerry2);
        $stmt->execute();
        $stmt2->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $result2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
       


    } catch (PDOException $th) {
        echo"Error fetching ". $th->getMessage();
    }

} else {
    header("Location: ../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background-color: gray;
            padding: 15px;
            text-align: center;
            border-radius: 20px;

        }

        table th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Entries</h1>
    </header>
    <main>
        <section class="above">
            <h1>Entries for 15-18</h1>
            <?php
            if (empty($result)) {
                echo"<h1>No data Yet</h1>";
            } else {
                echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                        </tr>";
                foreach ($result as $row) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["fname"]) . "</td>
                            <td>" . htmlspecialchars($row["midname"]) . "</td>
                            <td>" . htmlspecialchars($row["lname"]) . "</td>
                          </tr>";
                }
                echo "</table>";
            }
?>
        </section>
        <section class="below">
            <h1>Entries for 18-30</h1>
            <?php
if (empty($result2)) {
    echo"<h1>No data Yet</h1>";
} else {
    echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                        </tr>";
    foreach ($result2 as $row) {
        echo "<tr>
                            <td>" . htmlspecialchars($row["fname"]) . "</td>
                            <td>" . htmlspecialchars($row["midname"]) . "</td>
                            <td>" . htmlspecialchars($row["lname"]) . "</td>
                          </tr>";
    }
    echo "</table>";
}
?>
        </section>
    </main>
</body>

</html>