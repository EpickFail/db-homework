<?php
include './db/index.php';

$stm = $pdo->prepare("SELECT * FROM workers");
$stm->execute();
$result = $stm->fetchAll();

foreach ($result as $row) {
    printf("Сотрудник № - %s %s %s %s<br>", $row['id'], $row['name'], $row['age'], $row['salary']);
}