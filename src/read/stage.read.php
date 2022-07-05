<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/stage.class.php";
   $title = "Stages";
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
        <legend>Search Stages</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Planning_board_id</b></td>
            <td><b>Title</b></td>
            <td><b>Description</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM stage 
                                     WHERE title LIKE '$search%' 
                                     ORDER BY title");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $stage = new Stage($line['id'], $line['planning_board_id'], $line['title'], $line['description']);
        ?>
	    <tr><td><?php echo $stage->getId();?></td>
            <td><?php echo $stage->getPlanning_board_id();?></td>
            <td><?php echo $stage->getTitle();?></td>
            <td><?php echo $stage->getDescription();?></td>

            <td><a href="javascript:deleteRegister('../action/stage.action.php?action=delete&id=<?=$stage->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/stage.create.php">Create new stage</a>
    </fieldset>
    </form>
</body>
</html>