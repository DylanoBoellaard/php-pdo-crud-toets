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
        ORDER BY Prijs ASC";

$statement = $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);


$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Id</td>
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

<a href="index.php"> Home Page</a>
<h3>De vijf duurste auto's ter wereld</h3>
<table border="1">
    <thead>
        <th>Id</th>
        <th>Merk</th>
        <th>Model</th>
        <th>Topsnelheid</th>
        <th>Prijs</th>
        <th></th>
    </thead>
    <tbody>
        <?= $rows; ?>
    </tbody>
</table>