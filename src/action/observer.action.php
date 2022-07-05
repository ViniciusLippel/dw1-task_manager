<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/observer.class.php";
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
        $project = new Observer($_POST["user_id"], $_POST["task_id"]);
        $db->insert($project);
    }
    elseif ($action == 'delete'){
        $project = new Observer($_GET["user_id"], $_POST["task_id"]);
        $db->delete($project);
    }
    
?>