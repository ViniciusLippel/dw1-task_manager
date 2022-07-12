<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/user_function.class.php";
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
        $user_function = new User_function($_POST["user_id"], $_POST["function_id"], $_POST["planning_board_id"]);
        $db->insert($user_function);
    }
    elseif ($action == 'delete'){
        $user_function = new User_function($_GET["user_id"], $_GET["function_id"], $_GET["planning_board_id"]);
        $db->delete($user_function);
    }
    
?>