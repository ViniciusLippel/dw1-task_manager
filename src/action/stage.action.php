<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/stage.class.php";
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
        $stage = new Stage(0, $_POST["planning_board_id"], $_POST["title"], $_POST["description"]);
        $db->insert($stage);
    }
    elseif ($action == 'delete'){
        $stage = new Stage($_GET["id"], null, null, null);
        $db->delete($stage);
    }
    
?>