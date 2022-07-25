<?php

$fruits = require_once './models/show.model.php';

$title = "PHP - Les bases (dans une variable)";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fruit = $_POST['name'];

    if (!$fruit) {
        $error = 'Champ à renseigner';
    }


    if (!$error) {
        require_once './models/create.model.php';

        header('Location: index.php?page=home');
    }
}

require_once './views/home.php';
