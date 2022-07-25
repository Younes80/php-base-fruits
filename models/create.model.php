<?php

$stmpCreate = $pdo->prepare("INSERT INTO product VALUES (DEFAULT, :name, :iduser)");
$stmpCreate->bindValue(":name", $fruit);
$stmpCreate->bindValue(":iduser", 1);
$stmpCreate->execute();
