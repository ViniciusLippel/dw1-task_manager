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
    <title>Create Stage</title>
</head>
<body>
    <form action="../action/stage.action.php" method="post">
        <fieldset>
            <legend>Create Stage</legend><br>
            
            <input type="hidden" name="id" id="id">

            <!-- TODO: Select first the project then the planning board -->
            <label for="planning_board_id">Planning Board Id: </label><br>
            <select name="planning_board_id" id="planning_board_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM planning_board");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['project_id']." | ".$line['name']."</option>";
                }
            ?>
            </select><br><br>

            <label for="title">Name: </label><br>
            <input type="text" name="title" id="title"><br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>