<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/task.class.php";
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
        $task = new Task(0, $_POST["stage_id"], $_POST["title"], $_POST["description"], $_POST["created_on"], $_POST["deadline"], $_POST["time_elapsed"], $_POST["creator_user_id"], $_POST["responsible_user_id"]);
        $db->insert($task);
    }
    elseif ($action == 'delete'){
        $task = new Task($_GET["id"], null, null, null, null, null, null, null, null);
        $db->delete($task);
    }
    
?>