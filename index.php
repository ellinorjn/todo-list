<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
</head>
<body>
  
  <form action="index.php" method="POST">
    <label>Your ToDo:</label><input type="text" name="title">
     <label>Username:</label><input type="text" name="createdBy">
     <input type="submit" name="add" value="Add">      
  </form>
  
  
  
 
    
   <?php
    
    
    
        require 'database.php';
        require 'fetch_added.php';
    
    $statement = $pdo->prepare("SELECT title, completed FROM todo");
    $statement->execute();
    $variabel = $statement->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($variabel);
    echo '<br/>';
    
    foreach($variabel as $test){
        echo $test['title'] . '<br/>';
        
    }
    
    //var_dump($testar);
    //var_dump($_POST);
    
    ?>
    
    

    
</body>
</html>

