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
    <title>Create Function</title>
</head>
<body>
    <form action="../action/function.action.php" method="post">
        <fieldset>
            <legend>Create Function</legend><br>
            
            <input type="hidden" name="id" id="id">

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name"><br><br>

            <label for="description">Description: </label><br>
            <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>

            <!-- TODO: Change option to 'name' when name attribute be added to freedom_level -->
            <label for="freedom_level_id">Freedom Level: </label><br>
            <select name="freedom_level_id" id="freedom_level_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM freedom_level");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['description']."</option>";
                }
            ?>
            </select><br><br>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>