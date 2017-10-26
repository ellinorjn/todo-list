<?php

    header('location: index.php'); 
    require 'database.php';

    $id= $_GET['id'];
    $edit= $_POST['edit'];
    
    
    $statementAdd = $pdo->prepare("INSERT INTO todo title VALUES :title");
    $statementAdd->execute  (array
                            (":title" => $_POST['edit']));
    $newAdded = $statementAdd->fetchAll(PDO::FETCH_ASSOC);