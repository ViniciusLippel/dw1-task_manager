<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";

   $task_id = isset($_GET['task_id']) ? $_GET['task_id'] : "";
   $task_title = isset($_GET['task_title']) ? $_GET['task_title'] : "";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Participant</title>
</head>
<body>
    <form action="../action/participant.action.php" method="post">
        <fieldset>
            <legend>Add Participant for task <?=$task_title;?></legend><br>
            
            <input type="hidden" name="task_id" id="task_id" value='<?=$task_id;?>'>
    
            <!-- TODO: Select only users that are already the responsible, a participant or an observer -->
            <label for="user_id">User Email: </label><br>
            <select name="user_id" id="user_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM public.user");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['email']."</option>";
                }
            ?>
            </select><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>