<?PHP

require 'database.php';
header('location: index.php');


    $id= $_GET['id'];
    $edit= $_POST['edit'];

    $statement=$pdo->prepare("UPDATE todo SET title='$edit' WHERE id=$id"); 
    $statement->execute();
