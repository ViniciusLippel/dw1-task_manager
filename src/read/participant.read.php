<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/participant.class.php";
   include_once "../classes/user.class.php";
   $title = "Participants from task";
   $search = isset($_POST["search"]) ? $_POST["search"] : "";
   $task_id = isset($_GET['task_id']) ? $_GET['task_id'] : "";
   $task_title = isset($_GET['task_title']) ? $_GET['task_title'] : "";
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
        <legend>Participants from task <?php echo $task_title; ?></legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Name</b></td>
            <td><b>Email</b></td>
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT u.id, u.name, u.email FROM participant p, public.user u
                                     WHERE p.user_id = u.id AND p.task_id = $task_id AND u.name LIKE '$search%' 
                                     ORDER BY u.name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $user = new User($line['id'], $line['name'], $line['email'], null, null);
        ?>
	    <tr><td><?php echo $user->getId();?></td>
            <td><?php echo $user->getName();?></td>
            <td><?php echo $user->getEmail();?></td>
            
            <td><a href="javascript:deleteRegister('../action/participant.action.php?action=delete&user_id=<?=$user->getId()?>&task_id=<?=$task_id;?>')">Remove</a></td>
	    </tr>
        <?php } ?>  
        </table>
        <br><a href="../create/participant.create.php?task_id=<?=$task_id?>&task_title=<?=$task_title?>">Add new participant</a>
    </fieldset>
    </form>
</body>
</html>