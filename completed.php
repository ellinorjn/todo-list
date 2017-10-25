<?PHP
header('location: index.php');
require 'database.php';

$id=$_GET['id'];

    $statement = $pdo->prepare("UPDATE todo SET completed = 1 WHERE id=$id");
    $statement->execute();

//var_dump($_GET);
    