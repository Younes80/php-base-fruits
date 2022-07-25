<?php
$pdo = require_once './data/database.php';

$page = $_GET['page'] ?? '';

// print_r($page);

ob_start();

if ($page === "home") {
    require_once './controllers/home.controller.php';
} elseif ($page === "edit") {
    require_once './controllers/edit.controller.php';
} elseif ($page === "delete") {
    require_once './controllers/delete.controller.php';
}


$content = ob_get_clean();


require_once './views/common/template.php';
