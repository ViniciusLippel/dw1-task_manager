<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/planning_board.class.php";
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
        $planning_board = new Planning_board(0, $_POST["project_id"], $_POST["name"], $_POST["description"]);
        $db->insert($planning_board);
    }
    elseif ($action == 'delete'){
        $planning_board = new Planning_board($_GET["id"], null, null, null);
        $db->delete($planning_board);
    }
    
?>