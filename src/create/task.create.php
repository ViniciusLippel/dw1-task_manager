<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <form action="../action/task.action.php" method="post">
        <fieldset>
            <legend>Create Task</legend><br>
            
            <input type="hidden" name="id" id="id">

            <label for="stage_id">Stage Id: </label><br>
            <select name="stage_id" id="stage_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM stage");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['title']."</option>";
                }
            ?>
            </select><br><br>

            <label for="title">Name: </label><br>
            <input type="text" name="title" id="title"><br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>
            
            <input type="hidden" name="created_on" id="created_on" value="<?php echo date("Y-m-d");?>">

            <label for="deadline">Deadline: </label><br>
            <input type="date" name="deadline" id="deadline"><br><br>
            
            <input type="hidden" name="time_elapsed" id="time_elapsed" value="00:00:00">

            <label for="creator_user_id">Creator User Id: </label><br>
            <select name="creator_user_id" id="creator_user_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM public.user");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['email']."</option>";
                }
            ?>
            </select><br><br>

            <label for="responsible_user_id">Responsible User Id: </label><br>
            <select name="responsible_user_id" id="responsible_user_id">
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