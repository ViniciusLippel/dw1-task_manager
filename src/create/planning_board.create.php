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
    <title>Create Planning Board</title>
</head>
<body>
    <form action="../action/planning_board.action.php" method="post">
        <fieldset>
            <legend>Create Planning Board</legend><br>
            
            <input type="hidden" name="id" id="id">

            <!-- TODO: Select -->
            <label for="project_id">Project: </label><br>
            <select name="project_id" id="project_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM project");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['name']."</option>";
                }
            ?>
            </select><br><br>

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name"><br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>