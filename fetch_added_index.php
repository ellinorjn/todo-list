<?PHP
require 'database.php';

    $statement = $pdo->prepare("SELECT title, id FROM todo WHERE completed = 0 ORDER BY id DESC");
    $statement->execute();
    $addedToDo = $statement->fetchAll(PDO::FETCH_ASSOC);

