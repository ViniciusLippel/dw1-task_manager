<?php
    include_once "db/default.inc.php";
    require_once "db/Connection.php";
    include_once "src/classes/project.class.php";
    include_once "src/interfaces/table.interface.php";
    include_once "src/classes/db.class.php";
    
    $db = new Db();

    $action = "";
    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET': $action = isset($_GET['action']) ? $_GET['action'] : ""; break;
        case 'POST': $action = isset($_POST['action']) ? $_POST['action'] : ""; break;
    }

    echo $action;

    if ($action == 'salvar'){
        $project = new Project(0, $_POST["id"], $_POST["name"], $_POST["description"]);
        $db->insert($project);
    }
    elseif ($action == 'excluir'){
        $project = new Aluno($_GET["id"], "", "");
        $db->delete($project);
    }
    
?>