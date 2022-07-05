<?php
    include_once "../../db/default.inc.php";
    require_once "../../db/Connection.php";
    include_once "../classes/freedom_level.class.php";
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
        $freedom_level = new Freedom_level(
                            0, 
                            $_POST["description"], 
                            isset($_POST["create_stage"]) ? $_POST['create_stage'] : 'FALSE',
                            isset($_POST["edit_stage"]) ? $_POST['edit_stage'] : 'FALSE',
                            isset($_POST["delete_stage"]) ? $_POST['delete_stage'] : 'FALSE',
                            isset($_POST["create_task"]) ? $_POST['create_task'] : 'FALSE',
                            isset($_POST["edit_task"]) ? $_POST['edit_task'] : 'FALSE',
                            isset($_POST["delete_task"]) ? $_POST['delete_task'] : 'FALSE',
                            isset($_POST["add_user"]) ? $_POST['add_user'] : 'FALSE',
                            isset($_POST["delete_user"]) ? $_POST['delete_user'] : 'FALSE',
                            isset($_POST["edit_project"]) ? $_POST['edit_project'] : 'FALSE',
                            isset($_POST["delete_project"]) ? $_POST['delete_project'] : 'FALSE'
                        );
        $db->insert($freedom_level);
    }
    elseif ($action == 'delete'){
        $freedom_level = new Freedom_level(
                            $_GET["id"], 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null, 
                            null
                        );
        $db->delete($freedom_level);
    }
    
?>