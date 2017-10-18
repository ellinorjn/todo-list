<?php
   $title = $_POST['title'];
    $username = $_POST['createdBy'];
    
    
    $statementAdd = $pdo->prepare("INSERT INTO todo (title, createdBy) VALUES (:title, :createdBy)");
    $statementAdd->execute(array
                         (":title" => $_POST['title'], ":createdBy" => $_POST['createdBy']));
    $newAdded = $statementAdd->fetchAll(PDO::FETCH_ASSOC);
    
    
    foreach ($newAdded as $newToDo){
        if(isset($_POST['add']) && !empty($title)
                                && !empty($username)){
        echo $newToDo ['title'] . '<br/>';
        }else{
            echo ' ';
        }
    }
    
    
    if(isset($_POST['add']) && !empty($title)
                            && !empty($username)){
        echo "Ny tillagd!";
    }else{
        ' ';
    }