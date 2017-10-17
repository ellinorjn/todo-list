<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
</head>
<body>
  
  <form action="index.php" method="POST">
     <label>Username:</label><input type="text" name="createdBy">
     <label>Your ToDo:</label><input type="text" name="title">
     <input type="submit" name="add" value="Add">      
  </form>
  
 
    
   <?php
        require 'database.php';
        require 'fetch_added.php';
    
    $statement = $pdo->prepare("SELECT title, completed FROM todo");
    $statement->execute();
    $variabel = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($variabel);
    echo '<br/>';
    
    foreach($variabel as $test){
        echo $test['title'] . '<br/>';
        
    }
    
    
    
    $statement2 = $pdo->prepare("SELECT title FROM todo WHERE title = :title");
    $statement2->execute(array(":title" => $_POST["add"]));
    $testar = $statement2->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($testar);
    var_dump($_POST);
    
    
    
    ?>
    
    

    
</body>
</html>

