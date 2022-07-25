<?php

$stmt = $pdo->prepare("SELECT * FROM product WHERE id = :id");
$stmt->bindValue(":id", $id);
$stmt->execute();
$fruits = $stmt->fetch();
return $fruits;
