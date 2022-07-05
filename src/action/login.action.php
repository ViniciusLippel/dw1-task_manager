<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/login.class.php";
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
        $project = new Login($_POST["user_id"], $_POST["password"]);
        $db->insert($project);
    }
    elseif ($action == 'delete'){
        $project = new Login($_GET["user_id"], null);
        $db->delete($project);
    }
    
?>