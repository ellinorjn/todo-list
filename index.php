<?php 
    require 'head.html';
    require 'database.php';
    require 'fetch_added_index.php';
?>
  
<!--- LISTA MED TO DO'S --->
<div class="todo">
  <h1>Things To Do!</h1>
      
      
<div class="message">        
<?php
      
    if(isset($_GET['message'])){
        echo $_GET['message'];
    }else{
        echo "You have not added any new To Do's";
    }
?>
</div> 

<!--- ORDERED LIST --->
    <ol>
        <?php for($i = 0; $i < count($addedToDo); $i++): ?> 
            <li>
                <?php echo $addedToDo[$i]['title']; ?>
                <a href="completed.php?id=<?= $addedToDo[$i]['id'] ?>"><i class="fa fa-check" aria-hidden="true"></i></a>

                <a href="fetch_deleted_index.php?id=<?= $addedToDo[$i]['id'] ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                
                
                
                <form action="edit_todo.php?id=<?= $addedToDo[$i]['id'] ?>" method="POST">
                    <input type="text" name="edit" placeholder="Edit your ToDo"> 
                    <input type="submit" name="add" value="Edit">
                </form>
                
               
                <?php '<br/>'; ?>
            </li> 
        <?php endfor; ?>
    </ol>
<!--- END ORDERED LIST --->

</div> <!--- End div "todo" --->
<div class="clear"></div>    
    
<!--- LÄGG TILL NY TO DO --->    
    
    <div class= "addNew">
        <h3>Add a new To do:</h3>

        <form action="fetch_added.php" method="POST">
            <input type="text" name="title" placeholder="Your To Do" required>
                <br/>
            <input type="text" name="createdBy" placeholder="Username" required>
                <br/>
            <input type="submit" name="add" value="Add">      
        </form>
    </div>

    <div class="clear"></div>
    
    
<!--- LISTA PÅ DE TODO'S SOM ÄR KLARA --->    
<div class="completed">
    <h3>Completed To Do's:</h3>
   
 <?PHP require'completed_loop.php'; ?>
      
        <ul>
            <?php for($i = 0; $i < count($completed); $i++): ?>
                <li>
                    <?php echo $completed[$i]['title']; ?>
                    <a href="fetch_deleted_index.php?id=<?= $completed[$i]['id'] ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                </li>
            <?php endfor; ?>
        </ul>
 </div>
    
<div class="clear"></div>    
       


<?PHP
require 'footer.html';
?>
