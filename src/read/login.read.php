<!DOCTYPE html>
<?php 
   include_once "../../db/default.inc.php";
   require_once "../../db/Connection.php";
   include_once "../classes/login.class.php";
   $title = "Logins";
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
        <legend>Search Logins</legend>
        <input type="text"   name="search" id="search" size="37" value="<?php echo $search;?>">
        <input type="submit" name="action"     id="action">
        <br><br>
        <table>
	    <tr>
            <td><b>User_id</b></td>
            <td><b>Password</b></td> 
        </tr>
        <?php
            $pdo = Connection::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM login 
                                     WHERE password LIKE '$search%' 
                                     ORDER BY password");
            while ($line = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $login = new Login($line['user_id'], $line['password']);
        ?>
	    <tr><td><?php echo $login->getUser_id();?></td>
            <td><?php echo $login->getPassword();?></td>

            <td><a href="javascript:deleteRegister('../action/login.action.php?action=delete&user_id=<?=$login->getUser_id()?>')">Delete</a></td>
        </tr>
        <?php } ?>   
        </table>
        <a href="../create/login.create.php">Create new login</a>
    </fieldset>
    </form>
</body>
</html>