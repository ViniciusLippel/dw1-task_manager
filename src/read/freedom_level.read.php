<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/freedom_level.class.php";
   $title = "Freedom levels";
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
        <legend>Search Freedom levels</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Description</b></td>
            <td><b>Create Stage</b></td>
            <td><b>Edit Stage</b></td> 
            <td><b>Delete Stage</b></td>
            <td><b>Create Task</b></td>
            <td><b>Edit Task</b></td>
            <td><b>Delete Task</b></td>
            <td><b>Add User</b></td>
            <td><b>Delete User</b></td>
            <td><b>Edit Project</b></td>
            <td><b>Delete Project</b></td>
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM public.freedom_level
                                     WHERE description LIKE '$search%' 
                                     ORDER BY description");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $freedom_level = new Freedom_level(
                                        $line['id'],
                                        $line['description'],
                                        $line['create_stage'],
                                        $line['edit_stage'],
                                        $line['delete_stage'],
                                        $line['create_task'],
                                        $line['edit_task'],
                                        $line['delete_task'],
                                        $line['add_user'],
                                        $line['delete_user'],
                                        $line['edit_project'],
                                        $line['delete_project']
                                    );
        ?>
        <tr><td><?php echo $freedom_level->getId();?></td>
            <td><?php echo $freedom_level->getDescription();?></td>
            <td><?php echo $freedom_level->getCreate_stage();?></td>
            <td><?php echo $freedom_level->getEdit_stage();?></td>
            <td><?php echo $freedom_level->getDelete_stage();?></td>
            <td><?php echo $freedom_level->getCreate_task();?></td>
            <td><?php echo $freedom_level->getEdit_task();?></td>
            <td><?php echo $freedom_level->getDelete_task();?></td>
            <td><?php echo $freedom_level->getAdd_user();?></td>
            <td><?php echo $freedom_level->getDelete_user();?></td>
            <td><?php echo $freedom_level->getEdit_project();?></td>
            <td><?php echo $freedom_level->getDelete_project();?></td>

            <td><a href="javascript:deleteRegister('../action/freedom_level.action.php?action=delete&id=<?=$freedom_level->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/freedom_level.create.php">Create new freedom_level</a>
    </fieldset>
    </form>
</body>
</html>