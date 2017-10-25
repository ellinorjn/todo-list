<?PHP
    $statement = $pdo->prepare("SELECT title, id FROM todo WHERE completed = 1 ORDER BY id DESC");
    $statement->execute();
    $completed = $statement->fetchAll(PDO::FETCH_ASSOC);