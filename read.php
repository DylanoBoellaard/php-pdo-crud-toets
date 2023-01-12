<?php

// Verbinding SQL server
require('config.php');

// Data sourcename string
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

// Maken van verbinding
try {
    $pdo = new PDO ($dsn,$dbUser,$dbPass);
    if ($pdo) {
        echo "Er is verbinding gemaakt met de SQL database";
    } else {
        echo "Internal server error";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

// Opvragen tabelgegevens
$sql = "SELECT Id
            ,Merk
            ,Model
            ,Topsnelheid
            ,Prijs
        FROM Dureauto
        ORDER BY Prijs DESC";

// Voorbereiden query
$statement = $pdo->prepare($sql);

// Query afvuren
$statement->execute();

// Statement wordt in $result gestopt
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// gegevens in de tabel zetten
$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Merk</td>
                <td>$info->Model</td>
                <td>$info->Topsnelheid</td>
                <td>$info->Prijs</td>
                <td>
                    <a href='delete.php?id={$info->Id}'>
                        <img src='b_drop.png' alt='Drop'</img>
                    </a>
                </td>
            </tr>";
}

?>

<!-- Tabel zelf, wat te zien is op de pagina -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-pdo-crud-toets</title>
</head>
<body>
    <a href="index.php"> Home Page</a>
    <h2>De vijf duurste auto's ter wereld</h2>
    <table border="1">
        <thead>
            <th>Merk</th>
            <th>Model</th>
            <th>Topsnelheid</th>
            <th>Prijs</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>
</html>


