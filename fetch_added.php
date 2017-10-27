<?php

    header('location: index.php?message=You have added a new To Do!'); 
    require 'database.php';

    $title = $_POST['title'];
    $username = $_POST['createdBy'];
    
    
    $statementAdd = $pdo->prepare("INSERT INTO todo (title, createdBy) VALUES (:title, :createdBy)");
    $statementAdd->execute  (array
                            (":title" => $_POST['title'], ":createdBy" => $_POST['createdBy']));
    $newAdded = $statementAdd->fetchAll(PDO::FETCH_ASSOC);



    
    
   