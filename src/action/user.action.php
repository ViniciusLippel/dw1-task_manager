<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/user.class.php";
    include_once "../interfaces/table.interface.php";
    include_once "../classes/db.class.php";
    
    $db = new Db();

    $action = "";
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET': $action = isset($_GET['action']) ? $_GET['action'] : ""; break;
        case 'POST': $action = isset($_POST['action']) ? $_POST['action'] : ""; break;
    }

    echo $action;

    if ($action == 'save'){
        $user = new User(0, $_POST["name"], $_POST["email"], $_POST["birth_date"], $_POST["lgpd"]);
        $db->insert($user);
    }
    elseif ($action == 'delete'){
        $user = new User($_GET["id"], null, null, null, null);
        $db->delete($user);
    }
    
?>