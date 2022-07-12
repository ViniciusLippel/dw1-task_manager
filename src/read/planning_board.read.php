<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/planning_board.class.php";
   $title = "Planning boards";
   $search = isset($_POST["search"]) ? $_POST["search"] : ""; 

?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <script src="../../js/util.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post">
    <fieldset>
        <legend>Search Planning boards</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Project_id</b></td>
            <td><b>Name</b></td>
            <td><b>Description</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM planning_board 
                                     WHERE name LIKE '$search%' 
                                     ORDER BY name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $planning_board = new Planning_board($line['id'], $line['project_id'], $line['name'], $line['description']);
        ?>
	    <tr><td><?php echo $planning_board->getId();?></td>
            <td><?php echo $planning_board->getProject_id();?></td>
            <td><?php echo $planning_board->getName();?></td>
            <td><?php echo $planning_board->getDescription();?></td>
            <td><a href="user_function.read.php?planning_board_id=<?=$planning_board->getId()?>&planning_board_name=<?=$planning_board->getName()?>">Users</a></td>
            <td><a href="javascript:deleteRegister('../action/planning_board.action.php?action=delete&id=<?=$planning_board->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/planning_board.create.php">Create new planning_board</a>
    </fieldset>
    </form>
</body>
</html>