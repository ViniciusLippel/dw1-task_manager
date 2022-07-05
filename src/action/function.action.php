<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/function.class.php";
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
        $function = new Function_(0, $_POST["name"], $_POST["description"], $_POST["freedom_level_id"]);
        $db->insert($function);
    }
    elseif ($action == 'delete'){
        $function = new Function_($_GET["id"], null, null, null);
        $db->delete($function);
    }
    
?>