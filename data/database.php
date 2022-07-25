 <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=sql_base2', 'root', 'ApQm102938475G!!', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>

