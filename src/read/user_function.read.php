<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/user_function.class.php";
   include_once "../classes/user.class.php";
   include_once "../classes/function.class.php";
   $title = "Users from planning board";
   $search = isset($_POST["search"]) ? $_POST["search"] : "";
   $planning_board_id = isset($_GET['planning_board_id']) ? $_GET['planning_board_id'] : "";
   $planning_board_name = isset($_GET['planning_board_name']) ? $_GET['planning_board_name'] : "";
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
        <legend>Users from planning board <?php echo $planning_board_name; ?></legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action" id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Name</b></td>
            <td><b>Email</b></td>
            <td><b>Function</b></td>
        </tr>
        <!-- TODO: user_id must be unique -->
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT u.id as u_id, u.name as u_name, u.email, f.id as f_id, f.name as f_name FROM user_function uf, public.user u, public.function f
                                     WHERE uf.user_id = u.id AND uf.function_id = f.id AND uf.planning_board_id = $planning_board_id AND u.name LIKE '$search%' 
                                     ORDER BY u.name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $user = new User($line['u_id'], $line['u_name'], $line['email'], null, null);
                $function = new Function_($line['f_id'], $line['f_name'], null, null)
        ?>
	    <tr><td><?php echo $user->getId();?></td>
            <td><?php echo $user->getName();?></td>
            <td><?php echo $user->getEmail();?></td>
            <td><?php echo $function->getName();?></td>
            
            <td><a href="javascript:deleteRegister('../action/user_function.action.php?action=delete&user_id=<?=$user->getId()?>&function_id=<?=$function->getId()?>&planning_board_id=<?=$planning_board_id;?>')">Remove</a></td>
	    </tr>
        <?php } ?>  
        </table>
        <br><a href="../create/user_function.create.php?planning_board_id=<?=$planning_board_id?>&planning_board_name=<?=$planning_board_name?>">Add new user_function</a>
    </fieldset>
    </form>
</body>
</html>