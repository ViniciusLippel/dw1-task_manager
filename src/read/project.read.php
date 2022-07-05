<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/project.class.php";
   $title = "Projects";
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
        <legend>Search Projects</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Name</b></td>
            <td><b>Description</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM project 
                                     WHERE name LIKE '$search%' 
                                     ORDER BY name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $project = new Project($line['id'], $line['name'], $line['description']);
        ?>
	    <tr><td><?php echo $project->getId();?></td>
            <td><?php echo $project->getName();?></td>
            <td><?php echo $project->getDescription();?></td>

            <td><a href="javascript:deleteRegister('../action/project.action.php?action=delete&id=<?=$project->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/project.create.php">Create new project</a>
    </fieldset>
    </form>
</body>
</html>