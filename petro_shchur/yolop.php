<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна 2 -> Виведення 5</title>
    <style>
        body {
            background-color: gray;
            color: seashell;
        }

        p {
            font-style: bold;
            font-size: 130%;
            color: seashell;
        }
    </style>

</head>

<body>

    <?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "students";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, family_name FROM Studentsdata LIMIT 4 OFFSET 16";
    $result = $conn->query($sql);
    echo "<p>Виведення 5 : </p>" . "<br>";
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo '<table border = 1>';
            echo '<tr><td>' . "id: " . $row["id"] . '</td><td>' . "  Ім'я: " . $row["firstname"] . '</td><td>' . " Прізвище  " . $row["family_name"] . '</td><tr>';
            echo '</table>';
        }
    } else {
        echo "0 results";
    }
    echo '<br><br>';
    echo ' <a href="akakiy.php">На головну</a> <br><br> <br>';
    echo ' <a href="baranchik.php?offset=' . 1 . '">' . 1 . '</a>';
    echo ' <a href="valera.php?offset=' . 2 . '">' . 2 . '</a>';
    echo ' <a href="gomer.php?offset=' . 3 . '">' . 3 . '</a>';
    echo ' <a href="edik.php?offset=' . 4 . '">' . 4 . '</a>';
    ?>

</body>

</html>