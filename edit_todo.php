<?PHP

require 'database.php';


    $id= $_POST['add'];
    $edit= $_POST['add'];

    $statement=$pdo->prepare("SELECT title AS edit=$edit from todo WHERE id=$id"); 
    $statement->execute();
    