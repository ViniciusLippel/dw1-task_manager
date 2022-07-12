<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";

   $planning_board_id = isset($_GET['planning_board_id']) ? $_GET['planning_board_id'] : "";
   $planning_board_name = isset($_GET['planning_board_name']) ? $_GET['planning_board_name'] : "";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <form action="../action/user_function.action.php" method="post">
        <fieldset>
            <legend>Add User for planning board <?=$planning_board_name;?></legend><br>
    
            <!-- TODO: Select only users that are already in the planning board -->
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

            <label for="function_id">Function: </label><br>
            <select name="function_id" id="function_id">
            <?php
                $pdo = Connection::getInstance(); 
                $consulta = $pdo->query("SELECT * FROM public.function");
                while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<option value=".$line['id'].">".$line['name']."</option>";
                }
            ?>
            </select><br><br>

            <input type="hidden" name="planning_board_id" id="planning_board_id" value='<?=$planning_board_id;?>'>
            
            <button type="submit" name="action" value="save">Save</button>
        </fieldset> 
    </form>
</body>
</html>