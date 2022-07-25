<?php


$stmtEdit = $pdo->prepare("UPDATE product SET name = :name WHERE id = :id");
$stmtEdit->bindValue(":name", $fruit);
$stmtEdit->bindValue(":id", $id);
$stmtEdit->execute();
