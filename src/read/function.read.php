<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/function.class.php";
   $title = "Functions";
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
        <legend>Search Functions</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Name</b></td>
            <td><b>Description</b></td> 
            <td><b>Freedom_level_id</b></td>
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM function 
                                     WHERE name LIKE '$search%' 
                                     ORDER BY name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $function = new Function_($line['id'], $line['name'], $line['description'], $line['freedom_level_id']);
        ?>
	    <tr><td><?php echo $function->getId();?></td>
            <td><?php echo $function->getName();?></td>
            <td><?php echo $function->getDescription();?>
            <td><?php echo $function->getFreedom_level_id();?></td>

            <td><a href="javascript:deleteRegister('../action/function.action.php?action=delete&id=<?=$function->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/function.create.php">Create new function</a>
    </fieldset>
    </form>
</body>
</html>