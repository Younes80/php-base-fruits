<?php

$stmp = $pdo->prepare('SELECT * FROM product');
$stmp->execute();
$fruits = $stmp->fetchAll();
return $fruits;
