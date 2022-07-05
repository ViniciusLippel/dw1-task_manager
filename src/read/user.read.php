<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/user.class.php";
   $title = "Users";
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
        <legend>Search Users</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>Id</b></td>
            <td><b>Name</b></td>
            <td><b>Email</b></td>
            <td><b>Birth Date</b></td> 
            <td><b>LGPD</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM public.user
                                     WHERE name LIKE '$search%' 
                                     ORDER BY name");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $user = new User($line['id'], $line['name'], $line['email'], $line['birth_date'], $line['lgpd']);
        ?>
	    <tr><td><?php echo $user->getId();?></td>
            <td><?php echo $user->getName();?></td>
            <td><?php echo $user->getEmail();?></td>
            <td><?php echo $user->getBirth_date();?></td>
            <td><?php echo $user->getLgpd();?></td>

            <td><a href="javascript:deleteRegister('../action/user.action.php?action=delete&id=<?=$user->getId()?>')">Delete</a></td>
	    </tr>
        <?php } ?>   
        </table>
        <a href="../create/user.create.php">Create new user</a>
    </fieldset>
    </form>
</body>
</html>