<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/task.class.php";
   $title = "Tasks";
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
        <legend>Search Tasks</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Stage_id</b></td>
            <td><b>Title</b></td>
            <td><b>Description</b></td>
            <td><b>Created On</b></td> 
            <td><b>Deadline</b></td> 
            <td><b>Time_elapsed</b></td> 
            <td><b>Creator_user_id</b></td> 
            <td><b>Responsible_user_id</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM task 
                                     WHERE title LIKE '$search%' 
                                     ORDER BY title");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $task = new Task($line['id'], $line['stage_id'], $line['title'], $line['description'], $line['created_on'], $line['deadline'], $line['time_elapsed'], $line['creator_user_id'], $line['responsible_user_id']);
        ?>
	    <tr><td><?php echo $task->getId();?></td>
            <td><?php echo $task->getStage_id();?></td>
            <td><?php echo $task->getTitle();?></td>
            <td><?php echo $task->getDescription();?></td>
            <td><?php echo $task->getCreated_on();?></td>
            <td><?php echo $task->getDeadline();?></td>
            <td><?php echo $task->getTime_elapsed();?></td>
            <td><?php echo $task->getCreator_user_id();?></td>
            <td><?php echo $task->getResponsible_user_id();?></td>

            <td><a href="javascript:deleteRegister('../action/task.action.php?action=delete&id=<?=$task->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/task.create.php">Create new task</a>
    </fieldset>
    </form>
</body>
</html>